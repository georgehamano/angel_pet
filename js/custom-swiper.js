document.addEventListener('DOMContentLoaded', function() {
    const slider01 = new Swiper('.mv-slider01', {
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 1000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        allowTouchMove: true,
        grabCursor: true,
        watchSlidesProgress: true,
        preventInteractionOnTransition: true
    });

    const slider02 = new Swiper('.mv-slider02', {
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 1000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        allowTouchMove: true,
        grabCursor: true,
        watchSlidesProgress: true,
        preventInteractionOnTransition: true
    });
}); 