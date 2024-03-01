<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aksu
 */

?>
<section class="search-page">
    <div class="container">
        <h1 class="home-hero__title"><?php echo pll__('Search title', 'aksu'); ?></h1>
        <div class="page-content">
            <?php
            if (is_home() && current_user_can('publish_posts')) :

                printf(
                    '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'aksu'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url(admin_url('post-new.php'))
                );

            elseif (is_search()) :
                ?>
                <?php
                get_search_form();
                ?>
                <p><?php esc_html_e('No results found', 'aksu'); ?></p>

            <?php
            else :
                ?>

                <p><?php esc_html_e('', 'aksu'); ?></p>
                <?php
                get_search_form();

            endif;
            ?>
        </div><!-- .page-content -->
</section><!-- .no-results -->
