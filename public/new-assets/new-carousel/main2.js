$(function (){

    'use strict';

    $(".partners__logo.owl-carousel").owlCarousel({
        autoplay: true,
        autoplayhoverpause: true,
        autoplaytimeout: 100,
        items: 5,
        nav: false,
        loop: true,
        dots: false,
        responsive: {
            0 : {
                items: 1
            },
            485 : {
                items: 2
            },
            728 : {
                items: 3
            },
            1200 : {
                items: 5
            }
        }
    });

});