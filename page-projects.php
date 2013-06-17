
<?php 
/*
Template Name: Projects template
*/

get_header(); ?>

<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <div><label class="" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>


	<?php query_posts(array('post_type'=>'projects')); ?>
	

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header>
				<h1><?php the_title(); ?></h1>

				<div class="info"><?php starkers_posted_on(); ?></div>
			</header>

			<?php the_content(); ?>
					
			<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
		
			<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'starkers_author_bio_avatar_size', 60 ) ); ?>
				<h2><?php printf( esc_attr__( 'About %s', 'starkers' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php printf( __( 'View all posts by %s &rarr;', 'starkers' ), get_the_author() ); ?>
					</a>
			<?php endif; ?>
			
			<footer>
				<?php starkers_posted_in(); ?>
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
			</footer>
				
		</article>

		<!--
<nav>
			<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'starkers' ) . ' %title' ); ?>
			<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'starkers' ) . '' ); ?>
		</nav>
-->

		<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
	

<?php get_footer(); ?>
