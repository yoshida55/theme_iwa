<?php get_header(); ?>

<main class="main">
  <section class="news_area">
    <h2 class="news_title">News</h2>

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>

        <dl class="news_list">
          <div class="news_item">
            <dt class="news_date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
            <dd class="news_description">デザイン雑誌「ＸＸＸＸＸＸＸ Vol.11」に掲載していただきました。</dd>
          </div>
        </dl>
  </section>

<?php endwhile; ?>
<?php endif; ?>
</main>

<?php get_footer(); ?>