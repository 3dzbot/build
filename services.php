<?php
/*
Template Name: Services
Template Post Type: page
*/

// … остальной код шаблона

get_header('services');
?>

<div class="sec_2 sec_2-services">
    <div class="services">
        <div class="block_name">
            <h2 class="name">provide services</h2>
            <div class="line"></div>
        </div>
        <div class="services_box">

        <!-- post project  -->
		<?php		
			global $post;

				$query = new WP_Query( [
						'post_type' => 'servic',
						'posts_per_page' => 9,
				] );

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
                        <div data-w-id="ebd95e8a-3178-4269-8eb9-0c8635650f56" style="opacity:1" class="services_block">
                            <div class="services_block-name"><img src="<?php echo get_the_post_thumbnail_url(); ?>" width="74" height="74" alt="image"      class="services_block-icon">
                                <h3 class="services_block-h3"><?php the_title() ?></h3></div>
                            <div class="services_block-text"><?php echo get_the_content(); ?></div>
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

<?php
// get_sidebar();
get_footer();