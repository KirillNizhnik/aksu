<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aksu
 */

get_header();
?>


    <section class="home-hero" style="background-image: url(<?php echo the_field('hero_images'); ?>);">
        <div class="container">
            <h2 class="home-hero__title error-title"> ПОМИЛКА 404 </h2>
            <h2 class="home-its-box__title error-descr">Вибачте, але сторінка, яку ви шукаєте, тимчасово недоступна</h2>
            <a href="<?php echo get_home_url(); ?>" class="btn-section ">
                <span>Повернутись на головну</span>
                <svg width="24px" height="24px" class="home-history__btn-svg">
                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                </svg>
            </a>
        </div>
    </section>

<?php
get_footer();
