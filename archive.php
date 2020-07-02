<?php
/**
 * The template for displaying archive pages
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
							<div class="page-header">
								<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
								?>				
							</div><!-- .page-header -->
            	<div class="line"></div>

            <div class="blog_content">
                <div class="blog_articles">
								<?php
								while ( have_posts() ) :
									the_post();
									echo '<h2>';
									the_title();
									echo '</h2><br>';
									echo '<div>';
									the_post_thumbnail('post-thumb-850-560');
									echo '</div><br>';
									the_content();
									echo '<br><hr>';
									// the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
							?>
			<!-- /post project  -->   
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
</div>

<?php
// get_sidebar();
get_footer();
