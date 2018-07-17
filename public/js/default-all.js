$(document).ready(function () {
    $(window).on('load', function () {
        AOS.refresh();
    });

    $('.nav-link').on('click', function (e) {
        var nav = $(this).data("nav");
        console.log(nav);

        $('html, body').animate({
            scrollTop: $("#" + nav).offset().top - 40
        }, 1500);

        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        $('.navbar-toggler').addClass('collapsed');
        $('.navbar-toggler').attr('aria-expanded', false);
        $('.navbar-collapse').removeClass('show');
    });

    $(window).scroll(function () {
        if($(window).scrollTop() >= $('#banner').offset().top) {
            $(".nav-link").removeClass('active');
            $("a[href='#banner']").addClass('active');
        }
        if($(window).scrollTop() + 100 >= $('#profile').offset().top) {
            $(".nav-link").removeClass('active');
            $("a[href='#profile']").addClass('active');
        }
        if($(window).scrollTop() + 150 >= $('#skills').offset().top) {
            $(".nav-link").removeClass('active');
            $("a[href='#skills']").addClass('active');
        }
        if($(window).scrollTop() + 250 >= $('#blog').offset().top) {
            $(".nav-link").removeClass('active');
            $("a[href='#blog']").addClass('active');
        }
    });

    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.sf-back-to-top').fadeIn('slow');
        } else {
            $('a.sf-back-to-top').fadeOut('slow');
        }
    });

    $('a.sf-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
});