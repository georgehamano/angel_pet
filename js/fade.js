document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".fade-content-img");
  
    sliders.forEach((slider) => {
      const images = slider.querySelectorAll("img");
      let current = 0;
  
      if (images.length === 0) return;
  
      images[current].classList.add("active");
  
      setInterval(() => {
        images[current].classList.remove("active");
  
        // 次の画像へ
        current = (current + 1) % images.length;
  
        images[current].classList.add("active");
      }, 6000); // 4秒で切り替え
    });
  });