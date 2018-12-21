<?php

/**
 * Modififer les fonctions ou faire des includes à partir de ce fic hier, ne pas modifier functions.php
 */

 /**
  * Fonctions pour les menus personnalisés (Thomas)
  */
require get_template_directory() . '/inc/custom-functions-nav.php';

// Appel du CSS du footer
wp_enqueue_style( 'css-footer', get_template_directory_uri() . '/layouts/footer.css',false,'1.1','all');

/**
  * include le code qui va créer des widget area ici celle de contact
  */
 require get_template_directory() . '/inc/custom-functions-widget-area.php';

add_theme_support( 'post-thumbnails' );

//include('ficheProduit-functions-Mikael.php');
require get_template_directory() . '/inc/ficheProduit-functions-Mikael.php';

wp_enqueue_script( 'script-carousel', get_template_directory_uri() . '/js/carousel.js', array ( 'jquery' ), 1.0, true);
wp_enqueue_script( 'script-carousel-library', get_template_directory_uri() . '/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array ( 'jquery' ), 1.0, true);