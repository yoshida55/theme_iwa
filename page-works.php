<?php get_header(); ?>

<main class="main">
  <!-- ===============================================
       Works
       =============================================== -->
  <section class="works_area">
    <h2 class="works_title">Works</h2>
    <div class="works_list">
      <div class="works_item">
        <img class="works_img" src="<?php echo esc_url(get_theme_file_uri('img/works1.jpg')); ?>" alt="PHOTO WORK1" />
        <p class="works_name">PHOTO WORK1</p>
        <p class="works_description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
      <div class="works_item">
        <img class="works_img" src="<?php echo esc_url(get_theme_file_uri('img/works2.jpg')); ?>" alt="PHOTO WORK2" />
        <p class="works_name">PHOTO WORK2</p>
        <p class="works_description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
