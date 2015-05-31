<?php

add_action('init', 'wpbase_register_menus');

function wpbase_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'wpbase'),
        'footer-menu' => __('Footer Menu', 'wpbase'),
        'extra-menu' => __('Extra Menu', 'wpbase')
    ));
}

