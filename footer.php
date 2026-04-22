    <footer class="footer">
      <?php wp_nav_menu([
        'theme_location'  => 'footer-menu',
        'container'       => 'nav',
        'container_class' => 'footer_nav',
        'menu_class'      => 'footer_nav_list',
      ]);  ?>

      <p class="footer_copy">&copy; My Work</p>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>