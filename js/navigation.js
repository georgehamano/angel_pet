(function() {
    // グローバルスコープに初期化済みフラグを設定
    if (window.angelPetNavigationInitialized) return;
    window.angelPetNavigationInitialized = true;

    const button = document.querySelector(".menu-toggle");
    const siteNavigation = document.getElementById("site-navigation");

    if (!button || !siteNavigation) {
        console.log('要素が見つかりません');
        return;
    }

    // 初期状態を設定
    button.setAttribute("aria-expanded", "false");

    // 既存のイベントリスナーを削除
    const newButton = button.cloneNode(true);
    button.parentNode.replaceChild(newButton, button);

    // クリックとタッチの両方のイベントを処理する関数
    function toggleMenu(e) {
        e.preventDefault(); // デフォルトの動作を防止
        console.log('メニューがトグルされました');
        siteNavigation.classList.toggle("is-open");
        const expanded = newButton.getAttribute("aria-expanded") === "true";
        newButton.setAttribute("aria-expanded", !expanded);
    }

    // クリックイベントを追加
    newButton.addEventListener("click", toggleMenu);
    
    // タッチイベントを追加
    newButton.addEventListener("touchstart", toggleMenu, { passive: false });
})();
