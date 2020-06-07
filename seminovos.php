<?php
/**
 * Template Name: seminovos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="seminovos">
  <div class="container">
    <div class="title-header grey">
      <h2>Seminovos</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="filter">
      <form>
        <div class="filter-inputs">
          <input type="text" name="nome" placeholder="Qual carro?" />
          <input type="text" name="marca" placeholder="Marca" />
          <input type="text" name="modelo" placeholder="Modelo" />
          <input type="number" name="ano" placeholder="Ano" />
        </div>

        <div class="filter-preco">
          <span>Valor</span>

          <div class="filter-preco-control">
            <span class="control-line"></span>
            <span class="control-dot"></span>
          </div>

          <div class="control-values">
            <span>R$25.000</span>
            <span>R$500.000</span>
          </div>
        </div>

        <button type="submit">Pesquisar</button>
      </form>
    </div>

    <div class="seminovos-wrapper">
      <?php wp_reset_query(); query_posts( array( 'post_type' => 'seminovo', 'posts_per_page' => '9' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <a href="<?=the_permalink()?>" class="carrossel-item carro-item">
        <div class="carro-item-img">
          <img src="<?=the_field('imagem_destaque')?>" alt="<?=the_title()?>" />
        </div>

        <div class="carro-item-txt">
          <div class="carro-item-info">
            <strong><?=the_title()?></strong>
            <span><?=the_field('ano')?> | <?=the_field('km')?> Km</span>
          </div>

          <div class="carro-item-preco">
            <strong>R$<?=the_field('valor')?></strong>
          </div>
        </div>
      </a>

      <?php endwhile; ?>
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php get_footer();