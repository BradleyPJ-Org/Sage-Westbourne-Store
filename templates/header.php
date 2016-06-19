

<section class ="quickContact">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-2">
        <p>Phone: <?php echo get_option('contact_phone'); ?> </p>
      </div>
      <div class="col-lg-3 col-lg-offset-3">
        <p>Email: <?php echo get_option('contact_email'); ?></p>
      </div>
    </div>
  </div>
</section>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
       <img alt="Brand" src="<?php echo get_option('site_logo'); ?>">
     </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </ul>
    </div>
  </div>
</nav>
