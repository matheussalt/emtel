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
            <span>R$25.000</span>
            <span>R$500.000</span>
          </div>
        </div>

        <button type="submit">Pesquisar</button>
      </form>
    </div>

    <div class="seminovos-wrapper">
      <?php 
      $nome = $_GET["nome"];
      $marca = $_GET["marca"];
      $modelo = $_GET["modelo"];
      $ano = $_GET["ano"];
      $valor = $_GET["valor"];

      $metaArray = array('relation' => 'AND');

      if (isset($nome) && !empty($nome)) {
        array_push($metaArray, array(
          'key' => 'nome',
          'value' => $nome,
          'compare' => '='
        ));
      }
      
      if (isset($marca) && !empty($marca)) {
        array_push($metaArray, array(
          'key' => 'marca',
          'value' => $marca,
          'compare' => '='
        ));
      }
      
      if (isset($modelo) && !empty($modelo)) {
        array_push($metaArray, array(
          'key' => 'modelo',
          'value' => $modelo,
          'compare' => '='
        ));
      }
      
      if (isset($ano) && !empty($ano)) {
        array_push($metaArray, array(
          'key' => 'ano',
          'value' => $ano,
          'compare' => '='
        ));
      }
      
      if (isset($valor) && !empty($valor)) {
        array_push($metaArray, array(
          'key' => 'valor',
          'value' => $valor + 10000,
          'compare' => '<'
        ));

        array_push($metaArray, array(
          'key' => 'valor',
          'value' => $valor - 10000,
          'compare' => '>'
        ));
      }

      $query = array( 
        'post_type' => 'seminovo', 
        'posts_per_page' => '9',
        'meta_query' => $metaArray
      ); 
      ?>
      <?php wp_reset_query(); query_posts( $query );  ?>
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