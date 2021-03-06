require('./bootstrap');

document.addEventListener("DOMContentLoaded", function () {

    document.getElementById('preloader').style.visibility = 'hidden';

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true
    });

    $('#main-nav-bar').waypoint(function (direction) {
        if (direction === "down") {
            $('#main-nav-bar').addClass('sticky');
        } else {
            $('#main-nav-bar').removeClass('sticky');
        }
    }, {
        offset: '80px;'
    });

    $("#contact-form-submit").on("click", function (e) {

        let frm = $("#contact-form");
        let valid = true;
        const regex = RegExp('[a-zA-Z0-9.@\-\s]+$');

        $(".error-span").hide();
        frm.find('input, textarea').removeClass('validation-error');
        frm.find('input, textarea').each(function (_, field) {
            let val = $.trim($(field).val());
            if (regex.test(val) === false) {
                valid = false;
                $(field).prev("label").find(".error-span").show();
                $(field).addClass('validation-error');
                return false;
            }
        });

        return valid;
    });

    $(".mobile-nav-link").on("click", function(e)  {
        $("#navi-toggle").prop("checked", !$("#navi-toggle").prop("checked"));
    });
});
