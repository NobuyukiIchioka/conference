<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>conference</title>
    <link rel="icon" href="./asset/img/Favicon.png" type="image/png" />
    <link rel="stylesheet" href="./asset/css/base.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" />
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
        <img class="main-visual_image" src="./asset/img/opg4.png" alt="Web Design Conference vol.24 WORK REVOLUTION。2030年5月30日開催。ショーン・デイビッド・ジュニア氏（Webデザイナー）"/>
        <img class="main-visual_script" src="./asset/img/teiji-de-kaerumon.png" alt="teiji de kaerumon" width="1366" height="700"/>
       <a class="main-visual_button button button-a h3-sub bg-gradient" href="#registration">お申し込み</a>
      </section>
      <!-- ABOUT -->
      <section class="about section" id="about">
        <div class="content-width">
          <div class="title2">
            <h2>ABOUT</h2>
            <div class="h2-sub">イベントについて</div>
          </div>
          <div class="about-content">
            <img class="about-image" src="./asset/img/about.png" alt="イベントについての画像"  loading="lazy">
            <div class="about-text">
              <p class="about-theme">テーマ</p>
              <h3 class="about-title">定時で帰る</h3>
              <p class="about-description">残業は心と体に良くないです。世界最速で定時に帰る男、ショーン・デイビット・ジュニア氏が定時で帰るためのスペシャルな技を紹介！ さぁ、Let's go home now!</p>
              <dl class="about-info">
                <dt>日時</dt>
                <dd>2030年5月30日（土） 13:00-翌朝13:00</dd>

                <dt>会場</dt>
                <dd>オンライン開催</dd>

                <dt>定員</dt>
                <dd>3名</dd>

                <dt>参加費</dt>
                <dd>無料</dd>
              </dl>

              <a class="button button-b h3-sub bg-gradient-reverse" href="#registration">お申し込み</a>
            </div>
          </div>

        </div>
      </section>

      <!-- SPEAKER -->
      <section class="speaker section" id="speaker">
        <div class="content-width">
          <div class="title2">
            <h2>SPEAKER</h2>
            <div class="h2-sub">スピーカー</div>
          </div>

          <div class="speaker-list">
            <article class="speaker-card">
              <div class="speaker-text">
                <div class="title3">
                  <h3>Shawn David Jr</h3>
                  <p class="h3-sub">ショーン・デイビット・ジュニア</p>
                </div>
                <div class="speaker-description">
                  <p>株式会社スタート代表取締役。Webデザイナー。<br>
                  定時になると仕事用の脳と身体機能が停止し自動的に帰路につく男。ショーン氏のその姿は人間と言うよりもさながらアンドロイドのようである。<br>
                  ショーン氏は著書『会社ではアンドロイドになれ』の中でこう語っている。<br>
                  「会社における仕事において、我々は自分を機械、そうアンドロイドと思い込むべきだ。定時になれば自動で仕事用の機能は停止されるのだ。決められた時間に、設定されたタスクのみを行う、それがアンドロイドの役目だろう？そして、それは会社で働く我々人間の権利でもある」<br>
                  アンドロイドのように働くべきと語るショーン氏の考え方はディストピア思想と揶揄されるが、本イベントでは氏の考え方をたっぷりと味わいたい。</p>
                </div>
              </div>
              <img class="speaker-image" src="./asset/img/sean.png" alt="ショーン・デイビット・ジュニア"  width="445" height="460" loading="lazy">
            </article>

            <!-- 2人目だけ、CSSで写真を左・紹介文を右に配置する。 -->
            <article class="speaker-card speaker-card--reverse">
              <div class="speaker-text">
                <div class="title3">
                  <h3>Mihoko Tennis</h3>
                  <p class="h3-sub">ミホコ・テニース</p>
                </div>
                <div class="speaker-description">
                  <p>会社員兼プロテニスプレイヤー。WTOランキング63,984位。<br>
                  会社員をしながらプロテニスプレイヤーとしても生計を立てているミホコ氏。平日は仕事で忙しい中、一体どのようにテニスの練習時間を捻出しているのか？会社にもテニスラケットを持ち込むというミホコ氏のワーキングスタイルに迫る。</p>
                </div>
              </div>
              <img class="speaker-image" src="./asset/img/mihoko.png" alt="ミホコ・テニース" width="445" height="460" loading="lazy">
            </article>

            <article class="speaker-card">
              <div class="speaker-text">
                <div class="title3">
                  <h3>Jecica Pannacotta</h3>
                  <p class="h3-sub">ジェシカ・パンナコッタ</p>
                </div>
                <div class="speaker-description">
                  <p>フリーランスのエンジニア。<br>
                  「絶対に自宅でフルリモートで働く」という徹底したモットーに基づき、約7年間外出をしていない。インターネットを信仰しており、リアルやオフラインよりもオンラインを最重要視するライフスタイルを実践している。「外に出たら負け」が口グセのジェシカ氏の『超ネット仕事術』は必聴。</p>
                </div>
              </div>
              <img class="speaker-image" src="./asset/img/jecica.png" alt="ジェシカ・パンナコッタ" width="445" height="460" loading="lazy">
            </article>
          </div>
        </div>
      </section>

      <!-- SESSION -->
      <section class="session section" id="session">
        <div class="content-width">
          <div class="title2">
            <h2>SESSION</h2>
            <div class="h2-sub">セッション</div>
          </div>
          <ol class="session-list">
          <li class="session-item">
            <p class="session-time">13:00–14:00</p>
            <div class="session-details">
              <h3 class="session-title">
                ライトニングトーク：定時に帰る、それはアンドロイドになること
              </h3>
              <p>スピーカー：ショーン・デイビット・ジュニア<br>
              人間らしくあろうとすること、それが残業を生むのだ。</p>
            </div>
          </li>
          <li class="session-item">
            <p class="session-time">14:00-18:00</p>
            <div class="session-details">
              <h3 class="session-title">
                ショーンのとっておきの定時に帰る方法
              </h3>
              <p>スピーカー：ショーン・デイビット・ジュニア<br>
              アンドロイド的定時に帰る方法を紹介。ワタシ、テイジデカエリマス。</p>
            </div>
          </li>
          <li class="session-item">
            <p class="session-time">18:00-24:00</p>
            <div class="session-details">
              <h3 class="session-title">
                公私混同仕事術
              </h3>
              <p>スピーカー：ミホコ・テニース<br>
              私は会社にもテニスラケットを持ち込む。そう、もういっそのこと仕事と趣味の境界線を消しましょう。</p>
            </div>
          </li>
          <li class="session-item">
            <p class="session-time">24:00-13:00</p>
            <div class="session-details">
              <h3 class="session-title">
                超ネット仕事術
              </h3>
              <p>スピーカー：ジェシカ・パンナコッタ<br>
              ７年間一度も外出せずに仕事をする方法を紹介。自宅大好きっ！</p>
            </div>
          </li>
        </ol>
        </div>
      </section>
      
      

      <!-- REGISTRATION（申し込み） -->
      <section class="registration section" id="registration">
        <div class="content-width">
          <div class="title2">
            <h2>REGISTRATION</h2>
            <div class="h2-sub">お申し込み</div>
          </div>
          <div class="registration-description">
            <form class="registration-form" action="thanks.php" method="post">
              <fieldset class="form-group">
                <legend class="form-label">ご職業</legend>
                <div class="form-options">
                  <label>
                    <input type="radio" name="occupation" value="会社員" required>
                    会社員
                  </label>
                  <label>
                    <input type="radio" name="occupation" value="個人事業主">
                    個人事業主
                  </label>
                  <label>
                    <input type="radio" name="occupation" value="求職中">
                    求職中
                  </label>
                  <label>
                    <input type="radio" name="occupation" value="その他">
                    その他
                  </label>
                </div>
              </fieldset>
              <div class="form-group">
                <label for="name" class="form-label">お名前</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div class="form-group">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" id="email" name="email"   autocomplete="email" required />
              </div>
              <div class="form-group">
                <label for="phone">お電話番号<span>（半角数字ハイフンなし）</span></label>
                <input type="tel" id="phone" name="phone" inputmode="numeric" pattern="[0-9]+"
  autocomplete="tel">
              </div>
              <div class="form-group">
                <label for="message" class="form-label">スピーカーに質問したいこと</label>
                <textarea id="message" name="message" placeholder="ご自由にお書きください" required></textarea>
              </div>
              <div class="form-group">
                <label for="source" class="form-label">WDCをどちらでお知りになりましたか？</label>
                <select id="source" name="source" required>
                  <option value="">選択してください</option>
                  <option value="friend">友人から</option>
                  <option value="social_media">ソーシャルメディア</option>
                  <option value="search_engine">検索エンジン</option>
                </select>
              </div>
              <button type="submit" class="button button-a h3-sub bg-gradient">送信</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!-- フッター -->
    <footer class="site-footer">
        <p class="site-footer_copyright"> <small>&copy;2030 Web Design Conference</small></p>
    </footer>
    
    <!-- ページのトップボタン -->
    <a href="#top" class="page-top-button" >
      <img src="./asset/img/page-top.svg" alt="ページの先頭へ戻る"/>
    </a>

  <script src="./asset/js/header.js"></script>
  </body>
</html>
