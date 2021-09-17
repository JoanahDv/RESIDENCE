class MapWrapper {
    station_layer_id = 'stations';
    constructor() {
        mapboxgl.accessToken = mapAccessToken
        this.map = new mapboxgl.Map({
            container: 'map',
            style: mapStyle,
            center: [1.7191, 46.7111],
            zoom: 5
        });
        // Add zoom and rotation controls to the map.
        this.map.addControl(new mapboxgl.NavigationControl());

        var maxMobileWidth = 768;
        if (window.innerWidth >= maxMobileWidth) { // if width is lower or equal to number, disable zoom if mobile.do
            this.map.scrollZoom.disable();
        }
    }

    onload(stations) {
        // add filter data  to source
        var geojson = this.stationsToGeoJson(stations);
        this.map.addSource("stations", {
            "type": "geojson",
            "data": geojson,
        });

        this.map.addLayer({
            "id": this.station_layer_id,
            "source": "stations",
            "type": "symbol",
            'layout': {
                'icon-image': 'pin',
                'icon-size': 0.5
            },

        });

        var thismap = this.map; // lose reference to "this" in callback functions

        this.map.on('click', this.station_layer_id, function(e) {
            // from https://docs.mapbox.com/mapbox-gl-js/example/popup-on-click/
            // Copy coordinates array.
            const stationId = e.features[0].properties.stationId;
            const stationName = e.features[0].properties.stationName;
            const travelTime = e.features[0].properties.travelTime;
            const cityName = e.features[0].properties.cityName;
            const coordinates = e.features[0].geometry.coordinates.slice();
            const description = e.features[0].properties.cityName +
                "<br>" +
                time_convert(e.features[0].properties.travelTime) +
                //creat a form  for buttons add javascript to call action when submitted
                "<br><form class='favourite_form' method='POST' action='index.php?action=add_favorite'>" +
                "<input type='hidden' name='stationId' value=" + stationId + " />" +
                "<input type='hidden' name='stationName' value=" + stationName + " />" +
                "<input type='hidden' name='cityName' value=" + cityName + " />" +
                "<input type='hidden' name='travelTime' value=" + travelTime + " />" +
                "<input type='submit' value='Favourite' />" +
                "</form>";


            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(thismap);

            $(".favourite_form").submit(function(event) {
                event.preventDefault(); // prevent regular form submit
                var form = $(this);
                $.post(
                    form.attr("action"), //attr helps to acces to the form's action
                    form.serialize(), // pass data to controller
                    function(data) {
                        alert(data);
                    }
                );
            });
        });

        //CURSOR FOR MOUSE
        this.map.on('mousemove', this.station_layer_id, function(e) {
            thismap.getCanvas().style.cursor = 'pointer';
        });
    }

    updateStations(stations) {
        var geojson = this.stationsToGeoJson(stations);
        this.map.getSource('stations').setData(geojson);
    }

    // convert station list from API to geojson
    stationsToGeoJson(stations) {
        var featuresList = []; // empty array of features
        // for each filter
        stations.forEach(function(station) {
            featuresList.push({
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [station.lng, station.lat]
                },
                "properties": {
                    "stationId": station.stationId,
                    "stationName": station.stationName,
                    "travelTime": String(station.travelTime),
                    "hasCoastline": String(station.hasCoastline),
                    "Mountains": String(station.hasMountains),
                    "hasCountryside": String(station.hasCountryside),
                    "cityName": station.cityName,
                    "hasPark": String(station.hasPark),
                    "hasLake": String(station.hasLake),
                    "hasFiber": String(station.hasFiber)
                }

            });
        });
        var geojson = {
            "type": "FeatureCollection",
            "features": featuresList,
        };
        return geojson;
    }
}



function time_convert(num) {
    var hours = parseInt(num);
    return hours + "h de Paris";
}