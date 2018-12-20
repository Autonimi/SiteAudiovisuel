<?php
/**
 * The template for displaying archive products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autonimi_Theme
 */

get_header();
?>

	<div id="primary" class="content-area archive-produits">
		<main id="main" class="site-main">
		<h2>archive-produit.php</h2>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
			
				<h2> <?php the_title() ?> </h2>
				<?php the_post_thumbnail() ?>
				

				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();