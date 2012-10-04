<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>

	<div class="c">
	 <?php get_template_part( 'loop', 'index' ); ?>
	 <?php get_template_part( 'sidebar' ); ?>
	</div><!-- end c -->
<?php get_footer(); ?>
