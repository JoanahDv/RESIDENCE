$(document).ready(function() {
    $(".burger_action").on("click", function() {
        $(".burger_menu").toggle();
    });


    var stations = [];
    var mapWrapper = new MapWrapper();
    if (mapWrapper.map === null) { // no map on page
        return;
    }
    $("#filters_form").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        var form = $(this);

        var search = formDataToObject(form.serializeArray());
        var filtered_stations = [];
        stations.forEach(function(station) {
            if (
                (search.minTravelTime && search.minTravelTime > station.travelTime) ||
                (search.maxTravelTime && search.maxTravelTime < station.travelTime) ||
                (search.seaside && !station.hasCoastline) ||
                (search.mountain && !station.hasMountains) ||
                (search.countryside && !station.hasCountryside) ||
                (search.park && !station.hasPark) ||
                (search.lake && !station.hasLake) ||
                (search.fibre && !station.hasFiber)
            ) {
                return;
            }
            filtered_stations.push(station)
        })
        mapWrapper.updateStations(filtered_stations);
    });

    mapWrapper.map.on('load', function(event) { // c'est dans la classe map.js
        const client = algoliasearch(algoliaApplicationID, algoliaApiKey);
        const index = client.initIndex('stations');


        index.browseObjects({
            query: '', // all stations (no text search)
            filters: `fromCityInseeCode=75056`, // from Paris
            batch: function(batch) { // go through stations
                stations = stations.concat(batch); // add batch to station list
            }
        }).then(function() {
            mapWrapper.onload(stations);
        });
    });
});

function formDataToObject(formData) {
    var result = {};
    formData.forEach(function(item) {
        result[item['name']] = item['value'];
    });
    return result;
}