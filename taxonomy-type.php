<?php get_header(); ?>
<h1>TAXONOMY-TYPE.php</h1>
<div class="produits">
  <p class="heading">
    Type : <?php single_term_title(); ?>
  </p>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="produit box bordure">
            <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            <?php the_terms( $post->ID, 'type', '' ); ?><br>
            <p id="prix"><?php the_field('prix'); ?>€</p>
            <div class="content bordure">
            <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>