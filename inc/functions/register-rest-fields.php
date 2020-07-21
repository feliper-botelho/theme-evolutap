<?php

add_action('rest_api_init', 'register_rest_produtos'); 
function register_rest_produtos()
{
    register_rest_field(
        array('produtos'),
        'thumbnail',
        array(
            'get_callback'    => 'get_rest_prod_thumb',
            'update_callback' => null,
            'schema'          => null,
        )
    );

}
function get_rest_prod_thumb($object)
{
    if ($object['id']) {
        return get_field('imagem', $object['id']) ;
    }
    return false;
}
