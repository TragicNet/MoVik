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

    $('.login').on('click', function(event) {
        if(!$(event.target).closest('.login .container').length) {
            $('.login').toggleClass('active');
            $('body').css('overflow', 'auto');
        }
    })

    $('.navitem.account').on('click', function() {
        if(logged != null) {
            window.location.href = '/account';
            return true;
        }
        $('body').css('overflow', 'hidden');
        $('.login').toggleClass('active');
    })

});
