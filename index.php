<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>conference</title>
    <link rel="icon" href="./asset/img/Favicon.png" type="image/png" />
    <link rel="stylesheet" href="./asset/css/base.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;family=Noto+Sans+JP:wght@400;700&amp;display=swap" />
    <link rel="stylesheet" href="./asset/css/conference.css" />
  </head>
  <body id="top">
    <!-- ヘッダー -->
    <header class="site-header">
      <div class="site-header_inner">
        <h1 class="site-header_logo">
          <a href="index.php">WDC</a>
        </h1>
        <nav class="site-header_nav">
          <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#speaker">SPEAKER</a></li>
            <li><a href="#session">SESSION</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <!-- ファーストビュー（メインビジュアル） -->
      <section class="main-visual">
        <!-- タイトル・開催情報を含むメインビジュアルを、そのまま表示する。 -->
        <img class="main-visual_image" src="./asset/img/ogp.png" alt="Web Design Conference vol.24 WORK REVOLUTION。2030年5月30日開催。ショーン・デイビッド・ジュニア氏（Webデザイナー）"/>
       <a class="main-visual_button button button-a h3-sub bg-gradient" href="#registration">お申し込み</a>
      </section>
      <!-- ABOUT -->
      <section class="about" id="about">
        <div class="title2">
          <h2>ABOUT</h2>
          <div class="h2-sub">イベントについて</div>
        </div>
        <img src="./asset/img/about.png" alt="イベントについての画像">

        <div>テーマ</div>
        <div>定時で帰る</div>
        <p>残業は心と体に良くないです。世界最速で定時に帰る男、ショーン・デイビット・ジュニア氏が定時で帰るためのスペシャルな技を紹介！ さぁ、Let's go home now!</p>

      </section>

      <!-- SPEAKER -->
      <section class="speaker" id="speaker">
        <div class="title2">
          <h2>SPEAKER</h2>
          <div class="h2-sub">スピーカー</div>
        </div>
          
        <!-- スピーカー3名の紹介をここに追加する。 -->
      </section>

      <!-- SESSION -->
      <section class="session" id="session">
        <div class="title2">
          <h2>SESSION</h2>
          <div class="h2-sub">セッション</div>
        </div>
        <!-- セッション4件の内容をここに追加する。 -->
      </section>

      <!-- REGISTRATION（申し込み） -->
      <section class="registration" id="registration">
        <div class="title2">
          <h2>REGISTRATION</h2>
          <div class="h2-sub">お申し込み</div>
        </div>
        <!-- 申し込みフォームをここに追加する。入力確認・保存処理は後で実装する。 -->
      </section>
    </main>

    <!-- フッター -->
    <footer class="site-footer">
      <!-- フッターの内容をここに追加する。 -->
    </footer>
  </body>
</html>
