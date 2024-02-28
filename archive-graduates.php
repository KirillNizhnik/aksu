<?php
/*
 * Template Name: Graduates
*/
get_header();
?>

    <section
            style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.00) 100%),
                    url('<?php
            $image = get_field("our_graduates_hero", "option");
            if (!empty($image)) {
                echo $image["url"];
            } ?>');"
            class="our-graduates-hero">
        <div class="container">
            <h1 class="our-graduates-hero__title title-section"><?php echo get_field("our_graduates_hero_title", "option"); ?></h1>
        </div>
    </section>

    <section class="graduates-info">
        <div class="container">
            <div class="graduates-info__wrap">
                <div class="graduates-info__text"><?php echo get_field("graduates_info_text", "option"); ?></div>
            </div>
        </div>
    </section>

<?php
$args = array(
    'post_type' => 'graduates',
    'posts_per_page' => -1,
);

$graduates_query = new WP_Query($args);

if ($graduates_query->have_posts()) :
    ?>
    <main>
        <section class="our-graduates">
            <div class="container">
                <div class="our-graduates__inner">
                    <ul class="our-graduates-list">
                        <?php while ($graduates_query->have_posts()) : $graduates_query->the_post(); ?>
                            <li class="our-graduates-list__item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>"
                                         alt="<?php the_title(); ?>" class="our-graduates-list__item-img">
                                <?php endif; ?>
                                <h3 class="our-graduates-list__item-name"><?php the_title(); ?></h3>
                                <p class="our-graduates-list__item-descr"><?php echo get_the_excerpt(); ?></p>
                                <button class="our-graduates-list__item-link btn-section">
                                    <span><?php echo pll__('Дізнатись більше', 'aksu'); ?></span>
                                    <svg width="24px" height="24px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </button>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
<?php endif; ?>

<!--    <section class="our-graduates-single is-hidden">-->
<!--        <div class="container">-->
<!--            <div class="our-graduates-single__wrap">-->
<!--                <button href="#" class="our-graduates-single__icon">-->
<!--                    <svg width="32px" height="32px">-->
<!--                        <use href="--><?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-close"></use>-->
<!--                    </svg>-->
<!--                </button>-->
<!--                <div class="our-graduates-single__content">-->
<!--                        <img src=""-->
<!--                             alt="" class="our-graduates-single__photo">-->
<!--                    <div class="our-graduates-single__heading">-->
<!--                        <h1 class="our-graduates-single__title title-section"></h1>-->
<!--                        <div class="our-graduates-single__subtitle"></div>-->
<!--                    </div>-->
<!--                    <div class="our-graduates-single__heading_pc">-->
<!--                        <h1 class="our-graduates-single__title title-section"></h1>-->
<!--                        <div class="our-graduates-single__subtitle">></div>-->
<!--                        <div class="our-graduates-single__text-pc"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="our-graduates-single__text"></d>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->



<?php
get_footer();
?>