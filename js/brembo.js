// /* Set the width of the side navigation to 250px */
// function openNav() {
//     document.getElementById("mySidenav").style.width = "250px";
//     document.getElementById("brembo-container").style.right = "250px";
//     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
// }
//
// /* Set the width of the side navigation to 0 */
// function closeNav() {
//     document.getElementById("mySidenav").style.width = "0";
//     document.getElementById("brembo-container").style.right = "0";
//     document.body.style.backgroundColor = "white";
// }

$(document).ready(function () {
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
});