<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="page-404 hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <?php the_title(); ?>
        <h1><?php the_content(); ?></h1>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

<div class="crazy">
    <div class="crazy-search">
        <h1>We went <span>C-R-A-Z-Y</span> looking for that page!</h1>
    </div>

    <div class="crazy-find">
        <h1>But, it's not out there!</h1>
    </div>
</div>

<div class="search-404">
  <a class="button" href="/accelerate/home">Try our Homepage!</a>
</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
