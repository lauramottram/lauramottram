<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="" class="soc-icon fb"></a>
					<a href="" class="soc-icon ln"></a>
					<a href="" class="soc-icon gh"></a>

				</div>
				<a href="<?php echo site_url('/home/'); ?>" class="btn">Work With Me</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
