<div class="slick-carousel">
  <?php exibir_categorias_mercado_livre(); ?>
</div>

<?php wp_head(  ); ?>


  <?php

function get_mercado_livre_categories() {
  $response = wp_remote_get( 'https://api.mercadolibre.com/sites/MLB/categories' );

  if ( is_wp_error( $response ) ) {
    return false;
  }

  $body = wp_remote_retrieve_body( $response );
  $data = json_decode( $body );

  return $data;
}


function exibir_categorias_mercado_livre() {
  $categories = get_mercado_livre_categories();
  if ( $categories ) {
    echo '<div class="slick-carousel">';
    foreach ( $categories as $category ) {
      echo '<div>' . esc_html( $category->name ) . '</div>';
    }
    echo '</div>';
  }
}



  ?>



<?php wp_footer(  ); ?>