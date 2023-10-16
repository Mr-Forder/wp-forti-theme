<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <title> <?php echo get_bloginfo('name') ?></title>
    <style>
        :root {
            --background-color: <?php echo get_forti_options('forti_primary') ?>;
            --border-color: <?php echo get_forti_options('forti_secondary') ?>;
            --accent-color: <?php echo get_forti_options('forti_accent') ?>;
            --font-color: <?php echo get_forti_options('forti_font') ?>;

        }

        hero>article:first-child>.article-image-section {
            background-image: url("<?php echo get_forti_options('hero_img_1') ?>");
        }

        hero>article:nth-child(2)>.article-image-section {
            background-image: url("<?php echo get_forti_options('hero_img_2') ?>");
        }

        hero>article:nth-child(3)>.article-image-section {
            background-image: url("<?php echo get_forti_options('hero_img_3') ?>");
        }

        hero>article:nth-child(4)>.article-image-section {
            background-image: url("<?php echo get_forti_options('hero_img_4') ?>");
        }
    </style>

    <?php
    wp_head();
    ?>

</head>


<body style="background-color: var(--background-color);">

    <div id="site-content" class="fade">

        <header class="site-header">


            <div class="nav-container">





                <div class="branding">

                    <?php

                    if (function_exists('the_custom_logo')) {

                        $custom_logo_id = get_theme_mod('custom_logo');

                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <a href="<?php echo site_url(); ?>">
                        <img src=" <?php echo $logo[0] ?>" alt="" class="logo">
                    </a>
                </div>
                <div class="nav-menu">
                    <nav class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="menu">%3$s</ul>'

                            )
                        );
                        ?>

                    </nav>
                    <nav class="mobile-navigation"></nav>
                </div>
            </div>

            <div class="container">




            </div>
        </header> <!-- .site-header -->