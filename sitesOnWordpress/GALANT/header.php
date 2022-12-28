<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="GALANT, Meta Tags, test" />
    <meta name="author" content="Sergey Melnik https://delux.website" />
    <meta name="description" content="test site GALANT" />
    <?php wp_head(); ?>
   
   
</head>

<body>
    <!-- header -->
    <header class="header">
        <!-- top header -->
        <div class="top-header">
            <div class="top-header__wrap container">
                <div class="location">
                    <div class="location__adress">
                        <img class="location__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_location.svg" alt="" />
                      <?php echo get_post_meta( 41,'location__adress',true); ?>
                    </div>
                    <div class="location__work-time">
                        <img class="location__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_time.svg" alt="" />
                       <?php echo get_post_meta( 41, 'location__work-time', true); ?>
                       
                    </div>
                </div>
                <div class="social-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-social_vk-with-circle.svg" alt="" class="" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_instagram-filled.svg" alt="" class="" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_facebook.svg" alt="" class="" />
                </div>
            </div>
        </div>
        <!-- end top header -->
        <!-- main-header -->
        <div class="main-header container">
    <?php      if( has_custom_logo() ){
		echo get_custom_logo();
} ?>
          <?php wp_nav_menu([
	'theme_location'  => 'header',
	'container'       => false,
	'menu_class'      => 'navigation',
	'echo'            => true,
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	
]);; ?>
           
            <div class="contact">
                <div class="contact__tel">
                    <img class="contact__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-tel.svg" alt="" />&nbsp; <?php echo get_post_meta( 44,'contact__tel',true); ?>
                    
                </div>
                <div class="contact__email">
                    <img class="contact__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-email.svg" alt="" />&nbsp; <?php echo get_post_meta( 44,'contact__email',true); ?>
                    
                </div>
            </div>
        </div>
        <!-- end main-header -->
    </header>
    <!-- end header -->
