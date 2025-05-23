document.addEventListener('DOMContentLoaded', function () {
  const sliderElement = document.querySelector('.mv-slider01');
  if (!sliderElement) return;

  const slides = sliderElement.querySelectorAll('.swiper-slide');

  const config = {
    direction: 'vertical',
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    loop: slides.length >= 2,
    speed: 1000,
    allowTouchMove: false, // ← Swiperのスライド操作を完全無効化
    simulateTouch: false,
    passiveListeners: false,
  };

  new Swiper('.mv-slider01', config);
});

// スマホのvh問題を回避
function setInitialVh() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
window.addEventListener('load', setInitialVh);
window.addEventListener('resize', setInitialVh);