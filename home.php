<?php
/*
Template Name: Home
Template Post Type: page
*/

// … остальной код шаблона

get_header();
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
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f193" style="opacity:1" class="progress_content">
                    <img src="<?php the_field('prev-img2', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">                    
                        <div class="progress_numbers"><?php the_field('prev-num2', 89); ?> <span class="numbers_span">obj</span></div>
                        <p class="progress_text"><?php the_field('prev-text2', 89); ?></p>
                    </div>
                </div>
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f19e" style="opacity:1" class="progress_content">
                    <img src="<?php the_field('prev-img3', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">
                        <div class="progress_numbers"><?php the_field('prev-num3', 89); ?> <span class="numbers_span">ppl</span></div>
                        <p class="progress_text"><?php the_field('prev-text3', 89); ?></p>
                    </div>
                </div>
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f1a9" style="opacity:1" class="progress_content">
                    <img src="<?php the_field('prev-img4', 89); ?>" width="74" alt="image" class="progress_content-icon">
                    <div class="progress_content-description">
                        <div class="progress_numbers"><?php the_field('prev-num4', 89); ?> <span class="numbers_span">thx</span></div>
                        <p class="progress_text"><?php the_field('prev-text4', 89); ?></p>
                    </div>
                </div>
        </div>
        <div class="company_word">
                <div class="company_word-video">
                    <div id="w-node-3e3025b2f1b6-ced3053e" class="video w-video w-embed">
                    <iframe class="embedly-embed" src="<?php the_field('sourse', 89); ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="company_word-content">
                    <h3 class="word_content-name"><?php the_field('video-title', 89); ?></h3>
                    <p class="word_content-text"><?php the_field('video-description', 89); ?></p><a href="<?php echo get_permalink(6); ?>" class="word_content-btn w-button"><?php the_field('video-button-text', 89); ?></a>
                </div>
        </div>
    </div>
</div>
<div class="sec_3">
    <div class="portfolio">
            <div class="block_name">
                <h2 class="name">portfolio</h2>
                <div class="line"></div>
            </div>
    </div>
    <div class="portfolio_blocks">
        <div class="w-layout-grid grid">
            <!-- post projects  -->
			<?php		
			    global $post;

				$query = new WP_Query( [
					'post_type' => 'project',
					'posts_per_page' => 8,
				] );

			    if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
			?>
			   	<!-- Вывода постов, функции цикла: the_title и т.д. -->
                <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f1c6" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50%  50% / cover" class="portfolio_box">
                    <div class="portfolio_box-hover">
                        <h3 class="portfolio_hover-h3"><?php the_title() ?></h3>
                        <div class="portfolio_hover-text"><?php echo get_the_content();?></div>
                        <a href="<?php the_permalink() ?>" class="portfolio_hover-link">see more</a>
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
<div class="sec_4">
    <div class="questions">
        <div class="questions_form">
            <div class="block_name">
                <h2 class="name">find out the answer</h2>
                <div class="line"></div>
            </div>
            <h3 class="questions_form-h3">get an answer online</h3>
            <div class="form-block w-form">
                <?php echo do_shortcode('[contact-form-7 id="106" title="Questions_form"]') ?>
            </div>
        </div>
        <div class="questions_answer">
            <h3 class="questions_answer-h3">frequently asked Questions</h3>
            <div data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown_toggle w-dropdown-toggle">
                    <div class="dropdown_icons">
                        <div class="horizontal_line"></div>
                        <div class="vertical_line" data-ix="list-open"></div>
                    </div>
                    <div class="dropdown_text"><?php the_field('question1', 89); ?></div>
                </div>
                <nav class="dropdown_list w-dropdown-list" data-ix="list">
                    <p class="dropdown_list-text"><?php the_field('answer1', 89); ?></p>
                </nav>
            </div>
            <div data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown_toggle w-dropdown-toggle">
                    <div class="dropdown_icons">
                        <div class="horizontal_line"></div>
                        <div class="vertical_line" data-ix="list-open"></div>
                    </div>
                    <div class="dropdown_text"><?php the_field('question2', 89); ?></div>
                </div>
                <nav class="dropdown_list w-dropdown-list" data-ix="list">
                    <p class="dropdown_list-text"><?php the_field('answer2', 89); ?></p>
                </nav>
            </div>
            <div data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown_toggle w-dropdown-toggle">
                    <div class="dropdown_icons">
                        <div class="horizontal_line"></div>
                        <div class="vertical_line" data-ix="list-open"></div>
                    </div>
                    <div class="dropdown_text"><?php the_field('question3', 89); ?></div>
                </div>
                <nav class="dropdown_list w-dropdown-list" data-ix="list">
                    <p class="dropdown_list-text"><?php the_field('answer3', 89); ?></p>
                </nav>
            </div>
            <div data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown_toggle w-dropdown-toggle">
                    <div class="dropdown_icons">
                        <div class="horizontal_line"></div>
                        <div class="vertical_line" data-ix="list-open"></div>
                    </div>
                    <div class="dropdown_text"><?php the_field('question4', 89); ?></div>
                </div>
                <nav class="dropdown_list w-dropdown-list" data-ix="list">
                    <p class="dropdown_list-text"><?php the_field('answer4', 89); ?></p>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="sec_5">
    <div class="reviews">
        <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="reviews_slider w-slider">
            <div class="w-slider-mask">
				<!-- post projects  -->
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/5cdbbf15b102f93b0a08354d_quote-left-solid.svg" width="36" alt="image" class="reviews_person-icon">
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
				<!-- /post projects  -->

            </div>
            <div class="left-arrow w-slider-arrow-left"></div>
            <div class="right-arrow w-slider-arrow-right"></div>
            <div class="slide-nav w-slider-nav w-round"></div>
        </div>
    </div>
</div>
<div class="sec_6">
    <div class="news">
        <div class="block_name">
            <h2 class="name">company's news</h2>
            <div class="line"></div>
        </div>
        <div class="news_block">
            <!-- news left  -->
            <div class="news_left">
		        <?php		
		        	global $post;
		        	$query = new WP_Query( [
		        		'orderby'        => 'date',
		        		'posts_per_page' => 4,
		        	] );
		        	if ( $query->have_posts() ) {
		        		while ( $query->have_posts() ) {
		        			$query->the_post();
		        ?>
                <!-- Вывода постов, функции цикла: the_title и т.д. -->
                <div class="news_box">
                    <?php the_post_thumbnail('post-thumb-70-70'); ?>
                    <div class="news_box-content">
                        <div class="news1_content-date">
                            <div class="news_box-icon"><i class="far fa-calendar-alt"></i></div>
                            <div class="news_box-text"><?php echo get_the_date( 'F j, Y' ); ?></div>
                        </div>
                        <h3 class="news_box-h3"><a href="<?php the_permalink() ?>" class="news_box-link"><? the_title() ?></a></h3>
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
            </div>
            <!-- /news left  -->   
            <!-- news_right  -->
            <div class="news_right">
                <?php		
			        global $post;
			        $query = new WP_Query( [
			        	"orderby"        => 'date',
			        	"posts_per_page" => 2,
			        ] );
                    if ( $query->have_posts() ) {
                        $count = 0;
                        while ( $query->have_posts() ) {
                            $query->the_post();
                                if ($count > 0){
                                    echo "<div class='new_boxbig new_boxbig-right'>";										
                                }	else if ($count < 1){
                                    echo "<div class='new_boxbig new_boxbig-left'>";	
                                }							
                ?>                    
                        <div class="new_boxbig-img">
                            <?php the_post_thumbnail("post-thumb-376-250"); ?>
                        </div>
                        <div class="news_box-content">
                            <div class="news1_content-date">
                                <div class="news_box-icon"><i class="far fa-calendar-alt"></i></div>
                                <div class="news_box-text"><?php echo get_the_date( "F j, Y" ); ?></div>
                            </div>
                            <h3 class="news_box-h3"><a href="<?php the_permalink() ?>" class="news_box-link"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="new_boxbig-text">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                <?php 
                    $count++;
			    	}
			            } else {
			        	// Постов не найдено
			        	echo "Постов нет";
			        }
			        wp_reset_postdata(); // Сбрасываем $post
                ?>
            </div>
            <!-- /news_right  --> 
        </div>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
