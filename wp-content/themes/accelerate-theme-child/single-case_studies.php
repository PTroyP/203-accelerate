<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="single-case-site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full";
			?>

				<article class=”case-study”>
					<aside class="case-study-sidebar">
        		<h2><?php the_title(); ?></h2>
        		<h6><?php echo $services; ?></h6>
        		<h5>Client: <?php echo $client; ?></h5>

						<?php the_content(); ?>

        		<p class="live-site"><strong><a href="<?php echo $link; ?>">Visit Live Site &rsaquo;</a></strong></p>
   				</aside>
				</article>

			<div class="case-study-images">
					<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						}?>
					<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
					 	}?>
					<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						} ?>
			</div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to Work</span></a></div>
	</nav>
<?php get_footer(); ?>
