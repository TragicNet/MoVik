require('./bootstrap');

jQuery(function () {

    var activeClass = null;
    $('.navitem').on('mouseenter', function() {
        activeClass = $('.active');
        $('.active').toggleClass('active');
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

    $('.navitem.account').on('click', function() {
        if(logged != null) {
            window.location.href = '/account';
            return true;
        }
        $('.login').toggleClass('active');
    })

    function close(ele) {
        ele.find('form').trigger('reset');
        ele.find('.errors').hide();
        ele.validate().resetForm();
        ele.toggleClass('active');
    }

    $('.login, .register').on('click', function(event) {
        if(!$(event.target).closest('.login .container, .register .container').length) {
            close($(this));
        }
    })

    $('#registration-form').validate({
        rules: {
            password_confirmation: {
                required: true,
                equalTo: "#password"
            }
        },
        invalidHandler: function(validator) {
            // 'this' refers to the form
            console.log('errors');
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        },
        messages: {
            password_confirmation: {
                equalTo: 'Please enter the same password'
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
        $('.login, .register').find('form').trigger('reset');
        $('.login, .register').toggleClass('active');
    })

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            close($('.login.active, .register.active'));
            console.log('Pressed Esc');
        }
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
