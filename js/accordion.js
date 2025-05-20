document.addEventListener("DOMContentLoaded", () => {
    const accordionItems = document.querySelectorAll(".qa-accordion");
  
    accordionItems.forEach((item) => {
      const title = item.querySelector(".qa-accordion-title");
      const content = item.querySelector(".qa-accordion-content");
  
      // 初期状態で高さを0に設定
      content.style.height = "0";
  
      title.addEventListener("click", () => {
        const isActive = item.classList.contains("active");
  
        // 全て閉じる
        accordionItems.forEach((el) => {
          el.classList.remove("active");
          const contentEl = el.querySelector(".qa-accordion-content");
          contentEl.style.height = "0";
        });
  
        // 開く処理
        if (!isActive) {
          item.classList.add("active");
          // 一時的に表示して高さを取得
          content.style.visibility = "visible";
          content.style.height = "auto";
          const height = content.scrollHeight;
          content.style.height = "0";
          // 次のフレームで高さを設定（余裕を持たせる）
          requestAnimationFrame(() => {
            content.style.height = (height + 20) + "px";
          });
        }
      });
    });
  });