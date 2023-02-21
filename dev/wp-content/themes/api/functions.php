<?php

$template_diretorio = get_template_directory();

require_once($template_diretorio . '/custom-post-type/produto.php');
require_once($template_diretorio . '/custom-post-type/transacao.php');
require_once($template_diretorio . '/endpoints/usuario_post.php');
function adicionar_slick_carousel() {
  wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
  wp_enqueue_style('slick-carousel-theme', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'adicionar_slick_carousel');

?>
<script>
  jQuery(document).ready(function($) {
    $('.slick-carousel').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: true
    });
  });
</script>


