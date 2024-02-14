<?php
get_header();
?>
<main>
    <section class="conferences-post">
        <div class="container">
            <h1 class="conferences-post-title"><?php the_title() ?>
            </h1>

            <div class="conferences-post-wrap">
                <div>
                    <?php the_field("conferences_post_descr"); ?>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>"
                         alt="<?php the_title_attribute(); ?>" class="conferences-post-img">
                <?php endif; ?>
            </div>


            <div class="conferences-post-swiper swiper">
                <div class="swiper-wrapper">
                    <?php
                    if (have_rows('conferences_post_images_list')):
                        while (have_rows('conferences_post_images_list')) : the_row();
                            $conferences_swiper_img = get_sub_field('conferences_post_img');
                            if ($conferences_swiper_img) {
                                $conferences_image_alt = $conferences_swiper_img ['alt'];
                                $conferences_image_url = $conferences_swiper_img ['url'];
                            }
                            ?>
                            <li class="swiper-slide">
                                <img class="conferences-post-swiper-img" src="<?php echo $conferences_image_url ?>"
                                     alt="<?php echo $conferences_image_alt ?>">
                            </li>
                        <?php endwhile; else : endif; ?>

                </div>
                <div class="conferences-post-swiper-btns">
                    <div class=" conferences-post-swiper-prev">
                        <svg width="80px" height="80px">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-left"></use>
                        </svg>
                    </div>
                    <div class=" conferences-post-swiper-next">
                        <svg width="80px" height="80px">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-right"></use>
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-conferences"></div>
            </div>

            <div class="conferences-post-inner">
                    <?php if (have_rows('conferences_post_inf')) : ?>
                        <?php while (have_rows('conferences_post_inf')) : the_row(); ?>
                            <?php
                            $conferences_post_inf_title = get_sub_field('conferences_post_inf_title');
                            ?>
                            <div>
                                <h3 class="conferences-post-inner-title"><?php echo $conferences_post_inf_title ?></h3>
                                <div class="conferences-post-inner-list">
                                    <?php if (have_rows('conferences_post_inf_list')) : ?>
                                        <?php while (have_rows('conferences_post_inf_list')) : the_row(); ?>
                                            <?php
                                            $conferences_inf_text = get_sub_field('conferences_post_inf_list_text');
                                            $conferences_inf_file = get_sub_field('conferences_post_inf_list_file');
                                            $conferences_inf_link = get_sub_field('conferences_post_inf_list_link');
                                            $checkedFile = get_sub_field('onoff_conferences_post_inf_list_file');
                                            $checkedLink = get_sub_field('onoff_conferences_post_inf_list_link');
                                            $conferences_file_link = '';
                                            if (is_array($conferences_inf_file) && isset($conferences_inf_file['url'])) {
                                                $conferences_file_link = $conferences_inf_file['url'];
                                            }

                                            ?>
                                            <div class="conferences-post-inner-list-item">
                                                <div><?php echo $conferences_inf_text ?></div>
                                                <?php if ($checkedFile || $checkedLink) : ?>
                                                    <div class="conferences-post-btns">
                                                        <?php if ($checkedFile) : ?>
                                                            <a href="<?php echo esc_url($conferences_file_link) ?>"
                                                               class="btn-section" target="_blank">
                                                                <span>Завантажити</span>
                                                                <svg width="24px" height="24px"
                                                                     class="home-history__btn-svg">
                                                                    <use href="<?php echo esc_url(bloginfo('template_url')); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                                                </svg>
                                                            </a>
                                                        <?php endif; ?>
                                                        <?php if ($checkedLink) : ?>
                                                            <a href="<?php echo esc_url($conferences_inf_link) ?>"
                                                               class="btn-section" target="_blank">
                                                                <span>Дізнатись більше</span>
                                                                <svg width="24px" height="24px"
                                                                     class="home-history__btn-svg">
                                                                    <use href="<?php echo esc_url(bloginfo('template_url')); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                                                </svg>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
    </section>

</main>
<?php
get_footer();
?>

