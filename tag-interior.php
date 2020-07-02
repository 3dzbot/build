<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Building
 */

get_header();
?>
<div class="sec_2 sec_2-blog">
        <div class="blog">
            <div class="block_name">
                <h2 class="name">interior</h2>
                <div class="line"></div>
            </div>
            <div class="blog_content">
                <div class="blog_articles">
                    <!-- start post content myself -->
                    <?php the_post_thumbnail(); ?>
                    <div class="main-post">

		<?php		
						global $post;

						$query = new WP_Query( [
							'tag__in' => array(30,47),
							'posts_per_page' => 8,
						] );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
							$query->the_post();
							?>
							<!-- Вывода постов, функции цикла: the_title и т.д. -->
                            <div data-w-id="ee8b156f-f90f-207f-851b-3e3025b2f1c6" style="opacity: 1;
    transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
    transform-style: preserve-3d; background: url('<?php echo get_the_post_thumbnail_url(); ?>') 50% 50% / cover" class="portfolio_box">
                            <div class="portfolio_box-hover">
                                <h3 class="portfolio_hover-h3"><?php the_title() ?></h3>
                                <div class="portfolio_hover-text"><?php echo get_the_content();?></div>
                                <a href="<?php the_permalink() ?>" class="portfolio_hover-link">see more</a></div>
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
