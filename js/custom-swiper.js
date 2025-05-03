document.addEventListener('DOMContentLoaded', function () {
  const sliderElement = document.querySelector('.mv-slider01');
  if (!sliderElement) return;

  const slides = sliderElement.querySelectorAll('.slider-item');
  const config = {
    direction: 'vertical',
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
  };

  // スライドが2つ以上ある場合のみループを有効にする
  if (slides.length >= 2) {
    config.loop = true;
  }

  const slider01 = new Swiper('.mv-slider01', config);
});