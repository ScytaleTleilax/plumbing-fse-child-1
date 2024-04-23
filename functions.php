<?php

/**
 * plumbing-fse-child Theme functions and definitions
 *
 * @link https://github.com/ScytaleTleilax/plumbing-fse-child-1
 *
 * @package WordPress
 * @subpackage Plumbing_FSE_Child
 */


if (!function_exists('plumbing_fse_child_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     * @return void
     */
    function plumbing_fse_child_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;

add_action('after_setup_theme', 'plumbing_fse_child_support');

if (!function_exists('plumbing_fse_child_enqueue_scripts')) :

    /**
     * Enqueue custom styles.
     * @return void
     */
    function plumbing_fse_child_enqueue_scripts()
    {
        // Enqueue CSS
        wp_register_style(
            'plumbing_fse_child-style',
            get_stylesheet_directory_uri() . '/assets/css/custom-style.css',
            array(),
            '',
            false
        );
        wp_enqueue_style('plumbing_fse_child-style');


        // Enqueue JavaScript
        wp_register_script(
            'plumbing_fse_child-scripts',
            get_stylesheet_directory_uri() . '/assets/js/custom_scripts.js',
            array(),
            '', // Version
            true // Load in footer
        );
        wp_enqueue_script('plumbing_fse_child-scripts');
    }

    // Hook the combined function to the appropriate action
endif;

add_action('wp_enqueue_scripts', 'plumbing_fse_child_enqueue_scripts');