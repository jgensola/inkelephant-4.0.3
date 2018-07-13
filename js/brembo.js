$(document).ready(function () {
    //mobile sliding menu
    $('.brembo .menu-toggle').on('click', function () {
        $('.brembo.container').removeClass('inactive').addClass('active');
        $('.site-nav').removeClass('inactive').addClass('active');
        $('body').removeClass('inactive').addClass('active');
    });

    $('.brembo .btn-close').on('click', function () {
        $('.brembo.container').removeClass('active').addClass('inactive');
        $('.site-nav').removeClass('active').addClass('inactive');
        $('body').removeClass('active').addClass('inactive');
    });

    $('.brembo .overlay').on('click', function () {
        $('.brembo.container').removeClass('active').addClass('inactive');
        $('.site-nav').removeClass('active').addClass('inactive');
        $('body').removeClass('active').addClass('inactive');
    });

    $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        nav:true,
        navElement: 'span type="span" class="button" role="presentation"'
    });
});