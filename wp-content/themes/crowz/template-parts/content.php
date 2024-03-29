<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crowz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header"
        <?php if (is_singular()): ?>
            style="
                    background: url('<?php echo get_the_post_thumbnail_url(); ?>') fixed;
                    background-size: cover;
                    background-position: center;
                    min-height: 350px;
                    width: 100%;"
        <?php endif; ?>
    >
        <?php
        if (is_singular()) :
            $get_author_id = get_the_author_meta('ID');
            $get_author_gravatar = get_avatar_url($get_author_id);
            ?>
            <div class="avatar">
                <img src="<?php echo $get_author_gravatar ?>" />
            </div>
        <?php
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                crowz_posted_on();
                crowz_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->


    <?php
    if (!is_singular()) :
        crowz_post_thumbnail();
    endif; ?>


    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', '_s'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', '_s'),
                    'after' => '</div>',
                )
            );
        endif;
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php crowz_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
