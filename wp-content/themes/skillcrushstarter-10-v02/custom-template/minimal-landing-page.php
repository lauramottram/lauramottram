<?php
/*
Template Name: Minimal Landing Page
*/

get_header(); ?>

<!-- header image -->

	<div class="landing-image">
		<img src="http://localhost:8888/wordpress/wp-content/uploads/2018/08/desktop_image.jpg">
	</div>


<!-- .main-content -->
	<div id="primary" class=" landing-page">
		<section>
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
	</div>

	<!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>
		</div>

			<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field("image_1");
					$size = "medium";
				?>
				<li>
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>

					<h6> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h6>
				</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
			</div>
	</section>
