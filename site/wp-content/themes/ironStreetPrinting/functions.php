<?php

  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );

  //Css resources
  function css_resources () {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('grids', get_template_directory_uri() . '/css/grids.css' );
    wp_enqueue_style('grids-core', get_template_directory_uri() . '/css/grids-core-min.css' );
    wp_enqueue_style('grids-unit', get_template_directory_uri() . '/css/grids-units-min.css' );
    wp_enqueue_style('grids-responsive', get_template_directory_uri() . '/css/grids-responsive-min.css' );
    wp_enqueue_style('sweetalert', get_template_directory_uri() . '/css/sweetalert.css' );

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css' );
  }
  add_action('wp_enqueue_scripts', 'css_resources');

  //Js resources
  function js_resources() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', '', true );
    wp_enqueue_script('helper', get_template_directory_uri() . '/js/storageHelper.js', '', '', false);
    wp_enqueue_script('cartHelper', get_template_directory_uri() . '/js/cartStorageHelper.js', '', '', false);
    wp_enqueue_script('webcomponents', get_template_directory_uri() . '/js/webcomponents.min.js',array('helper', 'cartHelper'), '', false);

    wp_enqueue_script('slides', get_template_directory_uri() . '/js/jquery.slides.js', array('jquery'), '', true);
    wp_enqueue_script('sweetalert', get_template_directory_uri() . '/js/sweetalert.min.js', array('jquery'), '', true);

    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery', 'slides'), '', true);
    wp_enqueue_script('filter', get_template_directory_uri() . '/js/filter.js', array('jquery', 'slides'), '', true);
    wp_enqueue_script('product', get_template_directory_uri() . '/js/product.js', array('jquery', 'slides'), '', true);

  }
  add_action('wp_enqueue_scripts', 'js_resources');


  //Menu Register
  function register_my_menu() {
    $locations = array(
      'primary' => __('Primary Menu')
    );

    register_nav_menus($locations);
  }

  add_action('init', 'register_my_menu');

?>
