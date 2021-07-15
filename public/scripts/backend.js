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
        $("#dashboardHome").show();
        $("#chapterList").show();
        $("#commentList").show();
        $("#newChapter").show();
        $("#contactList").show();
        $(".newchapterForm").show();
    });


    // $("#form-image-upload").on("submit", function(e) {
    //     e.preventDefault();
    //     var $form = $(this);
    //     var form = new FormData($form[0]);
    //     $.ajax({
    //         url: $form.attr("action"),
    //         method: $form.attr("method"),
    //         data: form,
    //         processData: false,
    //         contentType: false,
    //         success: function(data, status, xhr) {
    //             $("#image").val(data); // set image name in form
    //             $("#image-preview").attr("src", "/public/images/" + data);
    //         },
    //         error: function(error) {
    //             alert(error.responseText);
    //         }
    //     });
    // });
});