<?php get_header(); ?>
<h1>ARCHIVE-PRODUIT bon site.php</h1>
<div class="Produits">
  <div id="myBigCarousel" class="owl-carousel owl-theme">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="produit">
            <div>
              <?php the_post_thumbnail( 'thumbnail' ); ?>
</div>
            <p class="titles">
              <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
              </a>
            </p>
            <div class="categorielinksbox">
              <p class=".categorielinks">
                <?php the_terms( $post->ID, 'type', '' ); ?><br>
              <p>
            </div>
            <p class="prix"><?php the_field('prix'); ?>€</p> 
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>