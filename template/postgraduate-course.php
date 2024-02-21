<?php
/*
 * Template Name: Postgraduate-course
*/
get_header();
?>

<section
    style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.00) 100%),
            url('<?php
    $image = get_field("postgraduate_course_hero");
    if (!empty($image)) {
        echo $image["url"];
    } ?>');"
    class="postgraduate-course-hero">
    <div class="container">
        <h2 class="postgraduate-course-hero__title title-section"><?php the_field("postgraduate_course_hero_title"); ?></h2>
    </div>
</section>

<section class="postgraduate-course-doctorates">
    <div class="container">
        <div class="postgraduate-course-doctorates__wrap">
            <div class="postgraduate-course-sample-title title-section"><?php the_field("postgraduate_course_doctorates_title"); ?></div>
            <div class="postgraduate-course-doctorates__inner">
                <div class="postgraduate-course-doctorates__content">
                    <div class="postgraduate-course-sample-subtitle"><?php the_field("postgraduate_course_doctorates_subtitle_one"); ?></div>
                    <div class="postgraduate-course-doctorates__text"><?php the_field("postgraduate_course_doctorates_text_one"); ?></div>
                </div>
                <div class="postgraduate-course-doctorates__content">
                    <div class="postgraduate-course-sample-subtitle"><?php the_field("postgraduate_course_doctorates_subtitle_two"); ?></div>
                    <div class="postgraduate-course-doctorates__text"><?php the_field("postgraduate_course_doctorates_text_two"); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="candidate-theses">
    <div class="container">
        <div class="candidate-theses__inner">
            <div class="candidate-theses__title postgraduate-course-sample-title title-section"><?php the_field("candidate_theses_title"); ?></div>
            <div class="candidate-theses__text"><?php the_field("candidate_theses_text"); ?></div>
        </div>
    </div>
</section>

<section class="phd-defense">
    <div class="container">
        <div class="phd-defense__inner">
            <div class="phd-defense__title postgraduate-course-sample-title title-section"><?php the_field("phd_defense_title"); ?></div>
            <div class="phd-defense__text"><?php the_field("phd_defense_text"); ?></div>
        </div>
    </div>
</section>

<section class="grad-defense">
    <div class="container">
        <div class="grad-defense__inner">
            <div class="grad-defense__content">
                <div class="grad-defense__title postgraduate-course-sample-title title-section"><?php the_field("grad_defense_title"); ?></div>
                <div class="grad-defense__text"><?php the_field("grad_defense_text"); ?></div>
                <div class="grad-defense-subtitle postgraduate-course-sample-subtitle"><?php the_field("grad_defense_subtitle"); ?></div>
            </div>
            <div class="grad-defense__swiper swiper">
                <ul class="grad-defense__wrapper swiper-wrapper">
                    <?php
                    if (have_rows('grad_defense_repeater')):
                        while (have_rows('grad_defense_repeater')) : the_row();
                            $grad_defense_img = get_sub_field('grad_defense_slide_photo');
                            if ($grad_defense_img) {
                                $grad_defense_image_alt = $grad_defense_img['alt'];
                                $grad_defense_image_url = $grad_defense_img['url'];
                            }
                            ?>
                            <li class="swiper-slide">
                                <img class="grad-defense__slide-photo" src="<?php echo $grad_defense_image_url ?>"
                                     alt="<?php echo $grad_defense_image_alt ?>">
                            </li>
                        <?php endwhile; else : endif; ?>
                </ul>
                <div class="grad-defense__buttons">
                    <div class="grad-defense__swiper-button-prev">
                        <svg width="80px" height="80px">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-left"></use>
                        </svg>
                    </div>
                    <div class="grad-defense__swiper-button-next">
                        <svg width="80px" height="80px">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-right"></use>
                        </svg>
                    </div>
                </div>
                <div class="grad-defense__swiper-pagination swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section class="grad-doctoral-department">
    <div class="container">
        <div class="grad-doctoral-department__inner">
            <div class="postgraduate-course-sample-title grad-doctoral-department__title title-section"><?php the_field("grad_doctoral_department_title"); ?></div>
            <div class="grad-doctoral-department__text"><?php the_field("grad_doctoral_department_text"); ?></div>
        </div>
    </div>
</section>

<section class="dissertation-defense">
    <div class="container">
        <div class="dissertation-defense__title postgraduate-course-sample-title title-section"><?php the_field("dissertation_defense_title"); ?></div>
        <img src="<?php
        $dissertation_defense_photo = get_field("dissertation_defense_photo");
        if (!empty($dissertation_defense_photo)) {
            echo $dissertation_defense_photo["url"];
        } ?>');"
             alt="" class="dissertation-defense__photo">
        <div class="dissertation-defense__text"><?php the_field("dissertation_defense_text"); ?></div>
    </div>
</section>

<?php
get_footer();
?>

