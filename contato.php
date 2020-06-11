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
      <img src="<?=get_template_directory_URI()?>/img/src/emtel_contato.jpg" alt="Emtel" />

      <address>
        <a href="tel:+553133333333" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#tel"></use>
          </svg>

          <span>+55 31 3333-3333</span>
        </a>

        <a href="https://wa.me/5531999999999" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#whatsapp"></use>
          </svg>

          <span>+55 31 9 9999-9999</span>
        </a>

        <a href="mailto:contato@email.com.br" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>

          <span>contato@email.com.br</span>
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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae massa quis mi rutrum dictum ut non libero.
      Aenean sed lobortis nibh, sit amet fringilla est. </p>
    <a class="btn-cta" href="<?=site_url()?>/seminovos">Ver mais</a>
  </div>
</section>

<?php get_footer();