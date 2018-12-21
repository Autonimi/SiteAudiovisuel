<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autonimi_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<h2>FOOTER.PHP</h2>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'autonimi_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'autonimi_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'autonimi_theme' ), 'autonimi_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		<script src="http://localhost/wordpress/wp-content/themes/SiteAudiovisuel/js/carousel.js"></script>
		<script src="http://localhost/wordpress/wp-content/themes/SiteAudiovisuel/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
