$(document).ready(function() {
    var stations = [];

    $(".burger_action").on("click", function() {
        $(".burger_menu").toggle();
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

    // $("#loginSubmit").submit(function(event) {
    //     $("headerbackend").hide();
    //     $("#adminHeader").show();
    // });

});