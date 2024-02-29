<?php
/*
 * Template Name: Our Team
*/
get_header();
?>
<main>
    <section class="teacher">
        <div class="container">
            <h1 class="teacher-title"><?php echo pll__('Teacher title', 'aksu'); ?></h1>

            <div class="teacher-container">
                <?php
                $post_type = get_post_type();

                $terms = get_terms(array(
                    'taxonomy' => 'positions',
                    'hide_empty' => false,
                ));

                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        echo ' <div class="teacher-inner">';
                        echo '<h2 class="teacher-positions-title">' . $term->name . '</h2>';

                        $posts_in_category = new WP_Query(array(
                            'post_type' => $post_type,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'positions',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                        ));

                        if ($posts_in_category->have_posts()) {
                            echo '<div class="swiper swiper-teacher">';
                            echo '<ul class="teacher-list swiper-wrapper">';
                            while ($posts_in_category->have_posts()) {
                                $posts_in_category->the_post();
                                echo '<li class="teacher-list__item swiper-slide">';
                                if (has_post_thumbnail()) {
                                    echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '" class="teacher-list__item-img">';
                                }
                                echo '<h3 class="teacher-list__item-name">' . get_the_title() . '</h3>';
                                echo '<p class="teacher-list__item-descr">' . get_field("teacher_position") . '</p>';
                                echo '<a href="' . get_the_permalink() . '" class="teacher-list__item-link btn-section">';
                                echo '<span>' . pll__('Дізнатись більше', 'aksu')  .'</span>';
                                echo '<svg width="24px" height="24px" class="home-news__btn-svg">';
                                echo '<use href="' . get_template_directory_uri() . '/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>';
                                echo '</svg>';
                                echo '</a>';
                                echo '</li>';

                                the_content();
                            }
                            echo '</ul>';
                            echo '  <div class="swiper-pagination swiper-pagination-teacher"></div>';
                            echo '</div>';

                            wp_reset_postdata();
                            echo '</div>';
                        } else {

                            echo '<p>Викладачі в цій категорії відсутні</p>';
                        }
                    }
                } else {
                    echo '<p>Категорії не знайдені</p>';
                }

                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
