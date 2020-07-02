<?php
/*
Template Name: Contacts
Template Post Type: page
*/

// … остальной код шаблона

get_header('page');
?>
    <div class="sec_2">
        <div class="contacts">
            <div class="block_name">
                <h2 class="name">contact details</h2>
                <div class="line"></div>
            </div>
            <div class="contacts_content">
                <?php
			        while ( have_posts() ) :
			        	the_post();
			        	the_content();
			        endwhile; // End of the loop.
                ?>
            </div>
            <div class="contacts_content">
                <div class="contacts_adressa">
                    <div class="contacts_adressa-adress">
                        <div class="adressa_adress-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="adressa_adress-text"><a href="https://www.google.com/maps/place/%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%A1%D0%BE%D0%B1%D0%BE%D1%80%D0%BD%D1%8B%D0%B9,+164,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0,+69000/@<?php the_field('1st_gps_adress', 10); ?>,<?php the_field('2nd_gps_adress', 10); ?>,17z/data=!3m1!4b1!4m5!3m4!1s0x40dc674a22edaa57:0x96197f8d988c6eb3!8m2!3d<?php the_field('1st_gps_adress', 10); ?>!4d<?php the_field('2nd_gps_adress', 10); ?>" target="_blank" class="adressa_adress-link"><?php the_field('adress', 10); ?></a></div>
                    </div>
                    <div class="contacts_contacts-phone">
                        <div class="contacts_phone-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="contacts_phone-text"><a href="tel:<?php the_field('phone_link', 10); ?>" class="contacts_phone-link"><?php the_field('phone', 10); ?></a></div>
                    </div>
                    <div class="contacts_contacts-email">
                        <div class="contacts_email-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contacts_email-text"><a href="mailto:jane@royal-soft.net?subject=new%20letter%20from%20the%20site%20Building" class="contacts_email-link"><?php the_field('email', 10); ?></a></div>
                    </div>
                    <div class="contacts_contacts-clock">
                        <div class="contacts_clock-icon"><i class="fas fa-clock"></i></div>
                        <div class="contacts_clock-text"><?php the_field('working_time', 10); ?></div>
                    </div>
                    <div class="contacts_contacts-social">
                        <div class="contacts_social-facebook"><a href="https://www.facebook.com/" target="_blank" class="contacts_facebook-link"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="contacts_social-twitter"><a href="https://twitter.com/" target="_blank" class="contacts_twitter-link"><i class="fab fa-twitter"></i></a></div>
                        <div class="contacts_social-google"><a href="http://www.googleplus.com" target="_blank" class="contacts_google-link"><i class="fab fa-google-plus-g"></i></a></div>
                        <div class="contacts_social-linkedin"><a href="https://www.linkedin.com" target="_blank" class="contacts_linkedin-link"><i class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
                <div class="contacts_form">
                    <div class="questions_form questions_form-contacts">
                        <h3 class="questions_form-h3">get an answer online</h3>
                        <div class="form-block w-form">
                        <?php echo do_shortcode('[contact-form-7 id="106" title="Questions_form"]') ?>
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
        </div>
    </div>
    <div class="sec_3">
        <?php echo do_shortcode('[wpgmza id="1"]') ?>
    </div>

    <?php
// get_sidebar();
get_footer();