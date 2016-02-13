<?php

  function css_resources () {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('grids', get_template_directory_uri() . '/css/grids.css' );
    wp_enqueue_style('grids-core', get_template_directory_uri() . '/css/grids-core-min.css' );
    wp_enqueue_style('grids-unit', get_template_directory_uri() . '/css/grids-units-min.css' );
    wp_enqueue_style('grids-responsive', get_template_directory_uri() . '/css/grids-responsive-min.css' );

    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'css_resources');

  function js_resources() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', '', true );
    wp_enqueue_script('slides', get_template_directory_uri() . '/js/jquery.slides.js', array('jquery'), '', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery', 'slides'), '', true);

  }
  add_action('wp_enqueue_scripts', 'js_resources');


  register_nav_menus(array(
      'primary' => __('Primary Menu')
  ));


?>
