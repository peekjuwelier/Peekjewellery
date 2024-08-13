document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.custom-slider', {
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
});