<?php
/*
 * Template Name: Conferences
*/
get_header();
?>
<main>
    <section class="home-hero"
             style="background-image: url(<?php echo the_field('conferences_img', 'option'); ?>); background-color: #084184">
        <div class="container">
            <h2 class="home-hero__title" style="background: linear-gradient(181deg, rgba(255, 255, 255, 0.20) -27.39%, rgb(255 255 255 / 18%) 52.04%), rgba(255, 255, 255, 0.15);
                "><?php echo pll__('Conferences title', 'aksu'); ?></h2>
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
                'posts_per_page' => 5,
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
                                <a href="<?php the_permalink(); ?>" class="btn-section conferences-list__item-btn">
                                    <?php echo pll__('Читати більше', 'aksu'); ?>
                                    <svg width="32px" height="32px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => max(1, $paged),
                        'prev_text' => '<div ><svg class="pagination-svg" width="80px" height="80px"><use href="' . get_bloginfo('template_url') . '/assets/images/icons/icons.svg#icon-arrow-left"></use></svg></div>',
                        'next_text' => '<div ><svg class="pagination-svg" width="80px" height="80px"><use href="' . get_bloginfo('template_url') . '/assets/images/icons/icons.svg#icon-arrow-right"></use></svg></div>',
                    ));
                    ?>
                </div>
            <?php
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
