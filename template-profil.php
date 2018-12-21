<?php 
/* 
Template Name: Menu Profil 
*/ 
 
/** 
 * The template for displaying page MENU PROFIL 
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

	<div id="primary" class="content-area">
		<main id="main-profil" class="site-main">

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

            
        <div id="container-menu-profil">
                <div class="container-ligne"> 
                  <a class="button-profil" href="#"> Commandes</a>
                  <a  class="button-profil" href="#"> Adresses </a>
                </div>
                <div class="container-ligne"> 
                    <a  class="button-profil" href="#"> Options de paiement </a>
                   <a  class="button-profil" href="#"> Paramètres </a>
                </div>
                <div class="container-ligne">
             <a class="button-profil" href="#"> Liste de souhait </a>
                  <a class="button-profil" href="#"> Déconnexion </a>
                </div>
            <div>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();