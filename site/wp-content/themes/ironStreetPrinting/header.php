<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name');?> </title>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="css/vendor/pure/grids.css">
    <link rel="stylesheet" href="css/vendor/pure/grids-units-min.css">
    <link rel="stylesheet" href="css/vendor/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="css/vendor/pure/grids-core-min.css">
    <link rel="stylesheet" href="css/vendor/normalize-css/normalize.css">
    <link rel="stylesheet" href="css/style.css"> -->
  </head>
<body id="home">
<nav id="mainMenu">
  <?php
    $args = array(
      'theme_location' => 'primary'
    );
  ?>

  <?php wp_nav_menu($args)?>
  <!-- <ul>
    <li class="active"><a href="/">Home</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="aboutus.html">About Us</a></li>
    <li class="special"> <span><a href="buildaquote.html">Buil a Quote</a></span></li>
  </ul> -->
</nav>
