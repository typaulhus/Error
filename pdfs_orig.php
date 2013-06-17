<?php
/*
Template Name: PDFs
*/
?>

<?php


get_header(); ?>

	<?php
query_posts('cat=30');
while (have_posts()) : the_post();
the_content(); 
endwhile;
?>

<?php get_footer(); ?>