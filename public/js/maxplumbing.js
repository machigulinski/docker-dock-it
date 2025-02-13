$(document).ready(function(e) {

    var initTopPosition= $('#header').offset().top;
    var prevPosition = $(window).scrollTop();
    var menuOut = false;

    $(window).scroll(function() {

        if(window.innerWidth >= 992) {

            if ($(window).scrollTop() <= initTopPosition+197) {

                $('#header').css({
                    'top': 21,
                });

                $('#scroll_up_btn_wrap').css({
                    'display': 'none'
                });
            }

            if ($(window).scrollTop() > initTopPosition+197) {
                var curPosition = $(window).scrollTop();

                $('#header').css({
                    'top' : -250
                });

                if (curPosition < prevPosition) {
                    $('#header').css({
                        'top': 21,
                        'position': 'fixed',
                    });

                    $('#scroll_up_btn_wrap').css({
                        'display': 'block'
                    });

                    menuOut = true;

                } else {
                    $('#scroll_up_btn_wrap').css({
                        'display': 'none'
                    });
                }
            }
            prevPosition = curPosition;
        }

        if(window.innerWidth < 992) {

            if ($(window).scrollTop() > initTopPosition) {
                var curPosition = $(window).scrollTop();

                $('#scroll_up_btn_wrap').css({
                    'display': 'none'
                });

                if (curPosition < prevPosition) {

                    if ($(window).scrollTop() > initTopPosition+600) {

                        $('#scroll_up_btn_wrap').css({
                            'display': 'block'
                        });
                    }
                }
            } prevPosition = curPosition;
        }
    });

    $(window).on('resize', function() {

        if (window.innerWidth <= 992) {
            $('#header').css({
                'top': 0,
                'position': 'relative',

            });
        }

        if (window.innerWidth > 992) {
            $('#header').css({
                'top': 21,
                'position': 'absolute',
            });

        }
    });


    /* Contact Form Validation
       *************************************************************************/

    // submit review if validation passes
    $('.contact_form').submit(function (e) {

        if ( validateFirstName() && validateLastName() && validateEmail() && validatePhone() && validateLocation() && validateMessage() ) {
            e.submit();

        } else {
            e.preventDefault();
            validateFirstName();
            validateLastName();
            validateEmail();
            validatePhone();
            validateLocation();
            validateMessage();
        }
    });

    $('#firstname').on('keyup blur change', function (e) {
        validateFirstName();
    });

    $('#lastname').on('keyup blur change', function (e) {
        validateLastName();
    });

    $('#email').on('keyup blur change', function (e) {
        validateEmail();
    });

    $('#phone').on('keyup blur change', function(e) {
        validatePhone();
    });

    $('#location').on('keyup blur change', function (e) {
        validateLocation();
    });

    $('#message').on('keyup blur change', function (e) {
        validateMessage();
    });


    function validateFirstName() {
        var valid = false;
        var name = $('#firstname').val();
        name = name.trim();

        if ((name === null) || (name.length < 2)) {
            $('#firstname').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#firstname').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateLastName() {
        var valid = false;
        var name = $('#lastname').val();
        name = name.trim();

        if ((name === null) || (name.length < 2)) {
            $('#lastname').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#lastname').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateEmail() {
        var valid = false;
        var email = $('#email').val();
        email = email.trim();

        var email_patt = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        if ( (email === null) || !email_patt.test(email)) {
            $('#email').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#email').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validatePhone() {
        var valid = false;
        var phone = $('#phone').val();
        phone = phone.trim();

        var phone_patt = /^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/;

        if( (phone === null) || (!phone_patt.test(phone)) || (phone.length < 10) ) {
            $('#phone').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#phone').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateLocation() {
        var valid = false;
        var location = $('#location').val();
        location = location.trim();

        if ((location === null) || (location.length < 4)) {
            $('#location').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#location').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateMessage() {
        var valid = false;
        var message = $('#message').val();
        message = message.trim();

        if ((message === null) || (message.length < 10) || (message.length > 1000)) {
            $('#message').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#message').removeClass('is-invalid').parent('div').addClass('was-validated');;
            valid = true;
        }
        return valid;
    }

    function validateGoogleV2Captcha() {
        var valid = false;

        if (grecaptcha && grecaptcha.getResponse().length == 0) {
            $('.captchaError').css('display', 'block');

        } else {
            $('.captchaError').css('display', 'none');
            valid = true;
        }
        return valid;
    }


    /* Review module validation
    ******************************************************************************/

    // submit review if validation passes
    $('#feedbackForm').submit(function (e) {

        if ( validateReviewName() && validateReviewEmail() && validateServiceOptions() && validateReviewMessage() &&  validateRating() ) {
            e.submit();

        } else {
            e.preventDefault();
            validateReviewName();
            validateReviewEmail();
            validateServiceOptions();
            validateReviewMessage();
            validateRating();
        }
    });

    $('#revPreviewForm').submit(function (e) {

        if ( validateReviewName() && validateReviewEmail() && validateServiceType() && validateReviewMessage() ) {
            e.submit();

        } else {
            e.preventDefault();
            validateReviewName();
            validateReviewEmail();
            validateServiceType();
            validateReviewMessage();
        }
    });

    $('#review_name').on('keyup blur change', function (e) {
        validateReviewName();
    });

    $('#review_email').on('keyup blur change', function (e) {
        validateReviewEmail();
    });

    $('#service_options').on('blur change', function (e) {
        validateServiceOptions();
    });

    $('#review_message').on('keyup blur change', function (e) {
        validateReviewMessage();
    });

    $('#service_type').on('keyup blur change', function (e) {
        validateServiceType();
    });

    $('input[name=rating]').on('blur change', function (e) {
        validateRating();
    });

    function validateReviewName() {
        var valid = false;
        var name = $('#review_name').val();
        name = name.trim();

        if ((name === null) || (name.length < 2)) {
            $('#review_name').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#review_name').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateReviewEmail() {
        var valid = false;
        var email = $('#review_email').val();
        email = email.trim();

        var email_patt = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        if ( (email === null) || !email_patt.test(email)) {
            $('#review_email').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#review_email').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateServiceOptions() {
        var valid = false;
        var value = $('#service_options').val();

        if( value == '' )  {
            $('#service_options').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {

            $('#service_options').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateServiceType() {
        var valid = false;
        var repair = $('#service_type').val();
        repair = repair.trim();

        if ((repair === null) || (repair.length < 10)) {
            $('#service_type').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#service_type').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateReviewMessage() {
        var valid = false;
        var message = $('#review_message').val();

        message = message.trim();
        if ((message === null) || (message.length < 10) || (message.length > 1000) ) {
            $('#review_message').addClass('is-invalid').parent('div').removeClass('was-validated');

        } else {
            $('#review_message').removeClass('is-invalid').parent('div').addClass('was-validated');
            valid = true;
        }
        return valid;
    }

    function validateRating() {
        var valid = false;

        if( $('input[name=rating]:checked').val() > 0) {

            $('.rating_error').css('display', 'none');
            valid = true;

        } else {
            $('.rating_error').css('display', 'block');
        }
        return valid;
    }

    $('#home_cta .cta').mouseenter(function(){
        $(this).find('img').css('transform', 'scale(1.11)');

    }).mouseleave(function(){
        $(this).find('img').css({
            'transform': 'scale(1)'
        });
    });

    $('#home_cta_wrap .cta_links').mouseenter(function(){
        $(this).find('img').css('transform', 'scale(1.06)');

    }).mouseleave(function(){
        $(this).find('img').css({
            'transform': 'scale(1)'
        });
    });

    $('#home_cta_wrap').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint:991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        dots: false,
        speed: 500,
        fade: false,
        cssEase: 'linear',
        slide: '.home_cta'
    });

    $('.rating_stars label').mouseenter(function(e) {
        var currentStar = $(this).attr('id');

        for(var i=1; i<=currentStar; i++) {
            if( !$('#' + i).hasClass('yellowStar') ) {
                $('#' + i).css('background-position', '0 -30px');
            }
        }

    }).mouseleave(function(e) {
        var currentStar = $(this).attr('id');

        for(var i=1; i<=currentStar; i++) {
            if( !$('#' + i).hasClass('yellowStar') ) {
                $('#' + i).css('background-position', '0 0');
            }
        }
    });

    $('.rating_stars label').click(function(e) {
        var currentStar = $(this).attr('id');
        for (var i=1; i<=5; i++) {
            if (i <= currentStar) {
                $('#' + i).css('background-position', '0 -60px').addClass('yellowStar');
            } else {
                $('#' + i).css('background-position', '0 0px').removeClass('yellowStar');
            }
        }
    });

    $('.reviewSliderFull').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint:991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
        autoplay: true,
        autoplaySpeed: 9000,
        arrows: true,
        dots: false,
        speed: 500,
        fade: false,
        cssEase: 'linear',
        slide: '.slick_item'
    });


    $('.reviewSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        arrows: true,
        dots: false,
        speed: 500,
        fade: false,
        cssEase: 'linear',
        slide: '.slick_item'
    });

    if($("#facebook_feed_section").length > 0) {
        loadFacebookFeed();
    }
    function loadFacebookFeed() {
        $.ajax({
            url: '/facebook_feed', // URL to your Laravel route
            type: 'GET',
            dataType: 'html', // Expect HTML response from server
            beforeSend: function() {
                // Optional: Display a loading spinner or message
                $('#facebook_feed').html('<p class="text-center">Loading OHGDR News...</p>');
            },
            success: function(response) {
                // Update the div with the id 'facebook_feed' with the response
                $('#facebook_feed').html(response);
            },

            error: function(xhr, status, error) {
                // Handle errors
                $('#facebook_feed').html('<p class="text-center">Unable to load OHGDR News. Please try again later.</p>');
                console.error("Error: " + error);
                console.error("Status: " + status);
            }
        });
    }
    
});