<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="contato">
  <div class="container">
    <div class="title-header">
      <h2>Contato</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="contato-dados">
      <img src="<?=get_template_directory_URI()?>/img/src/emtel_contato.jpeg" alt="Emtel" />

      <address>
        <a href="tel:+553134869292" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#tel"></use>
          </svg>

          <span>+55 31 3486-9292</span>
        </a>

        <a href="https://wa.me/5531993070185" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#whatsapp"></use>
          </svg>

          <span>+55 31 9 99307-0185</span>
        </a>

        <a href="mailto:contato@emtelseminovos.com.br" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>

          <span>contato@emtelseminovos.com.br</span>
        </a>

        <a href="https://goo.gl/maps/QJd48BC8uPyXmfKq9" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>

          <span>Avenida Pastor Anselmo Silvestre 1111, Fernão Dias, BH-MG</span>
        </a>
      </address>
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

<?php get_footer();