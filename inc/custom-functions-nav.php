<?php

// Ajout des menus top-nav, top-categories-nav, et side-nav
register_nav_menus( array(
    'Top-compte' => 'Navigation compte',
    'Top-categories' => 'Navigation catégories',
    'Left-principale' => 'Navigation principale',
) ); 

// Appel du script JS pour le menu top-categories-nav
wp_enqueue_script( 'script-top-categories', get_template_directory_uri() . '/js/top-categories-nav.js', array ( 'jquery' ), 1.0, true);
// Appel du script JS pour le menu top-nav
wp_enqueue_script( 'script-top-categories', get_template_directory_uri() . '/js/top-nav.js', array ( 'jquery' ), 1.0, true);
// Appel du CSS du header et des menus
wp_enqueue_style( 'css-header-nav', get_template_directory_uri() . '/layouts/header-nav.css',false,'1.1','all');


// Ajout d'une barre de recherche dans le menu top-nav
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if($args->theme_location == 'Top-compte'){
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();
    
        $items .= '<li class="navbar-search">' . $searchform . '</li>';    
    }
    return $items;
}