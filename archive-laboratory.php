<?php
/*
 * Template Name: Laboratory
*/
get_header();
?>
<main>
    <section class="labs">
        <div class="container">
            <h2 class="labs-title"><?php echo get_field("labs_title", "option"); ?></h2>
            <div class="labs-content">
                <div class="labs-content__text"><?php echo get_field("labs_text", "option"); ?></div>
                <a href="#laboratory" class="home-its-box__link labs-link">
                    <svg width="32px" height="32px" class="home-its-box__link-icon labs__link-icon">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="labs-task">
        <div class="container">
            <h3 class="labs-task__title"><?php echo get_field("labs_title_task",'option'); ?></h3>
            <ul class="labs-task__list">
                <?php
                if (have_rows('labs_explanation_list','option')):
                    while (have_rows('labs_explanation_list','option')) : the_row();
                        $labs_explanation_num = get_sub_field('labs_explanation_list_num');
                        $labs_explanation_text = get_sub_field('labs_explanation_list_text');
                        ?>
                        <li class="labs-task__list-item">
                            <div class="labs-task__list-item-num"><?php echo $labs_explanation_num; ?></div>
                            <div class="labs-task__list-item-text"><?php echo $labs_explanation_text; ?></div>
                        </li>
                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </section>

    <section class="labs-list" id="laboratory">
        <div class="container">
            <h3 class="labs-list__title labs-task__title"><?php echo get_field("labs_title_storage", 'option'); ?></h3>
            <div class="labs-list__inner">
                <div>
                    <?php
                    $labs_img_storage = get_field('labs_img_storage', 'option');

                    if ($labs_img_storage) {
                        $labs_image_url = $labs_img_storage ['url'];
                        $labs_image_alt = $labs_img_storage ['alt'];
                    }
                    ?>

                    <img src="<?php echo $labs_image_url; ?>" alt="<?php echo $labs_image_alt; ?>"
                         class="labs-list__inner-img">
                </div>
                <ul class="labs-list__inner-list">
                    <?php
                    $args = array(
                        'post_type' => 'laboratory',
                        'posts_per_page' => -1
                    );
                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                            echo '<li class="labs-list__inner-list-item">';
                            the_title('<h4 class="labs-list__inner-list-item-title">', '</h4>');
                            echo '<a href="' . get_the_permalink() . '" class="home-history__link btn-section labs-list-link">';
                            echo '<span>Дізнатися більше</span>';
                            echo '<svg width="24px" height="24px" class="home-news__btn-svg">';
                            echo '<use href="' . get_template_directory_uri() . '/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>';
                            echo '</svg>';
                            echo '</a>';
                            echo '</li>';
                            the_content();
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'Лабораторії не знайдено.';
                    endif;
                    ?>
                </ul>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
