$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // contact form
    $("#contact-form").on("submit", function (e) {
        // prevent default form submit
        e.preventDefault();
        $(".message-block").text("");
        // get form data
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        // send ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            dataType: "json",
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message,
            },
            success: function (response) {
                // clear form
                $("#contact-form")[0].reset();
                $(".success-message").text(response.success);
                $(".fail-message").text(response.error);
                $("#errormodal").modal("show");
                setTimeout(function () {
                    $("#errormodal").modal("hide");
                }, 2000);
            },
            error: function (response) {
                // get error messages
                $.each(response.responseJSON.errors, function (key, value) {
                    $("." + key + "_error").text(value);
                });
            },
        });
    });
});
