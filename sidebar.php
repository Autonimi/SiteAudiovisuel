<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autonimi_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' );
	wp_nav_menu( array(
				'theme_location' => 'Left-principale',
				'menu_id'        => 'left-principale',
			) );
	?>
</aside><!-- #secondary -->
