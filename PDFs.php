<?php
/*
Template Name: PDFs
*/
?>

<?php get_header(); ?>

<div class="c">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- <h1><?php the_title(); ?></h1> -->
			<?php the_content(); ?>
		<?php endwhile; else: endif; ?>

		<?php query_posts('cat=30');?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p><?php the_content(); ?>
	<?php endwhile; else: endif; ?>
</div>
	
	<?php get_footer(); ?>