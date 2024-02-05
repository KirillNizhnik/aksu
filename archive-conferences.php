<?php
/*
 * Template Name: Conferences
*/
get_header();
?>
<main>
    <section class="home-hero"
             style="background-image: url(<?php echo the_field('conferences_img'); ?>); background-color: #084184">
        <div class="container">
            <h2 class="home-hero__title"><?php the_field("conferences_title"); ?></h2>
        </div>
    </section>

    <section class="conferences">
        <div class="container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'conferences',
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 4,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                ?>
                <ul class="conferences-list">
                    <?php
                    while ($query->have_posts()) :
                        $query->the_post();
                        ?>
                        <li class="conferences-list__item">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>"
                                     alt="<?php the_title_attribute(); ?>" class="conferences-list__item-img">
                            <?php endif; ?>
                            <div class="conferences-list__item-wrapp">
                                <div>
                                    <h3 class="conferences-list__item-title"><?php the_title(); ?></h3>
                                    <p class="conferences-list__item-descr"> <?php echo get_the_excerpt(); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-section ">
                                    Читати більше
                                    <svg width="32px" height="32px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                                <!--                        <div class="conferences-list__item-btns">-->
                                <!--                            <a href="" class="btn-section">-->
                                <!--                                <span>Вимоги до тез доповідей</span>-->
                                <!--                                <svg width="24px" height="24px"-->
                                <!--                                     class="home-history__btn-svg ">-->
                                <!--                                    <use href="-->
                                <?php //echo bloginfo('template_url');
                                ?><!--/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>-->
                                <!--                                </svg>-->
                                <!--                            </a>-->
                                <!--                            <a href="" class="btn-section">-->
                                <!--                                <span>Вимоги до тез доповідей</span>-->
                                <!--                                <svg width="24px" height="24px"-->
                                <!--                                     class="home-history__btn-svg ">-->
                                <!--                                    <use href="-->
                                <?php //echo bloginfo('template_url');
                                ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
                                <!--                                </svg>-->
                                <!--                            </a>-->
                                <!--                        </div>-->
                            </div>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => max(1, $paged),
                    'prev_text' => '&laquo; Назад',
                    'next_text' => 'Вперед &raquo;',
                ));


            else :
                echo 'Немає конференцій';

            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

</main>
<?php
get_footer();
?>
