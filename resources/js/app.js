require('./bootstrap');

jQuery(function () {

    $('.navitem').on('mouseenter', function() {
        activeClass = $('.active');
        $('.active').toggleClass('active');
        $(this).toggleClass('active');
    }).on('mouseleave', function() {
        activeClass.toggleClass('active');
        $(this).toggleClass('active');
    });

    $('.themeButton').on('click', function() {
        var html = document.documentElement;
        $(html).toggleClass('theme-light');
        $(html).toggleClass('theme-dark');
    })
});
