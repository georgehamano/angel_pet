window.addEventListener('load', function () {
    const scrollWrapper = document.querySelector('.news-scroll-wrapper');
    const scrollContainer = document.querySelector('.news-scroll');
    const items = scrollContainer.querySelectorAll('.news-item');
    const dotContainer = document.querySelector('.news-dots');
  
    if (!scrollWrapper || !items.length || !dotContainer) {
      console.log('⚠️ 必要な要素が見つかりません');
      return;
    }
  
    // ドット生成
    items.forEach((_, index) => {
      const dot = document.createElement('button');
      dot.dataset.index = index;
      dot.textContent = ' ';
      dotContainer.appendChild(dot);
    });
  
    const dots = dotContainer.querySelectorAll('button');
  
    // ドットクリックでスクロール
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        const target = items[index];
        scrollWrapper.scrollTo({
          left: target.offsetLeft,
          behavior: 'smooth'
        });
      });
    });
  
    // ✅ アクティブドット更新：中央に一番近いスライドを判定
    function updateDots() {
      const scrollCenter = scrollWrapper.scrollLeft + scrollWrapper.offsetWidth / 2;
  
      let closestIndex = 0;
      let closestDistance = Infinity;
  
      items.forEach((item, index) => {
        const itemCenter = item.offsetLeft + item.offsetWidth / 2;
        const distance = Math.abs(scrollCenter - itemCenter);
  
        if (distance < closestDistance) {
          closestDistance = distance;
          closestIndex = index;
        }
      });
  
      // console.log('🟢 アクティブIndex:', closestIndex);
  
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === closestIndex);
      });
    }
  
    scrollWrapper.addEventListener('scroll', updateDots);
    updateDots(); // 初期表示でアクティブ更新
  });