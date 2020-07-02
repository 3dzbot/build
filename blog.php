<?php
/*
Template Name: Blog
Template Post Type: page
*/

// … остальной код шаблона

get_header('page');
?>
    <div class="sec_2 sec_2-blog">
        <div class="blog">
            <div class="block_name">
                <h2 class="name">breaking news</h2>
                <div class="line"></div>
            </div>
            <div class="blog_content">
                <div class="blog_articles">
                    <div data-animation="cross" data-nav-spacing="10" data-duration="500" data-infinite="1" class="slider w-slider">
                        <div class="slider_footer w-slider-mask">
                            <div class="slide1 w-slide">
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
                                <div class="blog_articles-1">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="articles_date">
                                        <div class="articles_date-icon"><i class="far fa-calendar-alt"></i></div>
                                        <div class="articles_date-number"><a href="#" class="articles_date-link"><?php echo get_the_date( 'F j, Y' ); ?></a></div>
                                    </div>
                                    <h3 class="articles_h3"><a href="<?php the_permalink() ?>" class="articles_h3-link"><?php the_title() ?></a></h3>
                                    <div class="articles_text">
                                        <?php echo the_content(); ?>
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
                                <!-- /slides  --> 
                            </div>
                            <div class="w-slide">
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
                                <div class="blog_articles-1">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="articles_date">
                                        <div class="articles_date-icon"><i class="far fa-calendar-alt"></i></div>
                                        <div class="articles_date-number"><a href="#" class="articles_date-link"><?php echo get_the_date( 'F j, Y' ); ?></a></div>
                                    </div>
                                    <h3 class="articles_h3"><a href="<?php the_permalink() ?>" class="articles_h3-link"><?php the_title() ?></a></h3>
                                    <div class="articles_text">
                                        <?php echo the_content(); ?>
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
                                <!-- /slides  --> 
                            </div>
                            <div class="w-slide">
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
                                <div class="blog_articles-1">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="articles_date">
                                        <div class="articles_date-icon"><i class="far fa-calendar-alt"></i></div>
                                        <div class="articles_date-number"><a href="#" class="articles_date-link"><?php echo get_the_date( 'F j, Y' ); ?></a></div>
                                    </div>
                                    <h3 class="articles_h3"><a href="<?php the_permalink() ?>" class="articles_h3-link"><?php the_title() ?></a></h3>
                                    <div class="articles_text">
                                        <?php echo the_content(); ?>
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
                                <!-- /slides  --> 
                            </div>
                            <div class="w-slide">
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
                              <div class="blog_articles-1">
                                  <?php the_post_thumbnail(); ?>
                                  <div class="articles_date">
                                      <div class="articles_date-icon"><i class="far fa-calendar-alt"></i></div>
                                      <div class="articles_date-number"><a href="#" class="articles_date-link"><?php echo get_the_date( 'F j, Y' ); ?></a></div>
                                  </div>
                                  <h3 class="articles_h3"><a href="<?php the_permalink() ?>" class="articles_h3-link"><?php the_title() ?></a></h3>
                                  <div class="articles_text">
                                      <?php echo the_content(); ?>
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
                                <!-- /slides  --> 
                            </div>
                            <div class="w-slide">
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
                              <div class="blog_articles-1">
                                  <?php the_post_thumbnail(); ?>
                                  <div class="articles_date">
                                      <div class="articles_date-icon"><i class="far fa-calendar-alt"></i></div>
                                      <div class="articles_date-number"><a href="#" class="articles_date-link"><?php echo get_the_date( 'F j, Y' ); ?></a></div>
                                  </div>
                                  <h3 class="articles_h3"><a href="<?php the_permalink() ?>" class="articles_h3-link"><?php the_title() ?></a></h3>
                                  <div class="articles_text">
                                      <?php echo the_content(); ?>
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
                                <!-- /slides  --> 
                            </div>
                        </div>
                        <div class="left-arrow-2 w-slider-arrow-left"></div>
                        <div class="right-arrow-2 w-slider-arrow-right">
                            <div class="text-block"><i class="fas fa-long-arrow-alt-right"></i></div>
                        </div>
                        <div class="slide-nav-2 w-slider-nav w-num"></div>
                    </div>
                </div>
                <div class="blog_navigation">
                    <div class="blog_navigation-catigories">
                        <h3 class="catigories-h3">Categories</h3>
                        <ul class="catigories_list">
							<?php wp_list_categories([
                                'hide_empty' => 0,
								'title_li' => '',
								'include' => '22, 18, 17, 19, 24, 20, 21, 23',
								'orderby' => '',
							]) ?>
                        </ul>
                    </div>
                    <div class="blog_navigation-archives">
                        <h3 class="archives-h3">Archives</h3>
                        <ul class="archives-list">
                        <?php wp_get_archives(array(
                        	'type'            => 'monthly',
                        	'limit'           => 5,
                        	'format'          => 'html', 
                        	'before'          => '',
                        	'after'           => '',
                        	'show_post_count' => false,
                        	'echo'            => 1,
                        	'post_type'       => 'post',
                        )); ?>
                        </ul>
                    </div>
                    <div class="blog_navigation-tags">
                        <h3 class="tags-h3">Tags</h3>
                        <?php wp_tag_cloud( array(
                        	'smallest'  => '14',
                        	'largest'   => '14',
                        	'unit'      => 'px',
                        	'number'    => 45,
                        	'format'    => 'flat',
                        	'separator' => " ",
                        	'orderby'   => 'name',
                        	'order'     => 'ASC',
                        	'exclude'   => null,
                        	'include'   => null,
                        	'link'      => 'view',
                        	'taxonomy'  => 'post_tag',
                        	'echo'      => true,
                        	'topic_count_text_callback' => 'default_topic_count_text',
                        ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
// get_sidebar();
get_footer();