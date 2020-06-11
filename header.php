<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <script>
    var baseURL = '<?=site_url()?>'
  </script>

</head>

<body>
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header">
    <div class="header-links">
      <div>
        <a href="mailto:emtel@emteltrans.com.br" class="header-email">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>
          <span>emtel@emteltrans.com.br</span>
        </a>

        <div class="header-links-wrapper">
          <a href="<?=site_url()?>/"><span>Seminovos</span></a>
          <a href="#"><span>Gestão de frotas</span></a>
          <a href="#"><span>Aluguel de carros</span></a>
        </div>
      </div>
    </div>

    <div class="header-wrapper">
      <a href="<?=site_url()?>" class="logo-header">
        <img src="<?=get_template_directory_URI()?>/img/src/logo.png" alt="Logotipo Emtel Seminovos" />
      </a>

      <div class="menu">
        <div class="menu-contatos">
          <div>
            <a href="tel:+5531999999999" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#tel"></use>
              </svg>

              <span>(31) 9999-9999</span>
            </a>

            <a href="" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#atendimento"></use>
              </svg>

              <span>Atendimento online</span>
            </a>
          </div>
        </div>

        <div class="menu-buttons">
          <div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>

            <form class="menu-search" action="<?=site_url()?>" method="get">
              <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
              <button type="submit">
                <svg width="32" height="32" viewBox="0 0 32 32">
                  <use xlink:href="#search"></use>
                </svg>
              </button>
            </form>

            <div class="menu-hamb"><span></span></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <style>
  .parallax .container {
    background-image: url('<?=get_template_directory_URI()?>/img/src/parallax.jpg');
  }
  </style>

  <?php if(!is_front_page()) { ?>
  <div class="empurra"></div>
  <?php } ?>