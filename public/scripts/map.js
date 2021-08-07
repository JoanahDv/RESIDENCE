class MapWrapper {
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

        // map not to zoom while scrolling

        var maxMobileWidth = 768;
        if (window.innerWidth >= maxMobileWidth) { // if width is lower or equal to number, disable zoom if mobile.do
            this.map.scrollZoom.disable();
        }
    }

    // onClick(event) {
    //     var features = this.map.queryRenderedFeatures(event.point); // find features at coordinates
    //     var feature = features[0]; // select first feature
    //     var hasPark = feature.properties.hasPark;
    //     if (hasPark > 0) {};

    onload(stations) {
        // add filter data  to source
        var geojson = this.stationsToGeoJson(stations);
        this.map.addSource("stations", {
            "type": "geojson",
            "data": geojson,
        });

        this.map.addLayer({
            "id": "stations",
            "type": "circle",
            source: "stations"
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
                    "stationName": station.stationName,
                    "travelTime": String(station.travelTime),
                    "cityName": station.cityName,
                    "hasLake": String(station.hasLake),
                    "hasFiber": String(station.hasFiber),
                    "hasPark": String(station.hasPark),
                    "hasCountryside": String(station.hasCountryside),
                    "hasPark": String(station.hasPark),
                    "hasCoastline": String(station.hasCoastline),
                    "hasMountains": String(station.hasMountains)

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