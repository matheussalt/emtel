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
      </div>
    </address>

    <div class="newsletter">
      <h3>Newsletter</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae massa quis mi rutrum dictum ut non libero.
        Aenean sed lobortis nibh, sit amet fringilla est. </p>
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
  </div>

  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.9404624252056!2d-43.96362168548923!3d-19.969005944679306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697f05e44fdcf%3A0x66b0096b32e0487!2sAg%C3%AAncia%20Salt%20-%20Design%20de%20Marcas%20em%20BH!5e0!3m2!1spt-BR!2sbr!4v1591470714323!5m2!1spt-BR!2sbr"
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