<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
<!-- 	 <h1 class="entry-title">Event: <?php the_title(); ?></h1>
	 -->	<?php get_template_part( 'loop', 'single' ); ?>

<?php get_footer(); ?>