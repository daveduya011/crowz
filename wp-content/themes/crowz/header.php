<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crowz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', '_s'); ?></a>

    <header id="masthead" class="site-header">
        <div class="top-bar">
            <?php the_custom_logo(); ?>
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('Primary Menu', '_s'); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div> <!-- .topbar -->

        <div class="site-branding">
            <div class="taglines">
                <?php
                $crowz_description = get_bloginfo('description', 'display');
                $tagline_first = get_theme_mod('header_tagline_first');
                $tagline_second = get_theme_mod('header_tagline_second');

                $header_button_text = get_theme_mod('header_button_text', 'shop now');
                $header_button_url = get_theme_mod('header_button_url', '/shop');

                if ($tagline_first || is_customize_preview()) :
                    ?>
                    <p class="tagline-first"><?php echo $tagline_first; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        ?></p>
                <?php endif;
                if ($tagline_second || is_customize_preview()) :
                    ?>
                    <p class="tagline-second"><?php echo $tagline_second; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        ?></p>
                <?php endif; ?>

                <a href="<?php echo $header_button_url ?>" class="header-button"><?php echo $header_button_text ?></a>

            </div><!-- .taglines -->
        </div><!-- .site-branding -->
    </header><!-- #masthead -->
