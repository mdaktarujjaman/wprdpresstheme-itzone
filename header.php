<?php
/*
This Template for Desplaying the header
*/ 
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header id="header_area" class="<?php echo get_theme_mod('it_menu_position'); ?>">
    <div class="top_header_area">
      <div class="container">
        <div class="row">
      <div class="col-md-4 text-start">
        <p><i class="fa-solid fa-location-dot"></i><?php print get_option("address-info");?></p>
      </div>
      <div class="col-md-4 text-center">
        <p><i class="fa-solid fa-envelope"></i><?php print get_option("email-info");?></p>
      </div>
      <div class="col-md-4 text-end">
        <p><i class="fa-solid fa-phone"></i><?php print get_option("phone-number");?></p>
      </div>
    </div>
      </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_theme_mod('it_logo'); ?>" alt="Logo">
        </a>
      </div>
      <div class="col-md-9">
        <!-- You can put nav or header widgets here -->
         <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
      </div>
    </div>
  </div>
</header>