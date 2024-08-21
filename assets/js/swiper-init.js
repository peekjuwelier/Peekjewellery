var singlV3 = new Swiper('.slider-v3', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    simulateTouch: true,
    grabCursor: true,
});

var sliderV2 = new Swiper('.slider-v2', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    simulateTouch: true,
    grabCursor: true,
});


var homeSlider = new Swiper('.slider-v1', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    simulateTouch: true,
    grabCursor: true,
});