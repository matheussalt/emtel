<section class="carro-interna">
  <div class="container">
    <div class="title-header">
      <h2>Seminovos</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="carro-wrapper">
      <div class="carro-dados">
        <h2><?=the_title()?></h2>
        <p><span><?=the_field('ano')?></span> | <span><?=the_field('km')?> Km</span></p>

        <?php if( have_rows('imagens') ): ?>
        <?php while( have_rows('imagens') ): the_row(); 

        $imagem_1 = get_sub_field('imagem_1') ? get_sub_field('imagem_1') : '';
        $imagem_2 = get_sub_field('imagem_2') ? get_sub_field('imagem_2') : '';
        $imagem_3 = get_sub_field('imagem_3') ? get_sub_field('imagem_3') : '';
        $imagem_4 = get_sub_field('imagem_4') ? get_sub_field('imagem_4') : '';
        ?>

        <div class="carro-galery">
          <div class="carro-galery-destaque">
            <img src="<?=$imagem_1?>" />
          </div>

          <div class="carro-galery-imagens">
            <button data-value="<?=$imagem_1?>">
              <img src="<?=$imagem_1?>" />
            </button>

            <button data-value="<?=$imagem_2?>">
              <img src="<?=$imagem_2?>" />
            </button>

            <button data-value="<?=$imagem_3?>">
              <img src="<?=$imagem_3?>" />
            </button>

            <button data-value="<?=$imagem_4?>">
              <img src="<?=$imagem_4?>" />
            </button>
          </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="carro-info">
        <div class="carro-info-preco">
          <strong>R$<?=the_field('valor')?></strong>
        </div>

        <div class="carro-info-descricao">
          <?=the_content()?>
        </div>

        <div class="proposta">
          <h3>Proposta:</h3>

          <?php echo do_shortcode('[contact-form-7 id="29" title="Proposta"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="filter">
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

<section class="seminovos-more">
  <div class="container">
    <div class="title-header grey">
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

<section class="parallax">
  <div class="container">
    <h2>Conheça os seminovos emtel</h2>
    <p>"Comercializando veículos nacionais e importados, de todas as marcas, modelos, e com 100% de garantia de
      procedência, a Emtel Seminovos está sempre renovando a frota de carros para oferecer as melhores opções e os
      melhores negócios."</p>
    <a class="btn-cta" href="<?=site_url()?>/seminovos">Ver mais</a>
  </div>
</section>