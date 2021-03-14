<?php
/**
 * Crowz Theme Customizer CSS
 *
 * @package Crowz
 */

function crowz_customize_css()
{
    ?>
         <style type="text/css">
             .home .site-header { background-image:url( <?php echo get_theme_mod('header_bg',
             'get_theme_file_uri("assets/images/placeholder.png"'); ?>);
             background-repeat: no-repeat;
             background-position: center;
             background-size: cover;
             }
         </style>
    <?php
}
add_action( 'wp_head', 'crowz_customize_css');