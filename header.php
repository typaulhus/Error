<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- MAMPtastic --> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/shop.css" media="screen" />
    
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--lightbox -->
<link href="<?php bloginfo('template_directory'); ?>/js/lightbox/css/lightbox.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lightbox/js/lightbox.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>

<!-- Mint -->
<script src="/mint/?js" type="text/javascript"></script>
<!-- Adobe Edge fonts -->
<script src="http://use.edgefonts.net/bree-serif.js"></script>

<!-- toggle menu -->
<script>
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('#menu'),
    $menulink = $('.menu-link');
  
$menulink.click(function() {
  $menulink.toggleClass('active');
  $menu.toggleClass('active');
  return false;
});});
</script>

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

<?php wp_enqueue_script("jquery"); ?>

<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

</head>
 
<body <?php body_class(); ?>>
<div class="container">
    <header class="mainnav">
		 <hgroup class="logo">
			 <h1 class="logo_margin">
			 	<a href="<?php echo home_url( '/' ); ?>" class="logoimg">Home</a>
			 </h1>
		 </hgroup>  
		 
		 <a href="#menu" class="menu-link"><i class="icon-align-justify icon-white"></i> Menu</a>
		<nav id="menu" role="navigation">
			<!-- <ul>
        <?php wp_list_pages('title_li='); ?>
        </ul> -->
        <ul>
           <?php wp_nav_menu( $args ); ?> 
        </ul>
		</nav>
    </header>
