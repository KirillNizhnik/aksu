<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aksu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header ">
        <div class="result-text-page ">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php
                aksu_posted_on();
                aksu_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
        </div>
    </div><!-- .entry-header -->
    <div class="container">
        <div class="entry-post_thumbnail-fix">
            <?php aksu_post_thumbnail(); ?>

            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <footer class="entry-footer">
        <?php aksu_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
