<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-2 footer-list footer-hide">
          <ul class="sitemap">
            <li class = "title">Sitemap</li>
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap']);
            endif;
            ?>
          </ul>
        </div>

        <div class="col-md-4 col-md-offset-4 footer-list">
          <li class = "title">Contact</li>
          <li class = "contact">Phone: <?php echo get_option('contact_phone'); ?></li>
          <li class = "contact">Email: <?php echo get_option('contact_email'); ?></li>
        </div>

      </div>
    </div>
  </div>

</section>

</body>
</html>
