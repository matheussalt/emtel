<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <address class="contato-footer">
      <h3>Contato:</h3>

      <div>
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

        <a href="https://goo.gl/maps/xd443Fu6KqHdy8tZ7" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>

          <span>Avenida Pastor Anselmo Silvestre 1111, Fernão Dias, BH-MG</span>
        </a>
      </div>
    </address>

    <div class="newsletter">
      <h3>Newsletter</h3>
      <?php echo do_shortcode('[contact-form-7 id="26" title="Newsletter"]'); ?>
    </div>

    <div class="links-rapidos">
      <h3>Quick link:</h3>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'QuickLinks', 'menu_class' => 'quick-link' ) ); ?>
    </div>

    <div class="social-footer">
      <a href="https://instagram.com/seminovosemtel" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>

      <a href="https://www.youtube.com/channel/UCN5ITdDIll0yI_wJSVsaPdA?view_as=subscriber" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#youtube"></use>
        </svg>
      </a>

      <a href="https://www.linkedin.com/company/emtel-seminovos/?viewAsMember=true" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#linkedin"></use>
        </svg>
      </a>

      <a href="https://www.facebook.com/pages/category/Automotive-Store/Emtel-Seminovos-108692770797136/"
        target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#facebook"></use>
        </svg>
      </a>
    </div>
  </div>

  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.048089502199!2d-43.918957685086276!3d-19.88019118663163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69a58168dadf1%3A0xc062c7d3e0dce594!2sAv.%20Pastor%20Anselmo%20Silvestre%2C%201111%20-%20Uni%C3%A3o%2C%20Belo%20Horizonte%20-%20MG%2C%2031170-710!5e0!3m2!1spt-BR!2sbr!4v1595256260448!5m2!1spt-BR!2sbr"
      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

  <div class="rodape">
    <div class="container">
      <p>Todos os direitos reservados a Emtel. Desenvolvido por <a href="https://agenciasalt.com.br"
          target="_blank">Agência Salt</a>.
      </p>

      <a class="salt-footer" href="https://agenciasalt.com.br" target="_blank">
        <img src="<?=get_template_directory_URI()?>/img/src/salt.svg" alt="Agência Salt" />
      </a>
    </div>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>