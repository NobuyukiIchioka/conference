const header = document.querySelector(".site-header");
const firstView = document.querySelector(".main-visual");

function updateHeaderBackground() {
  const firstViewBottom = firstView.getBoundingClientRect().bottom;
  const headerHeight = header.getBoundingClientRect().height;

  header.classList.toggle("bg-base", firstViewBottom <= headerHeight);
}

// スクロール・画面サイズの変更時に確認
window.addEventListener("scroll", updateHeaderBackground, { passive: true });
window.addEventListener("resize", updateHeaderBackground);

// ページ表示時と、画像などの読み込み後にも確認
updateHeaderBackground();
window.addEventListener("load", updateHeaderBackground);