<?php 
/* 
Template Name: Contact 
*/ 
 
/** 
 * The template for displaying page CONTACT 
 * 
 * This is the template that displays all pages by default. 
 * Please note that this is the WordPress construct of pages 
 * and that other 'pages' on your WordPress site may use a 
 * different template. 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ 
 * 
 * @package Autonimi_Theme 
 */ 
 
get_header(); 
?> 
 
	<div id="primary primary-contact" class="content-area"> 
		<main id="main-contact" class="site-main"> 
 
		<?php 
		while ( have_posts() ) : 
			the_post(); 
 
			get_template_part( 'template-parts/content', 'page' ); 
 
			// If comments are open or we have at least one comment, load up the comment template. 
			if ( comments_open() || get_comments_number() ) : 
				comments_template(); 
			endif; 
 
		endwhile; // End of the loop. 
		?> 
		<?php if ( is_active_sidebar( 'contact_right_1' ) ) : ?> 
			<aside id="sidebar-contact" class="widget-area" role="complementary"> 
				<?php dynamic_sidebar( 'contact_right_1' ); ?> 
			</aside><!-- #primary-sidebar --> 
		<?php endif; ?> 
        </main><!-- #main --> 
	</div><!-- #primary --> 
  
 
<?php 
//get_sidebar(); 
get_footer(); 
