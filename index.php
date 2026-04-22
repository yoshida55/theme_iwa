<?php get_header(); ?>

<main class="main">
  <!-- ===============================================
       メインビジュアル
       ============================================== -->
  <section class="mv">
    <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual-pc.jpg')); ?>" alt="メインビジュアル" />
  </section>

  <!-- ===============================================
       About
       =============================================== -->
  <section class="about_area">
    <h2 class="about_title">About</h2>
    <p class="about_name">Xxxxx Ashley</p>
    <p class="about_info">
      2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan<br />
      tel: 000-0000-0000<br />
      url: www.xxxxxx.jp<br />
      mail: xxx@xxxxxx.jp
    </p>
    <p class="about_description">プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストスト テキストテキストテキストテキストテ キストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキスト</p>
  </section>
  <!-- ===============================================
       Works
       =============================================== -->
  <section class="works_area">
    <h2 class="works_title">Works</h2>
    <!-- flex frap 横並び -->
    <div class="img_list">
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works1.jpg')); ?>" alt="作品1" />
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works2.jpg')); ?>" alt="作品2" />
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works3.jpg')); ?>" alt="作品3" />
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works4.jpg')); ?>" alt="作品4" />
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works5.jpg')); ?>" alt="作品5" />
      <img class="img_item" src="<?php echo esc_url(get_theme_file_uri('img/works6.jpg')); ?>" alt="作品6" />
    </div>
  </section>
  <!-- ===============================================
       News
       =============================================== -->
  <section class="news_area">
    <h2 class="news_title">News</h2>
    <dl class="news_list">
      <div class="news_item">
        <dt class="news_date"><time datetime="2020-10-10">2020.XX.XX</time></dt>
        <dd class="news_description">デザイン雑誌「ＸＸＸＸＸＸＸ Vol.11」に掲載していただきました。</dd>
      </div>
      <div class="news_item">
        <dt class="news_date"><time datetime="2020-09-10">2020.XX.XX</time></dt>
        <dd class="news_description">ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
      </div>
      <div class="news_item">
        <dt class="news_date"><time datetime="2019-10-10">2019.XX.XX</time></dt>
        <dd class="news_description">【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
      </div>
      <div class="news_item">
        <dt class="news_date"><time datetime="2019-09-10">2019.XX.XX</time></dt>
        <dd class="news_description">デザイン雑誌「ＸＸＸＸＸＸＸ Vol.10」に掲載していただきました。</dd>
      </div>
      <div class="news_item">
        <dt class="news_date"><time datetime="2019-08-10">2019.XX.XX</time></dt>
        <dd class="news_description">【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
      </div>
    </dl>
  </section>

  <!-- ===============================================
       Contact
       =============================================== -->
  <section id="contact" class="contact_area">
    <h2 class="contact_title">Contact</h2>
    <!-- お問い合わせフォーム　　 -->
    <form class="contact_form" action="#">
      <div class="contact_list">
        <label class="contact_label" for="name">Name</label><br />
        <input class="contact_input" type="text" id="name" name="name" />
      </div>
      <div class="contact_list">
        <label class="contact_label" for="email">Email</label><br />
        <input class="contact_input" type="email" id="email" name="email" />
      </div>
      <div class="contact_list">
        <label class="contact_label" for="message">Message</label><br />
        <textarea class="contact_input" id="message" name="message"></textarea>
      </div>
      <!-- 送信ボタン -->
      <div class="contact_btn">
        <input type="submit" value="SEND" />
      </div>
    </form>
  </section>
</main>

<?php get_footer(); ?>