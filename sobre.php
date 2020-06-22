<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="sobre">
  <div class="container">
    <div class="title-header">
      <h2>Quem somos</h2>

      <div class="title-decoration"></div>
    </div>

    <div class="sobre-content">
      <p>A Emtel Seminovos surgiu com o objetivo de comercializar veículos, visando a qualidade, a
        procedência e a satisfação de seus clientes!</p>
      <p>Localizada em Belo Horizonte, e com mais de 26 anos de mercado, a Emtel Veículos vem se
        destacando no mercado de seminovos devido ao comprometimento com valores
        fundamentais, como seriedade, honestidade, respeito, segurança e confiança.</p>
      <p>Comercializando veículos com ótimos preços e condições de pagamento – incluindo
        financiamento, taxa de juros reduzidas e parcelas acessíveis –, a Emtel Seminovos trabalha
        para que você possa realizar o seu sonho de ter um carro novo.</p>
      <p>Comercializando veículos nacionais e importados, de todas as marcas, modelos, e com 100%
        de garantia de procedência, a Emtel Seminovos está sempre renovando a frota de carros para
        oferecer as melhores opções e os melhores negócios.</p>
      <p>Na Emtel Seminovos, o seu carro usado passa por uma avaliação justa no processo de troca,
        garantindo uma negociação assertiva e transparente. A empresa, também, oferece um
        atendimento personalizado, que inclui serviços de despachante e cotação de seguros,
        garantindo maior facilidade para você.</p>
      <p>Compre o seu carro na Emtel Seminovos, aqui você realiza o seu sonho sobre quatro rodas!</p>
    </div>

    <div class="social">
      <a href="https://instagram.com/seminovosemtel" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>

      <a href="https://youtube.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#youtube"></use>
        </svg>
      </a>

      <a href="https://twitter.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#twitter"></use>
        </svg>
      </a>

      <a href="https://facebook.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#facebook"></use>
        </svg>
      </a>
    </div>

    <img class="img-sobre" src="<?=get_template_directory_URI()?>/img/src/sobre.jpeg" alt="Sobre" />
    <img class="img-sobre" src="<?=get_template_directory_URI()?>/img/src/sobre2.jpeg" alt="Sobre" />
  </div>
</section>

<?php get_footer();