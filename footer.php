<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Building
 */

?>

<div class="sec_7">
	<div class="footer">
	  <div class="footer_contacts">
	    <h3 class="footer_contacts-h3">contacts</h3>
	    <div class="footer_contacts-adress">
	        <div class="footer_adress-icon"><i class="fas fa-map-marker-alt"></i></div>
	        <div class="footer_adress-text"><a href="https://www.google.com/maps/place/%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%A1%D0%BE%D0%B1%D0%BE%D1%80%D0%BD%D1%8B%D0%B9,+164,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0,+69000/@<?php the_field('1st_gps_adress', 10); ?>,<?php the_field('2nd_gps_adress', 10); ?>,17z/data=!3m1!4b1!4m5!3m4!1s0x40dc674a22edaa57:0x96197f8d988c6eb3!8m2!3d<?php the_field('1st_gps_adress', 10); ?>!4d<?php the_field('2nd_gps_adress', 10); ?>" target="_blank" class="footer_adress-link"><?php the_field('adress', 10); ?></a></div>
	    </div>
	    <div class="footer_contacts-phone">
	        <div class="footer_phone-icon"><i class="fas fa-phone-volume"></i></div>
	        <div class="footer_phone-text"><a href="tel:<?php the_field('phone_link', 10); ?>" class="footer_phone-link"><?php the_field('phone', 10); ?></a></div>
	    </div>
	    <div class="footer_contacts-email">
	        <div class="footer_email-icon"><i class="fas fa-envelope"></i></div>
	        <div class="footer_email-text"><a href="mailto:<?php the_field('email', 10); ?>" class="footer_email-link"><?php the_field('email', 10); ?></a></div>
	    </div>
	    <div class="footer_contacts-clock">
	      <div class="footer_clock-icon"><i class="fas fa-clock"></i></div>
	      <div class="footer_clock-text"><?php the_field('working_time', 10); ?></div>
	    </div>
	    <div class="footer_contacts-social">
	      <div class="footer_social-facebook"><a href="https://www.facebook.com/" target="_blank" class="footer_facebook-link"><i class="fab fa-facebook-f"></i></a></div>
	      <div class="footer_social-twitter"><a href="https://twitter.com/" target="_blank" class="footer_twitter-link"><i class="fab fa-twitter"></i></a></div>
	      <div class="footer_social-google"><a href="http://www.googleplus.com" target="_blank" class="footer_google-link"><i class="fab fa-google-plus-g"></i></a></div>
	      <div class="footer_social-linkedin"><a href="https://www.linkedin.com" target="_blank" class="footer_linkedin-link"><i class="fab fa-linkedin-in"></i></a></div>
	  	</div>
		</div>
		<div class="footer_service">
	    <h3 class="footer_service-h3">company service</h3>
			<?php the_widget( 'WP_Nav_Menu_Widget', ['nav_menu' => 'menu-servic'] ); ?>
		</div>
		<div class="footer_subscribe">
	    <h3 class="footer_subscribe-h3">subscribe</h3>
	    <div class="w-form">
					<?php echo do_shortcode('[contact-form-7 id="105" title="Subscribe"]') ?>
					
	        <div class="w-form-done">
	            <div>Thank you! Your submission has been received!</div>
	        </div>
	        <div class="w-form-fail">
	            <div>Oops! Something went wrong while submitting the form.</div>
	        </div>
	    </div>
	  </div>
	</div>
</div>
<div class="sec_8">
    <div class="privacy">
        <div class="privacy_text">&copy; 2020 <span class="privacy_text-bold">BUILDING</span> All rights reserved. <a href="<?php echo get_permalink(3); ?>" class="privacy_text-link" data-ix="modal-window">Privacy Policy</a></div>
    </div>
</div>
<a href="#top_logotyp" class="top_btn w-inline-block">
    <div class="top_btn-icon"><i class="fas fa-arrow-up"></i></div>
</a>

<?php wp_footer(); ?>
<script>
  WebFont.load({
      google: {
          families: ["Raleway:regular,700"]
      }
  })
</script>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
<script>
  ! function(o, c) {
      var n = c.documentElement,
          t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
  }(window, document)
</script>
	
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<script>
  $(document).ready(function() {
      $('[href*="brandjs"]').attr("style", "display:none !important"), $('a[href="' + window.location.href + '"]').addClass("w--current")
  })
</script>

</body>
</html>