<?php
/*
Template Name: Projects
Template Post Type: page
*/

// … остальной код шаблона

get_header('page');
?>
    <div class="sec_2 sec_2-projects">
        <div class="projects">
            <div class="block_name">
                <h2 class="name">finished projects</h2>
                <div class="line"></div>
            </div>
            <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                <div class="tabs_menu w-tab-menu">
                    <a data-w-tab="Tab 1" class="tab_all w-inline-block w-tab-link w--current">
                        <div>all</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab_all w-inline-block w-tab-link" data-ix="tabs">
                        <div>design</div>
                    </a>
                    <a data-w-tab="Tab 3" class="tab_all w-inline-block w-tab-link">
                        <div>communication</div>
                    </a>
                    <a data-w-tab="Tab 4" class="tab_all w-inline-block w-tab-link">
                        <div>building</div>
                    </a>
                    <a data-w-tab="Tab 5" class="tab_all w-inline-block w-tab-link">
                        <div>interior</div>
                    </a>
                </div>
                <div class="tabs-content w-tab-content">
                    <div data-w-tab="Tab 1" class="tab_container w-tab-pane w--tab-active">
                        <div data-w-id="37f3b440-8a6f-8f6c-5f99-f59d71e7624b" style="opacity:1" class="tab_container-box">
					<!-- post project  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type' => 'project',
								'posts_per_page' => 10,
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>
                                    <div class="tab_block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover">
                                        <div class="tab_block-hover">
                                            <h3 class="tab_block-h3"><?php the_title(); ?></h3>
                                            <div class="tab_block-text">Type : <?php the_field('type'); ?></div>
                                            <div class="tab_block-text">Location : Ukraine, Zaporozhye</div>
                                            <div class="tab_block-text">Acreage : 3276 м 2</div>
                                            <div class="tab_block-text">Budget : 280.000 $</div>
                                            <div class="tab_block-text">Start : 10/05/2017</div>
                                            <div class="tab_block-text">Type : building</div>
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
					<!-- /post project  -->
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                        <div class="tab_container-box">
					<!-- post project  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type'      => 'project',
                                'posts_per_page' => 10,
                                'categories'     => 'design',
                                
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>
                                    <div class="tab_block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover">
                                        <div class="tab_block-hover">
                                            <h3 class="tab_block-h3"><?php the_title(); ?></h3>
                                            <div class="tab_block-text">Type : <?php the_field('type'); ?></div>
                                            <div class="tab_block-text">Location : Ukraine, Zaporozhye</div>
                                            <div class="tab_block-text">Acreage : 3276 м 2</div>
                                            <div class="tab_block-text">Budget : 280.000 $</div>
                                            <div class="tab_block-text">Start : 10/05/2017</div>
                                            <div class="tab_block-text">Type : building</div>
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
					<!-- /post project  -->
                        </div>
                    </div>
                    <div data-w-tab="Tab 3" class="w-tab-pane">
                        <div class="tab_container-box">
					<!-- post project  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type'      => 'project',
                                'posts_per_page' => 10,
                                'categories'     => 'communication',
                                
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>
                                    <div class="tab_block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover">
                                        <div class="tab_block-hover">
                                            <h3 class="tab_block-h3"><?php the_title(); ?></h3>
                                            <div class="tab_block-text">Type : <?php the_field('type'); ?></div>
                                            <div class="tab_block-text">Location : Ukraine, Zaporozhye</div>
                                            <div class="tab_block-text">Acreage : 3276 м 2</div>
                                            <div class="tab_block-text">Budget : 280.000 $</div>
                                            <div class="tab_block-text">Start : 10/05/2017</div>
                                            <div class="tab_block-text">Type : building</div>
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
					<!-- /post project  -->
                        </div>
                    </div>
                    <div data-w-tab="Tab 4" class="w-tab-pane">
                        <div class="tab_container-box">
					<!-- post project  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type'      => 'project',
                                'posts_per_page' => 10,
                                'categories'     => 'building',
                                
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>
                                    <div class="tab_block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover">
                                        <div class="tab_block-hover">
                                            <h3 class="tab_block-h3"><?php the_title(); ?></h3>
                                            <div class="tab_block-text">Type : <?php the_field('type'); ?></div>
                                            <div class="tab_block-text">Location : Ukraine, Zaporozhye</div>
                                            <div class="tab_block-text">Acreage : 3276 м 2</div>
                                            <div class="tab_block-text">Budget : 280.000 $</div>
                                            <div class="tab_block-text">Start : 10/05/2017</div>
                                            <div class="tab_block-text">Type : building</div>
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
					<!-- /post project  -->
                        </div>
                    </div>
                    <div data-w-tab="Tab 5" class="w-tab-pane">
                        <div class="tab_container-box">
					<!-- post project  -->
					<?php		
							global $post;

							$query = new WP_Query( [
								'post_type'      => 'project',
                                'posts_per_page' => 10,
                                'categories'     => 'interior',
                                
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>
                                    <div class="tab_block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover">
                                        <div class="tab_block-hover">
                                            <h3 class="tab_block-h3"><?php the_title(); ?></h3>
                                            <div class="tab_block-text">Type : <?php the_field('type'); ?></div>
                                            <div class="tab_block-text">Location : Ukraine, Zaporozhye</div>
                                            <div class="tab_block-text">Acreage : 3276 м 2</div>
                                            <div class="tab_block-text">Budget : 280.000 $</div>
                                            <div class="tab_block-text">Start : 10/05/2017</div>
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
					<!-- /post project  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();