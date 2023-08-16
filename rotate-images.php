<?php
/**
 * Plugin Name: Image Rotator
 * Plugin URI: https://sc-fa.com
 * Description: A simple plugin to rotate images by 90 degrees. Shortcode: [rotate_images]
 * Version: 1.0
 * Author: steve cooley
 * Author URI: https://mastodon.social/@stevecooley
 **/

function enqueue_rotate_script() {
    wp_enqueue_script('rotate-images', plugin_dir_url( __FILE__ ) . 'rotate-images.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_rotate_script');

function rotate_images_shortcode() {
    ob_start(); ?>
    <button id="rotate-button">Rotate Images</button>
    <style>
        img {
            max-width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        table td {
            min-width: 100px;
            min-height: 100px;
            overflow: hidden;
        }
    </style>
    <?php
    return ob_get_clean();
}

add_shortcode('rotate_images', 'rotate_images_shortcode');
