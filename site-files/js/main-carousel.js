$(document).ready(function() {

  
    $('.main-banner .main-carousel').on('init', function (slick) {
        setTimeout(function () {
            $('.slick-slide.slick-active').find('.text-overlay').fadeIn(600);
        }, 500);
    });

    $('.main-banner .main-carousel').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        setTimeout(function () {
            $('.text-overlay').removeAttr('style');
            $('.slick-slide.slick-active').find('.text-overlay').fadeIn(600);
        }, 500);
    });

    $(".main-banner .main-carousel").click(function () {
        $(".main-banner .main-carousel").slick('slickNext');
    })


    $('.main-banner .main-carousel').slick({
        infinite: true,
        arrows:false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 4000
    });

  
  
});
