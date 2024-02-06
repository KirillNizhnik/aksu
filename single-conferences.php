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
                <div class="swiper-wrap">
                    <div class="swiper-slide">
                        <img src="" alt="" class="">
                    </div>
                    <div class="swiper-slide">
                        <img src="" alt="" class="">
                    </div>

                </div>
            </div>

            <div class="conferences-post-inner">
                <div>
                    <h3 class="conferences-post-inner-title">Публікація доповідей буде проводитися в порядку їх
                        надходження
                    </h3>
                    <div class="conferences-post-inner-list">
                        <div class="conferences-post-inner-list-item">
                            <div>
                                Конін В.В., Погурельський О.С., Малютенко Т.Л., Приходько І.А., Сушич О.П. (Київ,
                                Національний авіаційний університет)Дистанційне дослідження глобальних навігаційних
                                супутникових систем,Remote research of global navigation satellite systems
                            </div>
                            <div class="conferences-post-btns">
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                    </svg>
                                </a>
                            </div>


                        </div>
                        <div class="conferences-post-inner-list-item">
                            <div>
                                Конін В.В., Погурельський О.С., Малютенко Т.Л., Приходько І.А., Сушич О.П. (Київ,
                                Національний авіаційний університет)Дистанційне дослідження глобальних навігаційних
                                супутникових систем,Remote research of global navigation satellite systems
                            </div>
                            <div class="conferences-post-btns">
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                    </svg>
                                </a>
                            </div>


                        </div>
                        <div class="conferences-post-inner-list-item">
                            <div>
                                Конін В.В., Погурельський О.С., Малютенко Т.Л., Приходько І.А., Сушич О.П. (Київ,
                                Національний авіаційний університет)Дистанційне дослідження глобальних навігаційних
                                супутникових систем,Remote research of global navigation satellite systems
                            </div>
                            <div class="conferences-post-btns">
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                                <a href="" class="btn-section">
                                    <span>Вимоги до тез доповідей</span>
                                    <svg width="24px" height="24px"
                                         class="home-history__btn-svg ">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

</main>
<?php
get_footer();
?>

