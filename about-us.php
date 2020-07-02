<?php
/*
Template Name: About Us
Template Post Type: page
*/

// … остальной код шаблона

get_header('page');
?>
    <div class="sec_2">
        <div class="about">
            <div class="block_name">
                <h2 class="name">about our company</h2>
                <div class="line"></div>
            </div>
            <div class="progress">
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f188" style="opacity:1" class="progress_content">
					<img src="<?php the_field('prev-img1', 89); ?>" width="74" alt="image" class="progress_content-icon">
                  <div class="progress_content-description">
                    <div class="progress_numbers"><?php the_field('prev-num1', 89); ?> <span class="numbers_span">yr</span></div>
                    <p class="progress_text"><?php the_field('prev-text1', 89); ?></p>
                  </div>
                </div>
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f193" style="opacity:1" class="progress_content"><img src="<?php the_field('prev-img2', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">
                        <div class="progress_numbers"><?php the_field('prev-num2', 89); ?> <span class="numbers_span">obj</span></div>
                        <p class="progress_text"><?php the_field('prev-text2', 89); ?></p>
                    </div>
                </div>
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f19e" style="opacity:1" class="progress_content"><img src="<?php the_field('prev-img3', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">
                        <div class="progress_numbers"><?php the_field('prev-num3', 89); ?> <span class="numbers_span">ppl</span></div>
                        <p class="progress_text"><?php the_field('prev-text3', 89); ?></p>
                    </div>
                </div>
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f1a9" style="opacity:1" class="progress_content"><img src="<?php the_field('prev-img4', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">
                        <div class="progress_numbers"><?php the_field('prev-num4', 89); ?> <span class="numbers_span">thx</span></div>
                        <p class="progress_text"><?php the_field('prev-text4', 89); ?></p>
                    </div>
                </div>
            </div>
            <div class="company_word">
                <div class="company_word-video">
                    <div id="w-node-3e3025b2f1b6-ced3053e" class="video w-video w-embed">
                        <iframe class="embedly-embed" src="<?php the_field('sourse', 89); ?>" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="company_word-content">
                    <h3 class="word_content-name"><?php the_field('video-title', 89); ?></h3>
                    <p class="word_content-text"><?php the_field('about-video-descr', 6); ?></p>
                    <h3 class="word_content-name">company goal</h3>
                    <ul class="list_about">
                        <li class="item_list item1">Design</li>
                        <li class="item_list item2">Work organization</li>
                        <li class="item_list item3">Delivery of materials</li>
                        <li class="item_list item4">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sec_3">
        <div class="employees">
            <div class="block_name">
                <h2 class="name">honorary employees</h2>
                <div class="line"></div>
            </div>
            <div class="workers">
					<!-- post projects  -->
					<?php		
						global $post;
						$query = new WP_Query( [
							'post_type' => 'employee',
							'posts_per_page' => 3,
						] );
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
                                   ?>
                                   
                                   <div data-w-id="5204012a-e921-6d47-2a31-db5624b773a7" style="opacity:1" class="employee_person">
                                       <div class="employee_person-img" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 0% / cover"></div>
                                       <h3 class="employee_person-h3"><? the_title() ?></h3>
                                       <div class="employee_person-prof"><?php the_field('profession'); ?></div>
                                       <div class="employee_person-text">
                                            <?php the_content(); ?>
                                       </div>
                                   </div>
								<?php 
							}
						} else {
							// Постов не найдено
							echo "Постов нет";
						}
						wp_reset_postdata(); // Сбрасываем $post
					?>
					<!-- /post projects  -->


            </div>
        </div>
    </div>
    <div class="sec_5 sec_5-about">
        <div class="reviews">
            <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="reviews_slider w-slider">
                <div class="w-slider-mask">

					<!-- post review  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type' => 'review',
								'posts_per_page' => 3,
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
                                    ?>
                                    <div class="reviews_slider-1 w-slide">
                                        <h3 class="reviews-h3">what people say about us</h3>
                                        <div class="reviews_text">
                                            <?php echo get_the_content();?>
                                        </div>
                                        <div class="reviews_person">
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/5cdbbf15b102f93b0a08354d_quote-left-solid.svg"                                    width="36" alt="" class="reviews_person-icon">
                                <div class="reviews_person-identity">
                                    <div class="person_identity-foto" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-position: 50% 50%;"></div>
                                    <div class="person_identity-text"><?php the_title() ?></div>
                                </div>
                                        </div>
                                    </div>

									<?php 
								}
							} else {
								// Постов не найдено
								echo "Постов нет";
							}
							wp_reset_postdata(); // Сбрасываем $post
					?>
					<!-- /post review  -->


                </div>
                <div class="left-arrow w-slider-arrow-left"></div>
                <div class="right-arrow w-slider-arrow-right"></div>
                <div class="slide-nav w-slider-nav w-round"></div>
            </div>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();