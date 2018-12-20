<?php get_header(); ?>
<h1>ARCHIVE-PRODUIT.php</h1>
<div class="Produits">
  <div id="myBigCarousel" class="owl-carousel owl-theme">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <article class="produit bordure">
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
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>