<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  $wp_customize->add_panel( 'front-page', array(
  'priority'       => 55,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => __('Front Page'),
  'description'    => __('Options for the front page'),
  ) );

  //SERVICES ARRAY
  $section[] = array('slug'=>'services','title' => 'Services' ,'description' => 'Edit the Service Area.','priority' => 55, 'panel' => NULL);

  for($i = 1; $i <= 5 ; $i++) {
    $standard_control[] = array('slug'=>'Service_#'.$i,'default' => NULL,'label' => 'Enter Service Image '.$i,'type' => 'text', 'section' => 'services', 'controller_type' => 'upload');
  }

  //LOGO ARRAY
  $section[] = array('slug'=>'header_section','title' => 'Header Settings' ,'description' => 'Edit the Header Area.','priority' => 55, 'panel' => NULL);

  $standard_control[] = array('slug'=>'site_logo','default' => NULL,'label' => 'Enter Logo ','type' => 'text', 'section' => 'header_section', 'controller_type' => 'upload');

  //CONTACT ARRAY
  $section[] = array('slug'=>'contact_details','title' => 'Contact Details' ,'description' => 'Edit the Contact Info.','priority' => 55, 'panel' => NULL);

  $standard_control[] = array('slug'=>'contact_email','default' => NULL,'label' => 'Enter contact email ','type' => 'text', 'section' => 'contact_details');
  $standard_control[] = array('slug'=>'contact_phone','default' => NULL,'label' => 'Enter contact phone ','type' => 'text', 'section' => 'contact_details');

  //DEALS ARRAYS
  $section[] = array('slug'=>'deals','title' => 'Deals' ,'description' => 'Enter Deal Content 4','priority' => 55, 'panel' => 'front-page');

  for($i = 1; $i <= 4 ; $i++) {
    $standard_control[] = array('slug'=>'deal_title_#'.$i,'default' => NULL,'label' => 'Enter Deal Title' .$i,'type' => 'text', 'section' => 'deals');
    $standard_control[] = array('slug'=>'deal_content_#'.$i,'default' => NULL,'label' => 'Enter Deal Content' .$i,'type' => 'textarea', 'section' => 'deals');
  }

  //REVIEWS ARRAYS
  $section[] = array('slug'=>'reviews','title' => 'Reviews' ,'description' => 'Edit the Review area','priority' => 55, 'panel' => 'front-page');

  $standard_control[] = array('slug'=>'review_#1','default' => NULL,'label' => 'Enter Review 1','type' => 'textarea', 'section' => 'reviews');
  $standard_control[] = array('slug'=>'review_#2','default' => NULL,'label' => 'Enter Review 2','type' => 'textarea', 'section' => 'reviews');

  //HOURS ARRAYS
  $section[] = array('slug'=>'hours','title' => 'Open Hours' ,'description' => 'Edit the Open Hours area.','priority' => 55, 'panel' => 'front-page');

  $open_days[] = array('monday','tuesday','wednesday','thursday','friday', 'saturday', 'sunday');
  
  for($i = 0; $i < 7 ; $i++) {
    $standard_control[] = array('slug'=>'open_hours_' . $open_days[0][$i] ,'default' => NULL,'label' => 'Enter Open Hours for ' . $open_days[0][$i],'type' => 'text', 'section' => 'hours');
  }

  //LOCATION ARRAYS
  $section[] = array('slug'=>'location','title' => 'Map Location' ,'description' => 'Edit the Location area.','priority' => 55, 'panel' => 'front-page');

  $standard_control[] = array('slug'=>'google_map_link','default' => NULL,'label' => 'Enter google map location','type' => 'text', 'section' => 'location');
  $standard_control[] = array('slug'=>'google_map_frame','default' => NULL,'label' => 'Enter google map frame','type' => 'text', 'section' => 'location');
  $standard_control[] = array('slug'=>'store_address','default' => NULL,'label' => 'Enter Store Address','type' => 'text', 'section' => 'location');

  //LOOPS
  foreach( $section as $section ) {

    $wp_customize->add_section(
      $section['slug'],
        array(
        'title' => $section['title'],
        'description' => $section['description'],
        'priority' => $section['priority'],
        'panel'  => $section['panel'],
      )
    );
  }

  foreach( $standard_control as $standard_control ) {

    $wp_customize->add_setting($standard_control['slug'],
      array('default' => $standard_control['default'],'type' => 'option','capability' =>'edit_theme_options'
      )
    );

    if( $standard_control['controller_type'] === "upload"){

      $wp_customize->add_control(new \WP_Customize_Upload_Control($wp_customize, $standard_control['slug'],
        ['label'=> __( $standard_control['label'], 'sage' ),'section' => $standard_control['section'],'description' => $standard_control['description']] )
      );

    }elseif($standard_control['controller_type'] === "hidden"){

      $wp_customize->add_control(
          new \WP_Customize_Control($wp_customize,$standard_control['slug'],
            array('label' => $standard_control['label'],'settings' => $standard_control['slug'],'type' => $standard_control['type'])
          )
      );

    }else{

      $wp_customize->add_control(
          new \WP_Customize_Control($wp_customize,$standard_control['slug'],
            array('label' => $standard_control['label'],'section' => $standard_control['section'],'settings' => $standard_control['slug'],'type' => $standard_control['type'])
          )
      );

    }
  }

}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

//Customizer JS
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
