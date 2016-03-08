<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name');?> </title>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <link rel="import" href="<?php bloginfo('template_url'); ?>/components.html">
  </head>
<body id="home">
<nav id="mainMenu">
  <?php
    $args = array(
      'theme_location' => 'primary'
    );
  ?>

  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-3-24">

    </div>
    <div class="pure-u-1 pure-u-md-18-24">
      <?php wp_nav_menu($args)?>
    </div>
    <div class="pure-u-1 pure-u-md-3-24">

    </div>

  </div>



  <!-- <ul>
    <li class="active"><a href="/">Home</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="aboutus.html">About Us</a></li>
    <li class="special"> <span><a href="buildaquote.html">Buil a Quote</a></span></li>
  </ul> -->
</nav>
