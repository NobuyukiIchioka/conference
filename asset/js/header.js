const header = document.querySelector(".site-header");
const firstView = document.querySelector(".main-visual");

// ① 追加：ページトップボタンを取得
const pageTopButton = document.querySelector(".page-top-button");

function updateHeaderBackground() {
  const firstViewBottom = firstView.getBoundingClientRect().bottom;
  const headerHeight = header.getBoundingClientRect().height;

  header.classList.toggle("bg-base", firstViewBottom <= headerHeight);

  // ② 追加：ファーストビューが画面内にある間、ボタンを隠す
pageTopButton.classList.toggle(
  "is-hidden",
  firstViewBottom > window.innerHeight * (1 / 3) || window.scrollY <= 0
);
}


// スクロール・画面サイズの変更時に確認
window.addEventListener("scroll", updateHeaderBackground, { passive: true });
window.addEventListener("resize", updateHeaderBackground);

// ページ表示時と、画像などの読み込み後にも確認
updateHeaderBackground();
window.addEventListener("load", updateHeaderBackground);



