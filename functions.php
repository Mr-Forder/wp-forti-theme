<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;


//ADD CUSTOM CF SECTION TO BACKEND
add_action('carbon_fields_register_fields', 'forti_crb_attach_hero_options');
function forti_crb_attach_hero_options()
{
    Container::make('theme_options', __('Forti Hero Options', 'crb'))
        ->set_icon('dashicons-cover-image')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Slide 1')),
            Field::make('text', 'slide_1_title', __('Hero Slide 1 Title'))->set_attribute('placeholder', '...')->set_help_text('Enter title for slide 1 of the hero section')->set_default_value('Slide 1 Title'),
            Field::make('textarea', 'slide_1_text_content', __('Hero Slide 1 Text Content'))->set_attribute('placeholder', '...')->set_help_text('Enter text content for slide 1 of the hero section')->set_default_value('Slide 1 Text Content'),
            Field::make('image', 'hero_img_1', __('Hero Slide 1 Image'))->set_help_text('Add an image for slide 1 of the hero section')->set_default_value(get_template_directory_uri() . '/assets/images/slide_1_default.jpg')->set_value_type('url'),
            Field::make('separator', 'crb_separator_2', __('Slide 2')),
            Field::make('text', 'slide_2_title', __('Hero Slide 2 Title'))->set_attribute('placeholder', '...')->set_help_text('Enter title for slide 2 of the hero section')->set_default_value('Slide 2 Title'),
            Field::make('textarea', 'slide_2_text_content', __('Hero Slide 2 Text Content'))->set_attribute('placeholder', '...')->set_help_text('Enter text content for slide 2 of the hero section')->set_default_value('Slide 2 Text Content'),
            Field::make('image', 'hero_img_2', __('Hero Slide 2 Image'))->set_help_text('Add an image for slide 2 of the hero section')->set_default_value(get_template_directory_uri() . '/assets/images/slide_2_default.jpg')->set_value_type('url'),
            Field::make('separator', 'crb_separator_3', __('Slide 3')),
            Field::make('text', 'slide_3_title', __('Hero Slide 3 Title'))->set_attribute('placeholder', '...')->set_help_text('Enter title for slide 3 of the hero section')->set_default_value('Slide 3 Title'),
            Field::make('textarea', 'slide_3_text_content', __('Hero Slide 3 Text Content'))->set_attribute('placeholder', '...')->set_help_text('Enter text content for slide 3 of the hero section')->set_default_value('Slide 3 Text Content'),
            Field::make('image', 'hero_img_3', __('Hero Slide 3 Image'))->set_help_text('Add an image for slide 3 of the hero section')->set_default_value(get_template_directory_uri() . '/assets/images/slide_3_default.jpg')->set_value_type('url'),
            Field::make('separator', 'crb_separator_4', __('Slide 3')),
            Field::make('text', 'slide_4_title', __('Hero Slide 4 Title'))->set_attribute('placeholder', '...')->set_help_text('Enter title for slide 4 of the hero section')->set_default_value('Slide 4 Title'),
            Field::make('textarea', 'slide_4_text_content', __('Hero Slide 4 Text Content'))->set_attribute('placeholder', '...')->set_help_text('Enter text content for slide 4 of the hero section')->set_default_value('Slide 4 Text Content'),
            Field::make('image', 'hero_img_4', __('Hero Slide 4 Image'))->set_help_text('Add an image for slide 4 of the hero section')->set_default_value(get_template_directory_uri() . '/assets/images/slide_4_default.jpg')->set_value_type('url'),

        ));
}



add_action('carbon_fields_register_fields', 'forti_crb_attach_Colour_options');
function forti_crb_attach_Colour_options()
{
    Container::make('theme_options', __('Forti Colour Options', 'crb'))
        ->set_icon('dashicons-color-picker')
        ->add_fields(array(
            Field::make('separator', 'crb_separator_1', __('Theme Colour Options')),
            Field::make('color', 'forti_primary', 'Theme Primary Colour')
                ->set_alpha_enabled(true)->set_help_text('Select the primary colour for your site.')->set_default_value('#0D0E13'),
            Field::make('color', 'forti_secondary', 'Theme Secondary Colour')
                ->set_alpha_enabled(true)->set_help_text('Select the secondary colour for your site. This colour will mainly be used to display the site grid.')->set_default_value('#BDBDB7'),
            Field::make('color', 'forti_accent', 'Theme Accent Colour')
                ->set_alpha_enabled(true)->set_help_text('Select the accent colour for your site.')->set_default_value('#807183'),
            Field::make('color', 'forti_font', 'Theme Font Colour')
                ->set_alpha_enabled(true)->set_help_text('Select the main font colour for your site.')->set_default_value('#E4E0DB'),


        ));
}





add_action('after_setup_theme', 'forti_crb_load');
function forti_crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}




//UTILITY FUNCTION TO RETRIEVE CF DATA
function get_forti_options($name)
{
    return carbon_get_theme_option($name);
}

function get_forti_post_meta($name)
{
    return carbon_get_the_post_meta($name);
}



function fortitheme_theme_support()
{
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fortitheme_theme_support');



function fortitheme_menus()
{
    $locations = array(
        'primary' => 'Desktop primary menu',

    );
    //register em
    register_nav_menus($locations);
}

add_action('init', 'fortitheme_menus');










function fortitheme_register_styles()
{
    //call wp function - pass in name of stylesheet, path to stylesheet, dependancy array, version
    wp_enqueue_style('fortitheme-style', get_template_directory_uri() . "/style.css", array(), 1);

    wp_enqueue_style('fortitheme-fontawesome', get_template_directory_uri() . "/assets/fonts/font-awesome.min.css", array());
    wp_enqueue_style('fortitheme-novecento', get_template_directory_uri() . "/assets/fonts/novecento-font/novecento-font.css", array());
}
//when wp executes wp_enqueue_scripts, also execute my function, fortitheme_register_styles
add_action('wp_enqueue_scripts', 'fortitheme_register_styles');




function fortitheme_register_scripts()
{
    //name, path, dependancy array, version number, and wether we want it in the footer (yes, we do - but it's set to false by default to specify it)
    wp_enqueue_script('fortitheme-jquery', get_template_directory_uri() . "/assets/js/jquery-1.11.1.min.js", array(), '1.11.1', true);
    wp_enqueue_script('fortitheme-plugins', get_template_directory_uri() . "/assets/js/plugins.js", array('fortitheme-jquery'), true);
    wp_enqueue_script('fortitheme-app', get_template_directory_uri() . "/assets/js/app.js", array('fortitheme-jquery'), true);
    wp_enqueue_script('fortitheme-hero', get_template_directory_uri() . "/assets/js/hero.js", array('fortitheme-jquery'), true);
}
add_action('wp_enqueue_scripts', 'fortitheme_register_scripts');

function fortitheme_widget_areas()
{

    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer 1',
            'id' => 'footer-1',
            'description' => 'Footer Menu Widget Area',
        )

    );
    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer 2',
            'id' => 'footer-2',
            'description' => 'Footer Menu Widget Area',
        )

    );
    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer 3',
            'id' => 'footer-3',
            'description' => 'Footer Menu Widget Area',
        )

    );
};

//when widgets init, run fortitheme_widget_areas to register sidebar widget areas
add_action('widgets_init', 'fortitheme_widget_areas');



// Change the default excerpt length to 20 words.
function fortitheme_excerpt_length($length)
{
    $length = 20;
    return $length;
}
add_filter('excerpt_length', 'fortitheme_excerpt_length', PHP_INT_MAX);
