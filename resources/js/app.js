const { unset } = require('lodash');

require('./bootstrap');

jQuery(function () {

    var activeClass = null;
    $('.navitem').on('mouseenter', function() {
        activeClass = $('.active');
        $('.navitem.active').toggleClass('active');
        $(this).toggleClass('active');
    }).on('mouseleave', function(event) {
        if(activeClass != null) {
            activeClass.toggleClass('active');
            $(this).toggleClass('active');
        }
    })

    $('.theme-button .switch').on('click', function() {
        var chkbox = $(this).find('input[type="checkbox"]');
        chkbox.prop('checked', !chkbox.prop('checked'));
        $(document.documentElement).toggleClass('theme-light');
        $(document.documentElement).toggleClass('theme-dark');
    })

    function close(element) {
        //ele.find('form').trigger('reset');
        element.find('form').validate().resetForm();
        element.toggleClass('active');
    }

    $('#login-form input, #registration-form input').on('focus', function(element) {
        $('#login-form, #registration-form').find('.server-errors').hide();
    })

    $('.login, .register').on('click', function(event) {
        if(!$(event.target).closest('.login .container, .register .container').length) {
            close($(this));
        }
    })

    $('#login-form').validate({
        rules: {
            email: {
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter($(element).closest('.form-input'));
        }
    })

    $('#registration-form').validate({
        rules: {
            phone: {
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                email: true
            },
            password: {
                minlength: 6
            },
            password_confirmation: {
                equalTo: "#password",
            }
        },
        messages: {
            password_confirmation: {
                equalTo: 'Please enter the same password.'
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter($(element).closest('.form-input'));
        }
    })

    $('.close-btn').on('click', function() {
        close($(this).parents('.active'));
    })

    $('.login-btn, .register-btn').on('click', function() {
        $('#login-form, #registration-form').find('.server-errors').hide();
        $('.login, .register').find('form').trigger('reset');
        $('.login, .register').toggleClass('active');
    })

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape')
            close($('.login.active, .register.active'));
    })

    $('body').on('scroll', function() {
        if($('body').scrollTop() > 100)
            $('.scroll-to-top').show();
        else
            $('.scroll-to-top').hide();
    })

    $('.scroll-to-top').on('click', function() {
        $('body').scrollTop(0);
    })

});
