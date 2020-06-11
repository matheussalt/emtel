<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>


<section class="blog">
  <div class="container">
    <div class="title-header">
      <h2>Blog</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="blog-wrapper">
      <?php wp_reset_query(); query_posts( array( 'post_type' => 'post', 'posts_per_page' => '9' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <a href="<?=the_permalink()?>" class="blog-item">
        <div class="blog-item-img">
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
        </div>

        <div class="blog-item-txt">
          <h3><?=the_title()?></h3>
          <p><?=the_content()?></p>
        </div>
      </a>

      <?php endwhile; ?>
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<section class="parallax">
  <div class="container">
    <h2>Conheça os seminovos emtel</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae massa quis mi rutrum dictum ut non libero.
      Aenean sed lobortis nibh, sit amet fringilla est. </p>
    <a class="btn-cta" href="<?=site_url()?>/seminovos">Ver mais</a>
  </div>
</section>

<?php get_footer();