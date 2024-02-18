<?php
/*
 * Template Name: Speciality
*/
get_header();
?>

<section
        style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.00) 100%),
                url('<?php
        $speciality_hero_photo = get_field("speciality_background");
        if (!empty($speciality_hero_photo)) {
            echo $speciality_hero_photo["url"];
        } ?>');"
        class="speciality-hero">


    <div class="container">
        <h2 class="speciality-hero__title title-section"><?php the_field('speciality_title'); ?></h2>
    </div>
</section>
<section class="speciality-slide">
    <div class="container">
        <div class="speciality-slide-content speciality-slide-content_color">
            <?php the_field('speciality_slide_text'); ?>
            <a href="<?php the_field('speciality_slide_text_link'); ?>" class="speciality-slide-content__link">
                <svg width="32px" height="32px" class="speciality-slide-content__icon">
                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="speciality-wrap-content">
    <div class="container">
        <div class="speciality-inner-content">
            <p class="speciality-inner-content__text">
                <?php the_field('speciality_inner_content_text'); ?>
            </p>
            <div class="speciality-inner-content__title speciality-sample-title title-section">
                <?php the_field('speciality_inner_content_title'); ?>
            </div>
        </div>
    </div>
</section>
<section class="speciality-publication">
    <div class="container">
        <div class="speciality-publication-content">
            <div class="speciality-publication-content__title">
                <div class="speciality-publication-content__subtitle speciality-sample-subtitle ">
                    <?php the_field('speciality_publication_subtitle'); ?>
                </div>
                <div class="speciality-publication-content__title speciality-sample-title title-section">
                    <?php the_field('speciality_publication_title'); ?>
                </div>
                <p class="speciality-publication__text">
                    <?php the_field('speciality_publication_text'); ?>
                </p>
            </div>
            <img src="<?php
            $publication_content_photo = get_field("speciality_publication_photo");
            if (!empty($publication_content_photo)) {
                echo $publication_content_photo["url"];
            } ?>');"
                 alt="" class="publication-content__photo">
        </div>
    </div>
</section>
<section class="speciality-educational-degrees">
    <div class="container">
        <div class="speciality-educational-degrees__inner">
            <div class="speciality-educational-degrees__content">
                <div class="speciality-sample-title title-section"><?php the_field('speciality_educational_degrees_title'); ?></div>
                <p class="speciality-educational-degrees__text">
                    <?php the_field('speciality_educational_degrees_text'); ?></p>
                <div class="speciality-sample-subtitle">
                    <?php the_field('speciality_educational_degrees_subtitle'); ?></p></div>
            </div>
            <ul class="speciality-educational-degrees__list">
                <?php
                if (have_rows('speciality_educational_degrees_list')):
                    while (have_rows('speciality_educational_degrees_list')) : the_row();
                        $speciality_text = get_sub_field('speciality_educational_degrees_item_text');
                        $speciality_img = get_sub_field('speciality_educational_degrees_icon');
                        if ($speciality_img) {
                            $image_alt = $speciality_img['alt'];
                            $image_url = $speciality_img['url'];
                        }
                        ?>
                        <li class="speciality-educational-degrees__item">
                            <img class="speciality-educational-degrees__icon" src="<?php echo $image_url ?>" alt="<?php echo $image_alt ?>">
                            <p class="speciality-educational-degrees__item-text"><?php echo $speciality_text ?></p>
                        </li>
                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </div>
</section>
<section class="speciality-fund-spec">
    <div class="container">
        <div class="speciality-fund-spec__content">
            <div class="speciality-fund-spec__title speciality-sample-subtitle"><?php the_field('speciality_fund_spec_title'); ?></p></div>
            <ul class="speciality-fund-spec__list master-docs__list">
                <?php
                if (have_rows('speciality_fund_spec_list')):
                    while (have_rows('speciality_fund_spec_list')) : the_row();
                        $speciality_fund_spec_text = get_sub_field('speciality_fund_spec_text'); ?>
                        <li class="speciality-fund-spec__text">
                            <p><?php echo $speciality_fund_spec_text ?></p>
                        </li>
                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </div>
</section>
<section class="speciality-stud-prep">
    <div class="container">
        <div class="speciality-stud-prep__inner">
            <img src="<?php
            $speciality_stud_prep_photo = get_field("speciality_stud_prep_photo");
            if (!empty($speciality_stud_prep_photo)) {
                echo $speciality_stud_prep_photo["url"];
            } ?>');" alt="" class="speciality-stud-prep__photo">
            <div class="speciality-stud-prep__content">
                <div class="speciality-stud-prep__title speciality-sample-title title-section">
                    <?php the_field('speciality_stud_prep_title'); ?></p></div>
                <p class="speciality-stud-prep__text"><?php the_field('speciality_stud_prep_text');?></p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
