<?php
get_header();
?>
    <main>
        <section class="news">
            <div class="container">
                <div class="news-title title-section"><?php echo pll__('Conferences title', 'aksu'); ?></div>

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'news',
                    'paged' => $paged,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 4,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    ?>
                    <ul class="container__news">
                        <?php
                        while ($query->have_posts()) :
                            $query->the_post();
                            ?>
                            <li class="news-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>"
                                         alt="<?php the_title_attribute(); ?>" class="news-photo">
                                <?php endif; ?>
                                <div class="news-item__content">
                                    <div class="news-item__title title-section"><?php the_title(); ?></div>
                                    <div class="news-item__date"><?php echo get_the_date('d.m.Y'); ?></div>
                                    <p class="news-item__text">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn-section news-item__btn btn-section">
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
                            'next_text' => '<div ><svg class="pagination-svg" width="80px" height="80px"><use href="' . get_bloginfo('template_url') . '/assets/images/icons/icons.svg#icon-arrow-right"></use></svg></div>',));

                        ?>
                    </div>
                <?php
                else :
                    echo 'Немає новин';

                endif;
                wp_reset_postdata();
                ?>
            </div>

        </section>

    </main>

<?php
get_footer();
