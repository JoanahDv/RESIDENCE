$(document).ready(function() {
    $("#burger_action").on("click", function() {
        $("#burger_menu").toggle();
        console.log($("#burger_menu"));
    });

    $("#contactForm").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        // submit form using AJAX
        var form = $(this);
        $.post({
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $("#success").show();
                $("#contactForm").hide();
            }
        });
    });

    $(".flagform").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        // submit form using AJAX
        var form = $(this);
        $.post({
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                form.prev().show(); // success message is the element right before the form 
            }
        });
    });
    var mapWrapper = new MapWrapper();

    //MAP MARKER
    mapWrapper.map.on('click', "locations", function(event) {
        mapWrapper.onClick(event);
    });

});