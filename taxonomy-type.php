<?php get_header(); ?>


<?php
// Récupérer la taxonomie dans une variable
$taxonomy_type = 'type';
$taxonomy_prix = 'prix';
// Variable avec le get_terms
$tax_terms_type = get_terms($taxonomy_type, array('hide_empty' => false));
$tax_terms_prix = get_terms($taxonomy_prix, array('hide_empty' => false));
?>

<select>
<?php
// La boucle d’affichage
foreach ($tax_terms_type as $tax_term_type) {
echo '<option value=>' . '<a href="' . esc_attr(get_term_link($tax_term_type, $taxonomy_type)) . '" title="' . sprintf( __( "Voir tous les … in %s" ), $tax_term_type->name ) . '" ' . '>' . $tax_term_type->name.'</a> </li>';
}
?>
</select>

<select>
<?php
// La boucle d’affichage
foreach ($tax_terms_prix as $tax_term_prix) {
echo '<option value=>' . '<a href="' . esc_attr(get_term_link($tax_term_prix, $taxonomy_prix)) . '" title="' . sprintf( __( "Voir tous les … in %s" ), $tax_term_prix->name ) . '" ' . '>' . $tax_term_prix->name.'</a> </li>';
}
?>
</select>


<h1>TAXONOMY-TYPE.php</h1>




<div class="produits">
  <p class="heading">
    Type : <?php single_term_title(); ?>
  </p>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="produit box">
            <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <div><?php the_post_thumbnail( 'thumbnail' ); ?></div>
            <div><?php the_terms( $post->ID, 'type', '' ); ?></div>
            <div><p id="prix"><?php the_field('prix'); ?>€</p></div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>