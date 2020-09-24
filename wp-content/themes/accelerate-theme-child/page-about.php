<?php
/**
 * The template for displaying about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_content(); ?></h2>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->


<section class="services">
		<div class="main-content" role="main">

			<div class="intro">
				<h4><?php the_title(); ?></h4>
				<p>We take pride in our clients and the content we create for them.<br>Here’s a brief overview of our offered services.</p>
			</div>

			<div class="service-block">
					<?php query_posts('post_type=services'); ?>

					<?php while ( have_posts() ) : the_post();
					$service = get_field('service');
					$descriptor = get_field('descriptor');
					$icon = get_field('service_icon');
					$size = "full";
					?>

					<div class="individual-service">

						<figure>
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						</figure>

						<div class="service-text">
								<h2><?php echo $service; ?></h2>
								<p><?php echo $descriptor; ?></p>
						</div>

					</div>

				<?php endwhile; // end of the loop. ?>
			</div>

		</div><!-- .main-content -->
</section>

<div class="about-contact">
	<h2>Interested in working with us?</h2>
	<a class="button" href="#">Contact Us</a>
</div>

<?php get_footer(); ?>
