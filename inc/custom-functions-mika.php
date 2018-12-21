<?php

// Appel du script JS pour le produit
wp_enqueue_script( 'script-produit', get_template_directory_uri() . '/js/single-Produit.js', array ( 'jquery' ), 1.0, true);
// Appel du script JS carousel
wp_enqueue_script( 'script-carousel', get_template_directory_uri() . '/js/carousel.js', array ( 'jquery' ), 1.0, true);

// Appel du script JS carousel
wp_enqueue_script( 'script-carousel', get_template_directory_uri() . '/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array ( 'jquery' ), 1.0, true);
// Appel du script réglage carousel
wp_enqueue_script( 'script-carousel', get_template_directory_uri() . '/js/carousel.js', array ( 'jquery' ), 1.0, true);
// Appel du script JS carousel
wp_enqueue_script( 'script-carousel', get_template_directory_uri() . '/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array ( 'jquery' ), 1.0, true);

// Appel du CSS du carousel et des produits
wp_enqueue_style( 'css-produit', get_template_directory_uri() . 'moncss.css',false,'1.1','all');
wp_enqueue_style( 'css-carousel', get_template_directory_uri() . '/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css',false,'1.1','all');
wp_enqueue_style( 'css-carousel', get_template_directory_uri() . '/inc/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css',false,'1.1','all');


?>
