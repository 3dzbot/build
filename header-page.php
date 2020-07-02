<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Building
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body   <?php body_class('body'); ?>>
<div class="cont_modal">
    <div class="modal-_window">
        <div class="clos" data-ix="modal-clos">x</div>
        <p class="modal-_window-text">The purpose of a <strong>Privacy Policy</strong> is to inform users of your data collection practices in order to protect the customer's privacy. Your <strong>Privacy Policy</strong> should disclose how the website/app collects information, how the information is used, whether or not it is shared with third parties and how it is protected and stored.</p>
    </div>
</div>
<!-- /cont_modal -->
<header class="sec_1">
    <div class="header">
        <div id="top_logotyp" class="header-top">
            <!-- <a href="" class="logotyp w-inline-block w--current"></a> -->
            <?php the_custom_logo(); ?>
            <div class="info">
                <div class="info_adress">
                    <div class="map"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="adress"><a href="https://www.google.com/maps/place/%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%A1%D0%BE%D0%B1%D0%BE%D1%80%D0%BD%D1%8B%D0%B9,+164,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0,+69000/@<?php the_field('1st_gps_adress', 10); ?>,<?php the_field('2nd_gps_adress', 10); ?>,17z/data=!3m1!4b1!4m5!3m4!1s0x40dc674a22edaa57:0x96197f8d988c6eb3!8m2!3d<?php the_field('1st_gps_adress', 10); ?>!4d<?php the_field('2nd_gps_adress', 10); ?>" target="_blank" class="info_adress-link"><?php the_field('adress', 10); ?></a></div>
                </div>
                <div class="info_phon">
                    <div class="phon"><i class="fas fa-phone-volume"></i></div>
                    <div class="nomer"><a href="tel:<?php the_field('phone_link', 10); ?>" class="info_phon-link"><?php the_field('phone', 10); ?></a></div>
                </div>
            </div>
            <div data-collapse="small" data-animation="default" data-duration="400" data-w-id="cda9daac-3bfc-741d-4fdc-eafaabe0d29a" class="navbar w-nav">
                <div class="w-container">
                    <?php wp_nav_menu([
			            	'menu'            => 'menu-mobile', 
			            	'container' 	  => 'nav', 
                        	'container_class' => 'nav-menu w-nav-menu',
                        	'menu_id' 		  => '',
			            	'menu_class' 	  => '',
                    ]); ?>
                    <div class="menu-button w-nav-button">
                        <div class="hamburger_line1"></div>
                        <div class="hamburger_line2"></div>
                        <div class="hamburger_line3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_center">
            <?php wp_nav_menu([
		    	'menu' 			    => 'menu-header', 
		    	'container' 	    => 'div', 
            	'container_class'   => '',
            	'menu_id' 		    => '',
		    	'menu_class' 	    => 'block_menu',
            ]); ?>
            <div class="block_content">
                <h1 class="block_content-h1" data-ix="text-animate"><?php the_title(); ?></h1>
                <div class="breadcrumbs">Home / <?php the_title(); ?></div>
                <div class="block_content-text"><?php the_content(); ?></div>
            </div>
        </div>
        <div class="header_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    </div>
</header>
<!-- /header -->