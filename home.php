<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/background.jpg');
}
</style>

<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 

$titulo = get_sub_field('titulo');
$descricao = get_sub_field('descricao');
$link = get_sub_field('link');
$imagem = get_sub_field('imagem');
?>

<section class="banner">
  <div class="container">
    <div class="destaque">
      <div class="destaque-txt">
        <h1><?=$titulo?></h1>
        <p><?=$descricao?></p>
        <a href="<?=$link?>" class="btn-cta">Ver mais</a>
      </div>

      <div class="destaque-img">
        <img src="<?=$imagem?>" alt="Imagem de destaque" />
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<div class="filter filter-home">
  <div class="container">
    <form>
      <div class="filter-inputs">
        <input id="nome" type="text" name="nome" placeholder="Qual carro?" />
        <input id="marca" type="text" name="marca" placeholder="Marca" />
        <input id="modelo" type="text" name="modelo" placeholder="Modelo" />
        <input id="ano" type="number" min="1970" max="2040" name="ano" placeholder="Ano" />
      </div>

      <div class="filter-preco">
        <span>Valor</span>

        <div class="filter-preco-control">
          <input id="valor" type="range" id="vol" name="vol" min="0" max="100">
        </div>

        <div class="control-values">
          <span>R$ 25.000,00</span>
          <span>R$ 500.000,00</span>
        </div>
      </div>

      <button type="submit">Pesquisar</button>
    </form>
  </div>
</div>

<section class="seminovos-home">
  <div class="container">
    <div class="title-header">
      <h2>Seminovos</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="carrossel">
      <button class="carrossel-left">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>

      <div class="carrossel-wrapper">

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

      <button class="carrossel-right">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>
    </div>
  </div>
</section>

<section class="oportunidades-home">
  <div class="container">
    <div class="title-header red">
      <h2>Oportunidades 0km</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="carrossel">
      <button class="carrossel-left">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>

      <div class="carrossel-wrapper">

        <?php wp_reset_query(); query_posts( array( 'post_type' => 'novo', 'posts_per_page' => '9' ) );  ?>
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

      <button class="carrossel-right">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>
    </div>
  </div>
</section>

<section class="parallax">
  <div class="container">
    <h2>Conheça os seminovos emtel</h2>
    <p>"Comercializando veículos nacionais e importados, de todas as marcas, modelos, e com 100% de garantia de
      procedência, a Emtel Seminovos está sempre renovando a frota de carros para oferecer as melhores opções e os
      melhores negócios."</p>
    <a class="btn-cta" href="<?=site_url()?>/quem-somos">Ver mais</a>
  </div>
</section>

<section class="blog-home">
  <div class="container">
    <div class="title-header">
      <h2>Blog</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="carrossel">
      <button class="carrossel-left">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>

      <div class="carrossel-wrapper">
        <?php wp_reset_query(); query_posts( array( 'post_type' => 'post', 'posts_per_page' => '9' ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?=the_permalink()?>" class="carrossel-item blog-item">
          <div class="blog-item-img">
            <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
          </div>

          <div class="blog-item-txt">
            <h3><?=the_title()?></h3>
            <p><?=custom_excerpt2(80)?></p>
          </div>
        </a>

        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
      </div>

      <button class="carrossel-right">
        <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" />
      </button>
    </div>
  </div>
</section>

<?php get_footer();