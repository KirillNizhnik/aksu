<?php
get_header();
?>

    <main>
        <section class="home-hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
            <div class="container">
                <h2 class="home-hero__title"><?php the_title() ?></h2>
            </div>
        </section>
<!--        <div class="news-page__photo">-->
<!--            <img src="--><?php //echo get_the_post_thumbnail_url() ?><!--" alt="" class="news-page__img">-->
<!--            <div class="news-page__title title-section">--><?php //the_title() ?><!--</div>-->
<!--        </div>-->
        <section class="news-page">

            <div class="container news-page__container">
                <div class="news-page__main-content">
                    <div class="news-page__date"><?php echo get_the_date( 'Y.d.m' ); ?></div>
                    <div class="news-page__text">
						<?php echo get_the_content(); ?>
                    </div>
                    <div class="swiper news-page__swiper">
                        <div class="news-page__swiper-wrapper swiper-wrapper">
	                        <?php if( have_rows('news_gellery_images') ): ?>

			                        <?php while( have_rows('news_gellery_images') ): the_row();
				                        $image = get_sub_field('news_image');
				                        ?>
                                <div class="swiper-slide">
                                        <img src="<?php echo $image['url']; ?>"
                                             alt="<?php echo $image['alt']; ?>"
                                             class="news-page__swiper-slide swiper-slide"></div>
			                        <?php endwhile; ?>

	                        <?php endif; ?>

                        </div>
                        <div class="news-page__swiper-pagination swiper-pagination"></div>
                        <div class="news-page__buttons">
                            <div class="news-page__button-prev ">
                                <svg width="80px" height="80px">
                                    <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-arrow-left"></use>
                                </svg>
                            </div>
                            <div class="news-page__button-next ">
                                <svg width="80px" height="80px">
                                    <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-arrow-right"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar">
                    <div class="news-sidebar__top">
                        <div class="news-sidebar__title">Інші новини</div>
                        <a href="<?php echo get_post_type_archive_link('news');
                        ?>" class="news-sidebar__link btn-section">Всі новини
                            <svg width="32px" height="32px">
                                <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="swiper news-sidebar__swiper">
                        <div class="news-sidebar__swiper-wrapper swiper-wrapper">
							<?php

							$args_sidebar = array(
								'post_type'      => 'news',
								'orderby'        => 'date',
								'order'          => 'DESC',
								'posts_per_page' => 3,
							);

							$query_sidebar = new WP_Query( $args_sidebar );

							if ( $query_sidebar->have_posts() ) :
								while ( $query_sidebar->have_posts() ) :
									$query_sidebar->the_post();
                            ?>
                                    <div class="news-sidebar__swiper-slide swiper-slide">
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""
                                             class="news-sidebar__swiper-photo">
                                        <div class="news-sidebar__swiper-content">
                                            <div class="news-sidebar__swiper-title title-section"><?php the_title(); ?>
                                            </div>
                                            <div class="news-sidebar__swiper-inner">
                                                <div class="news-sidebar__swiper-data"><?php echo get_the_date('Y.m.d')?></div>
                                                <div class="news-sidebar__swiper-text"><?php echo get_the_excerpt(); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="news-sidebar__swiper-link btn-section">Читати більше
                                                    <svg width="32px" height="32px">
                                                        <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
								endwhile;
							endif;
							?> </div>
                        <div class="news-sidebar__swiper-pagination swiper-pagination"></div>

                </div>
            </div>
        </section>
    </main>


<?php
get_footer();
