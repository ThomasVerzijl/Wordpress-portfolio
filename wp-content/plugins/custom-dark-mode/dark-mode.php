<?php
/*
Plugin Name: dark-mode
Description: A plugin to switch between light and dark mode.
Version: 1.0
Author: Thomas Verzijl
*/


function mijn_thema_assets()
{
    //load js
    wp_enqueue_script(
        'custom-dark-mode',
        plugin_dir_url(__FILE__) . 'dark-mode.js',
        array(),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'mijn_thema_assets');
