$(function (){

    'use strict';

    $('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.small-slider'
      });
      $('.small-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.main-slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true
      });

});