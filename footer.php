<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
</div> <!--end container div -->
<div class="footerPush"></div>

<footer class="mainFooter">
	<p> All works copyright <?php bloginfo( 'name' ); ?> &copy; <?php echo date("Y") ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a> 
	</p>
</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


</body>
</html>