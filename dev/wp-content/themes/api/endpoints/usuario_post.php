<?php

function api_usuario_post() {
  $usuario = array(
    'nome' => 'José Cleiton',
    'email' => 'jose_cleiton@hotmail.com'
  );
  return  rest_ensure_response($usuario);
}

function registrar_api_usuario_post(){
  register_rest_route('api', '/usuario', array(
    array(
      'methods' => WP_REST_Server::CREATABLE,
      'callback' => 'api_usuario_post',
    ),
  ));
};



?>
