
<section class="service-hide">

  <div class="container">
    <div class="row">
      <div class="col-md-12 services-message">
        <a href=""><h1>Services</h1></a>
        <hr>
      </div>
    </div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
      <div class="col-md-2">
        <img class = "img-responsive"src="<?php echo get_option('Service_#1'); ?>" alt="" />
      </div>
      <div class="col-md-2">
        <img class = "img-responsive"src="<?php echo get_option('Service_#2'); ?>" alt="" />
      </div>
      <div class="col-md-2">
        <img class = "img-responsive"src="<?php echo get_option('Service_#3'); ?>" alt="" />
      </div>
      <div class="col-md-2">
        <img class = "img-responsive"src="<?php echo get_option('Service_#4'); ?>" alt="" />
      </div>
      <div class="col-md-2">
        <img class = "img-responsive"src="<?php echo get_option('Service_#5'); ?>" alt="" />
      </div>
    </div>
  </div>

  <hr class="breaker">
</div>

</section>


<section class="deals">

  <div class="container">
    <div class="row">
      <div class="col-md-12 deals-message">
        <h1>Hot Deals</h1>
        <hr>
      </div>
    </div>

  <div class="row">
    <div class="col-md-3 deals-deals">
      <h3><?php echo get_option('deal_title_#1'); ?></h3>
      <p><?php echo get_option('deal_content_#1'); ?></p>
    </div>
    <div class="col-md-3 deals-deals">
      <h3><?php echo get_option('deal_title_#2'); ?></h3>
      <p><?php echo get_option('deal_content_#2'); ?></p>
    </div>
    <div class="col-md-3 deals-deals">
      <h3><?php echo get_option('deal_title_#3'); ?></h3>
      <p><?php echo get_option('deal_content_#3'); ?></p>
    </div>
    <div class="col-md-3 deals-deals">
      <h3><?php echo get_option('deal_title_#4'); ?></h3>
      <p><?php echo get_option('deal_content_#4'); ?></p>
    </div>
  </div>

    <hr class="breaker">

  </div>

</section>



<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h1 class = "text-center">Reviews</h1>

        <hr class="breaker">

      </div>
    </div>

    <div class="row">

      <div class="col-md-12">
        <div class="col-md-6">
          <p>
            <?php echo get_option('review_#1'); ?>
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <?php echo get_option('review_#2'); ?>
          </p>
        </div>
      </div>

    </div>

  <hr class="breaker">
  </div>
</section>



<section class="Open-Hours">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Open Hours</h2>
                <h3>Monday: <?php echo get_option('open_hours_monday'); ?></h3>
                <h3>Tuesday: <?php echo get_option('open_hours_tuesday'); ?></h3>
                <h3>Wednesday: <?php echo get_option('open_hours_wednesday'); ?></h3>
                <h3>Thurday: <?php echo get_option('open_hours_thursday'); ?></h3>
                <h3>Friday: <?php echo get_option('open_hours_friday'); ?></h3>
                <h3>Saturday: <?php echo get_option('open_hours_saturday'); ?></h3>
                <h3>Sunday: <?php echo get_option('open_hours_sunday'); ?></h3>
            </div>
        </div>
        <hr class="breaker">
    </div>
</section>

<section class="Location">

    <div class="container">
        <div class="row">
            <div class="col-md-12 Location-message">
                <h1 class = "text-center">Location</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 Location-message">
                <a href="<?php echo get_option('google_map_link');?>"><h3><?php echo get_option('store_address'); ?></h3></a>
                <?php echo get_option('google_map_frame'); ?>
            </div>
        </div>
    </div>

</section>

<hr>
