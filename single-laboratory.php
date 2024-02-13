<?php
get_header();
?>
<main>
    <section class="lab-single">
        <div class="container">
            <div class="lab-single-arrow">
                <a href="<?php echo get_post_type_archive_link('laboratory'); ?>">
                    <svg width="32px" height="32px">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-oval-left"></use>
                    </svg>
                    <span>Повернутися</span>
                </a>
            </div>
            <h2 class="lab-single-title"><?php the_title(); ?></h2>
            <div class="labs-single-inner">
                <h3 class="labs-single-inner__title"><?php the_field("lab_single_title"); ?></h3>
                <div class="labs-single-inner__content">
                    <div class="labs-single-inner__text"><?php the_field("lab_single_text"); ?></div>
                    <div class="labs-single-inner__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('lab_single_images')) : ?>
                                <?php while (have_rows('lab_single_images')) : the_row(); ?>
                                    <?php
                                    $labs_single_swiper_img = get_sub_field('lab_single_img');
                                    if ($labs_single_swiper_img) {
                                        $labs_single_image_alt = $labs_single_swiper_img ['alt'];
                                        $labs_single_image_url = $labs_single_swiper_img ['url'];
                                    }

                                    ?>
                                    <div class="swiper-slide">
                                        <img class="labs-post-swiper-img"
                                             src="<?php echo $labs_single_image_url; ?>"
                                             alt="<?php echo $labs_single_image_alt; ?>">
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-pagination labs-single-inner__swiper-pagination"></div>
                        <div class="labs-single-inner-arrows">
                            <div class="labs-single-swiper-button-prev">
                                <svg width="80px" height="80px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-left"></use>
                                </svg>
                            </div>
                            <div class="labs-single-swiper-button-next">
                                <svg width="80px" height="80px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-right"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="labs-single-content-text">
                <?php the_field("lab_single_text_add"); ?>
            </div>
            <div class="labs-single-content__list">
                <div class="labs-single-content__list-box-fix">
                <?php if (have_rows('lab_single_list')) : ?>
                    <?php while (have_rows('lab_single_list')) :
                        the_row(); ?>
                        <?php
                        $labs_single_title = get_sub_field('lab_single_list_title');
                        ?>
                        <h2 class="labs-single-content__list-title"><?php echo $labs_single_title; ?></h2>
                        <div class="labs-single-box">
                            <?php if (have_rows('lab_single_list_item')) : ?>
                                <?php while (have_rows('lab_single_list_item')) :
                                    the_row(); ?>
                                    <?php
                                    $labs_single_img = get_sub_field('lab_single_list_item_img');
                                    if ($labs_single_img) {
                                        $labs_single_img_alt = $labs_single_img ['alt'];
                                        $labs_single_img_url = $labs_single_img ['url'];
                                    }
                                    $labs_single_text = get_sub_field('lab_single_list_item_text');
                                    ?>

                                    <div class="labs-single-content__list-item">
                                        <img src="<?php echo $labs_single_img_url; ?>"
                                             class="labs-single-content__list-item-img"
                                             alt="<?php echo $labs_single_img_alt; ?>">
                                        <div class="labs-single-content__list-item-text"><?php echo $labs_single_text; ?></div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?></div>
            </div>
            <div class="labs-single-call">
                <div class="labs-single-call-text">
                    <?php the_field('lab_single_call'); ?>
                </div>
                <?php
                $labs_call_img = get_field('lab_single_call_img');
                if ($labs_call_img) {
                    $labs_call_img_alt = $labs_call_img ['alt'];
                    $labs_call_img_url = $labs_call_img ['url'];
                }
                ?>
                <img src="<?php echo $labs_call_img_url; ?>"
                     alt="<?php echo $labs_call_img_alt; ?>"
                     class="labs-single-call-img">
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>

