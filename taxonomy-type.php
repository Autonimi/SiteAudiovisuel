<?php get_header(); ?>

<h1>TAXONOMY-TYPE.php</h1>

<?php
// Récupérer la taxonomie dans une variable
$taxonomy_type = 'type';
// Variable avec le get_terms
$tax_terms_type = get_terms($taxonomy_type, array('hide_empty' => false));
$pattern='~^[\p{L}\p{Z}]+$~u'; //Uniquement ceux qui commence par une lettre
?>

<form method="post" action="http://localhost/wordpress/type/ <?php echo $_POST['type']; ?>+<?php echo $_POST['prix']; ?>">
<select name="prix" id="prix">
<?php
// La boucle d’affichage
foreach ($tax_terms_type as $tax_term_type) {
    $typename =  $tax_term_type->name;
    $success = preg_match($pattern,$typename);
    if(!$success){
        echo '<option value="'.$typename.'">'.$typename.'</option>';    }
}
?>

</select>

<select name="type" id="type">
<?php
// La boucle d’affichage
foreach ($tax_terms_type as $tax_term_type) {
    $typename =  $tax_term_type->name;
    $success = preg_match($pattern,$typename);
    if($success){
echo '<option value="'.$typename.'">'.$typename.'</option>';
    }
}
?>
</select>

<input type="submit" value="Rechercher"/>
</form>


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