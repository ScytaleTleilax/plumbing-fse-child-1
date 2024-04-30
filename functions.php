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

endif;

add_action('wp_enqueue_scripts', 'plumbing_fse_child_enqueue_scripts');

function create_product_category()
{
    try {
        $cats = array(
            array('thumb' => '/assets/img/categ_icons/central-heating.png', 'name' => 'centrale-termice-in-condensare', 'description' => 'descriere categorie centrale', 'slug' => 'centrale-termice-in-condensare-BAXI', 'parent_categ_id' => ''),
            array('thumb' => '/assets/img/categ_icons/central-heating.png', 'name' => 'boilere', 'description' => 'descriere categorie centrale', 'slug' => 'boilere', 'parent_categ_id' => 0),
            array('thumb' => '/assets/img/categ_icons/central-heating.png', 'name' => 'radiatoare', 'description' => 'descriere categorie centrale', 'slug' => 'radiatoare', 'parent_categ_id' => 0),
        );

        foreach ($cats as $data) {
            $thumb_id = get_attachment_id_from_url($data['thumb']);

            $cat_args = array(
                'description' => $data['description'],
                'slug' => $data['slug'],
                'parent' => $data['parent_categ_id']
            );

            $cat_id = wp_insert_term($data['name'], 'product_cat', $cat_args);
            var_dump($cat_id);

            if (!is_wp_error($cat_id) && isset($cat_id['term_id'])) {
                // Log success message
                error_log('Category created successfully. Term ID: ' . $cat_id['term_id']);

                // Set thumbnail for category
                update_term_meta($cat_id['term_id'], 'thumbnail_id', $thumb_id);

                // Log thumbnail assignment
                error_log('Thumbnail assigned to category. Thumbnail ID: ' . $thumb_id);
            } else {
                // Log error message
                if (is_wp_error($cat_id)) {
                    error_log('Error creating category: ' . $cat_id->get_error_message());
                } else {
                    error_log('Unknown error occurred while creating category.');
                }
            }
        }
    } catch (Exception $e) {
        // Log any exceptions
        error_log('Exception caught: ' . $e->getMessage());
    }
}

// Function to get attachment ID from URL
function get_attachment_id_from_url($url)
{
    $attachment_id = 0;
    $attachment_url = esc_url($url);
    $attachment_id = attachment_url_to_postid($attachment_url);
    return $attachment_id;
}

create_product_category();
