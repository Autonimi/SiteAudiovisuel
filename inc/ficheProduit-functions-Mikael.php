<?php

add_action('init', 'autonimi_custom_post');


function autonimi_custom_post()
{
/* notre code PHP pour rajouter les custom post type */

//Création de Produits
register_post_type(
    'Produit',
    array(
      'label' => 'Produits',
      'labels' => array(
        'name' => 'Produits',
        'singular_name' => 'Produit',
        'all_items' => 'Tous les produits',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Éditer le produit',
        'new_item' => 'Nouveau produit',
        'view_item' => 'Voir le produit',
        'search_items' => 'Rechercher parmi les produits',
        'not_found' => 'Pas de produit trouvé',
        'not_found_in_trash'=> 'Pas de produit dans la corbeille'
        ),
      'public' => true,
      'capability_type' => 'post',
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'has_archive' => true
    )
  );
  
  //type de produits(casque,micro,caméra,appareil photo...)
  register_taxonomy(
    'type',
    'produit',
    array(
      'label' => 'Types',
      'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
      'all_items' => 'Tous les types',
      'edit_item' => 'Éditer le type',
      'view_item' => 'Voir le type',
      'update_item' => 'Mettre à jour le type',
      'add_new_item' => 'Ajouter un type',
      'new_item_name' => 'Nouveau type',
      'search_items' => 'Rechercher parmi les types',
      'popular_items' => 'Types les plus utilisés'
    ),
    'hierarchical' => true
    )
  );
  //Initialisation du type de produit
  register_taxonomy_for_object_type( 'type', 'produit' );

  

}