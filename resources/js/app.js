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

    $('.themeButton').on('click', function() {
        var html = document.documentElement;
        $(html).toggleClass('theme-light');
        $(html).toggleClass('theme-dark');
    })

    $('.navitem.account').on('click', function() {
        if(logged != null) {
            window.location.href = '/account';
            return true;
        }
        $('body').css('overflow-y', 'hidden');
        $('.login').toggleClass('active');
    })

    function close(ele) {
        ele.find('form').trigger('reset');
        ele.toggleClass('active');
        $('body').css('overflow-y', 'auto');
    }

    $('.login, .register').on('click', function(event) {
        if(!$(event.target).closest('.login .container, .register .container').length) {
            close($(this));
        }
    })

    $('.close-btn').on('click', function() {
        close($(this).parents('.active'));
    })

    $('.login-btn, .register-btn').on('click', function() {
        $('.login, .register').find('form').trigger('reset');
        $('.login, .register').toggleClass('active');
    });

});
