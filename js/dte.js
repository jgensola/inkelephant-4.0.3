/*jslint browser: true, white: true, this: true */
/*global console,jQuery,megamenu,window,navigator*/

/*! Max Mega Menu jQuery Plugin */
(function($) {
    "use strict";

    $(function() {
        $('.max-mega-menu').maxmegamenu();
    });
})(jQuery);

$(document).ready(function() {
    $('.dte .mega-menu-item-33244').on('click', function() {
        if (!$(this).hasClass('active')) {
            $('.dte .mega-menu-item-33244 .mega-sub-menu').removeClass('inactive').addClass('active');
            $(this).removeClass('inactive').addClass('active');
        } else {
            $('.dte .mega-menu-item-33244 .mega-sub-menu').removeClass('active').addClass('inactive');
            $(this).removeClass('active').addClass('inactive');
        }
    });

    $('.dte .mega-menu-item-33245').on('click', function() {
        if (!$(this).hasClass('active')) {
            $('.dte .mega-menu-item-33245 .mega-sub-menu').removeClass('inactive').addClass('active');
            $(this).removeClass('inactive').addClass('active');
        } else {
            $('.dte .mega-menu-item-33245 .mega-sub-menu').removeClass('active').addClass('inactive');
            $(this).removeClass('active').addClass('inactive');
        }
    });

    $('.dte .mega-menu-item-33248').on('click', function() {
        if (!$(this).hasClass('active')) {
            $('.dte .mega-menu-item-33248 .mega-sub-menu').removeClass('inactive').addClass('active');
            $(this).removeClass('inactive').addClass('active');
        } else {
            $('.dte .mega-menu-item-33248 .mega-sub-menu').removeClass('active').addClass('inactive');
            $(this).removeClass('active').addClass('inactive');
        }
    });
});