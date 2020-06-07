<section class="blog-interna">
  <div class="container">
    <div class="title-header">
      <h2>Blog</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="blog-content-wrapper">
      <div class="blog-content">
        <h1><?=the_title()?></h1>

        <img class="blog-content-img" src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

        <div>
          <?=the_content()?>
        </div>

        <div class="comentarios_blog">
          <div class="comentarios">
            <div class="fb-comments" data-colorscheme="light" data-href="<?php the_permalink(); ?>" data-num-posts="5"
              mobile="false"></div>
          </div>
        </div>
      </div>

      <aside class="barra-blog">
        <form class="barra-search" action="<?=site_url()?>" method="get">
          <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
        </form>

        <ul class="barra-categorias">
          <h3>Categorias</h3>

          <?php 
            $args = array(
            'show_option_all'    => '',
            'orderby'            => 'name',
            'order'              => 'ASC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'child_of'           => 7,
            'title_li'           => __( '' )
              );
              wp_list_categories( $args ); 
          ?>
        </ul>
      </aside>
    </div>
  </div>
</section>

<section class="blog-home">
  <div class="container">
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
            <p><?=the_content()?></p>
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