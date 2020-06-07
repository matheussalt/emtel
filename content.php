<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single() && get_post_type() == 'post') { ?>

<? include 'blog_content.php' ?>

<? } else if(is_single() && get_post_type() == 'seminovo') { ?>

<? include 'carro_interna.php' ?>

<? } else if(is_single() && get_post_type() == 'novo') { ?>

<? include 'carro_interna.php' ?>

<? } else { ?>

<div class="carrossel-item blog-item">
  <div class="blog-item-img">
    <img src="" alt="<?=the_title()?>" />
  </div>

  <div class="blog-item-txt">
    <h3><?=the_title()?></h3>
    <p><?=custom_excerpt2(100)?></p>
  </div>
</div>

<? } ?>