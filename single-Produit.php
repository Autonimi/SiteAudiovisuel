<?php get_header(); ?>
<h1>SINGLE.php</h1>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article id="container" class="produit">
      <div id="left">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <div id="right">
        <h1 class="title">
          <?php the_title(); ?>
        </h1>
        <p id="prix"><?php the_field('prix'); ?>€</p>
        <p><?php the_terms( $post->ID, 'type', '' ); ?></p>
        <div class="content">
        <h2>DESCRIPTION</h2>
          <?php the_content(); ?>
        </div>
        <div class="caracteristiques">
        <h2>CARACTERISTIQUES</h2>
          <?php the_field('caracteristiques'); ?>
          </div>
          <div class="achatConfig">
          <span>Quantité</span><input type="button" id="minus" class="boutons" value="-"><input type="text" disabled="disabled" id="nombreProduit" value='1'><input type="button" id="plus" class="boutons" value="+"><input type="button" value="Acheter"><input type="button" value="Louer">
          </div>
      </div>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>