<?php
/*
 * Template Name: Home
*/
get_header();
?>
<main>

    <section class="home-hero" style="background-image: url(<?php echo the_field('hero_images'); ?>);">
        <div class="container">
            <h2 class="home-hero__title"><?php the_field("hero_title"); ?></h2>
        </div>
    </section>

    <section class="home-its">
        <div class="container">
            <div class="home-its-box">
                <h2 class="home-its-box__title"><?php the_field("home_its_title"); ?></h2>
                <p class="home-its-box__descr"><?php the_field("home_its_descr"); ?></p>
                <a href="#history" class="home-its-box__link">
                    <svg width="48px" height="48px" class="home-its-box__link-icon">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                    </svg>
                </a>
            </div>

            <div class="home-its__text"><?php the_field("home_its_text"); ?></div>
        </div>
    </section>



    <form class="go" action="" method="get">
        <p>
<!--            <label for="s">--><?php //_e( '' , 'mytextdomain' ); ?><!--</label>-->
            <input placeholder="Search" class="goo" type="text" name="s" id="s" value="" data-swplive="true" /> <!-- data-swplive="true" enables SearchWP Live Search -->
        </p>
        <p>
            <button type="submit"><?php _e( '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18.75 18.75L15.4404 15.4464M15.4404 15.4464C16.5227 14.3656 17.1923 12.8716 17.1923 11.2212C17.1923 7.92338 14.5189 5.25 11.2212 5.25C7.92338 5.25 5.25 7.92338 5.25 11.2212C5.25 14.5189 7.92338 17.1923 11.2212 17.1923C12.8685 17.1923 14.36 16.5252 15.4404 15.4464Z"
                              stroke="#595D62" stroke-width="0.75" stroke-linecap="round"/>
                    </svg>' , 'mytextdomain' ); ?></button>
        </p>
    </form>

    <section class="home-why">
        <div class="container">
            <div class="home-why-title"><?php the_field("privilege_title"); ?></div>
            <ul class="home-why-list">
                <?php
                if (have_rows('privilege_list')):
                    while (have_rows('privilege_list')) : the_row();
                        $privilege_title = get_sub_field('privilege_list-title');
                        $privilege_text = get_sub_field('privilege_list-text');
                        $privilege_img = get_sub_field('privilege_list-img');
                        if ($privilege_img) {
                            $image_alt = $privilege_img['alt'];
                            $image_url = $privilege_img['url'];
                        }
                        ?>
                        <li class="home-why-list__item">
                            <img class="home-why-list__item-img" src="<?php echo $image_url ?>"
                                 alt="<?php echo $image_alt ?>">
                            <h3 class="home-why-list__item-title"><?php echo $privilege_title ?></h3>
                            <div class="home-why-list__item-text"><?php echo $privilege_text ?></div>
                        </li>
                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </section>

    <section class="home-history" id="history">
        <div class="container">
            <div class="home-history__title"><?php the_field("home-history_title"); ?></div>

            <div class="home-history__inner">
                <div class="home-history__wrapp">
                    <div class="home-history__text"><?php the_field("home-history_text"); ?></div>
                    <a href="<?php the_field("home-history_btn_link"); ?>" class="home-history__link">
                        <span><?php the_field("home-history_btn"); ?></span>
                        <svg width="24px" height="24px" class="home-history__btn-svg">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                        </svg>
                    </a>
                </div>
                <?php
                $home_history_image_url = '';
                $home_history_image_alt = '';

                $home_history_img = get_field("home-history_img");

                if ($home_history_img) {
                    $home_history_image_url = $home_history_img['url'];
                    $home_history_image_alt = $home_history_img['alt'];
                }
                ?>

                <img class="home-history__btn-img" src="<?php echo $home_history_image_url; ?>"
                     alt="<?php echo $home_history_image_alt; ?>">
            </div>
        </div>
    </section>

    <section class="home-video">
        <div class="container">
            <h5 class="home-video__title"><?php the_field("home_video__title"); ?></h5>
            <div class="home-video-inner">
                <div class="home-video-wrap">
                    <?php
                    $video_img = get_field('video_list_img');
                    if ($video_img) {
                        $video_image_alt = $video_img['alt'];
                        $video_image_url = $video_img['url'];
                    }
                    ?>
                    <img src="<?php echo $video_image_url ?>" alt="<?php echo $video_image_alt ?>"
                         class="home-video__img">
                    <a href="<?php the_field("home_video_play"); ?>" class="home-video-play">
                        <svg width="30px" height="30px" class="home-video-play-icon">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-tringle"></use>
                        </svg>
                    </a>
                </div>
                <ul class="home-video__list">
                    <?php
                    if (have_rows('home_video_list')):
                        while (have_rows('home_video_list')) : the_row();
                            $home_video_list_num = get_sub_field('home-video__list_item_num');
                            $home_video_list_text = get_sub_field('home_video_list_item_text');

                            ?>
                            <li class="home-video__list-item">
                                <div class="home-video__list-item-num"><?php echo $home_video_list_num ?></div>
                                <div class="home-video__list-item-text"><?php echo $home_video_list_text ?></div>
                            </li>
                        <?php endwhile; else : endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="home-news">
        <div class="container">
            <div class="home-news-wrap">
                <h3 class="home-news-title"><?php the_field("home_news_title"); ?></h3>
                <a href="<?php echo get_post_type_archive_link('news'); ?>" class="home-news__link">
                    <span><?php the_field("home_news_btn"); ?></span>
                    <svg width="24px" height="24px" class="home-news__btn-svg">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                    </svg>
                </a>
            </div>
            <div class="swiper-home-news swiper ">
                <div class="home-news-slider__list swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        'orderby' => 'date',
                    );

                    $recent_posts = new WP_Query($args);

                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>
                            <div class="home-news-slider__list-item swiper-slide">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
                                     class="home-news-slider__list-item-img">
                                <div class="home-news-slider__list-item-wrap">
                                    <h3 class="home-news-slider__list-item-title"><?php the_title(); ?></h3>
                                    <div class="home-news-slider__list-item-date"><?php echo get_the_date('d.m.Y'); ?></div>
                                    <div class="home-news-slider__list-item-text"><?php echo get_the_excerpt() ?></div>
                                    <a href="<?php the_permalink(); ?>" class="home-news-slider__list-item-link">
                                        <span><?php echo pll__('Дізнатись більше', 'aksu'); ?></span>
                                        <svg width="24px" height="24px" class="home-news-slider__list-item-link-svg">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'Немає новин';
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination-home-news"></div>
            </div>
    </section>
</main>
<?php
get_footer();
?>
