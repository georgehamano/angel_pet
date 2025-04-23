document.addEventListener('DOMContentLoaded', function () {
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
  
    // ✅ ここに newsSwiper の初期化を追加
    let newsSwiper = null;
  
    function initNewsSwiper() {
      const isMobile = window.matchMedia('(max-width: 767px)').matches;
  
      if (isMobile) {
        if (!newsSwiper) {
          newsSwiper = new Swiper('.news-swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
              nextEl: '.news-swiper-next',
              prevEl: '.news-swiper-prev',
            },
            breakpoints: {
              480: {
                slidesPerView: 1,
              },
              640: {
                slidesPerView: 2,
              }
            }
          });
        }
      } else {
        if (newsSwiper) {
          newsSwiper.destroy(true, true); // 完全破棄
          newsSwiper = null;
        }
      }
    }
  
    initNewsSwiper();
  
    window.addEventListener('resize', function () {
      initNewsSwiper();
    });
  });