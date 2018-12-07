<?php

register_nav_menus( array(
    'Top-compte' => 'Navigation compte',
    'Top-categories' => 'Navigation catégories',
    'Left-principale' => 'Navigation principale',
) ); 

/**
 * Appel du script JS du menu des catégories
 */
wp_enqueue_script( 'script-top-categories', get_template_directory_uri() . '/js/top-categories.js', array ( 'jquery' ), 1.0, true);