$(document).ready(function() {
    $("#burger_action").on("click", function() {
        $("#burger_menu").toggle();
        console.log($("#burger_menu"));
    });

    $("#filters_form").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        // submit form using AJAX
        var form = $(this);
        $.post({
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                // update map data points
            }
        });
    });

    //map
    mapWrapper.map.on('load', function(event) {
        $.get("/index.php?action=filter_stations", function(stations) { // 
            mapWrapper.onload(stations);
        });
    });

});
var mapWrapper = new MapWrapper();

//MAP MARKER
mapWrapper.map.on('click', "stations", function(event) {
    mapWrapper.onClick(event);
});