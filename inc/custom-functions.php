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
