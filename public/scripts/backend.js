$(document).ready(function() {
    $("#burger_action").on("click", function() {
        $("#burger_menu").toggle();
    });

    tinymce.init({
        selector: 'textarea#body',
        height: 700,
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        // when tiny is initiated we set up the funtion to show the body texts
        setup: function(editor) {
            editor.on('init', function(e) {
                editor.setContent($("#body-hidden").val());
            });
        }
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
    $(".dashboardHome a").click(function(event) {
        $("#contactList").show();
        $(".newchapterForm").show();
    });
});