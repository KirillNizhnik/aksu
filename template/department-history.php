<?php
/*
 * Template Name: Department-history
*/
get_header();
?>

<section
        style="background-image:
                url('<?php
        $department_history_background = get_field("department_history_hero");
        if (!empty($department_history_background)) {
            echo $department_history_background["url"];
        } ?>');"
        class="department-history-hero">
</section>
<section class="department-history-brief">
    <div class="container">
        <div class="department-history-brief__wrap">
            <h1 class="department-history-brief__title title-section"><?php the_field('department_history_brief_title'); ?></h1>
            <div class="department-history-brief__text"><?php the_field('department_history_brief_text'); ?></div>
            <a href="#department-history" class="department-history-brief__link">
                <svg width="48px" height="48px" class="speciality-slide-content__icon">
                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="aero-control-info">
    <div class="container">
        <div class="aero-control-info__inner">
            <div class="aero-control-info__title title-section"><?php the_field('aero_control_info_title'); ?></div>
            <img src="<?php
            $aero_control_info_photo = get_field("aero_control_info_photo");
            if (!empty($aero_control_info_photo)) {
                echo $aero_control_info_photo["url"];
            } ?>');"
                 alt="" class="aero-control-info__photo">
            <div class="department-history-sample-text"><?php the_field('aero_control_info_text'); ?></div>
        </div>
        <div class="aero-control-info__inner-pc">
            <div class="aero-control-info__content-pc">
                <div class="aero-control-info__title title-section"><?php the_field('aero_control_info_title'); ?></div>
                <div class="department-history-sample-text"><?php the_field('aero_control_info_text'); ?></div>
            </div>
            <img src="<?php
            $aero_control_info_photo = get_field("aero_control_info_photo");
            if (!empty($aero_control_info_photo)) {
                echo $aero_control_info_photo["url"];
            } ?>');"
                 alt="" class="aero-control-info__photo">
        </div>
    </div>
</section>
<section class="comp-specialists">
    <div class="container">
        <ul class="comp-specialists__list">
            <?php
            if (have_rows('comp_specialists_repeater')):
                while (have_rows('comp_specialists_repeater')) : the_row();
                    $comp_specialists_img = get_sub_field('comp_specialists_img');
                    if ($comp_specialists_img) {
                        $comp_specialists_image_alt = $comp_specialists_img['alt'];
                        $comp_specialists_image_url = $comp_specialists_img['url'];
                    }
                    $comp_specialists_title = get_sub_field('comp_specialists_title');
                    $comp_specialists_text = get_sub_field('comp_specialists_text');
                    ?>
                    <li class="comp-specialists__item">
                        <img src="<?php echo $comp_specialists_image_url ?>"
                             alt="<?php echo $comp_specialists_image_alt ?>" class="comp-specialists__photo">
                        <div class="comp-specialists__title title-section"><?php echo $comp_specialists_title ?></div>
                        <div class="comp-specialists__text department-history-sample-text"><?php echo $comp_specialists_text ?></div>
                    </li>
                <?php endwhile; else : endif; ?>
        </ul>
    </div>
    </div>
</section>
<section class="department-history" id="department-history">
    <div class="container">
        <div class="department-history__wrap">
            <div class="department-history__title-one title-section"><?php the_field('department_history_title_one'); ?></div>
            <div class="department-history__content">
                <img src="<?php
                $department_history_photo = get_field("department_history_photo");
                if (!empty($department_history_photo)) {
                    echo $department_history_photo["url"];
                } ?>');"
                     alt="" class="department-history__photo">
                <div class="department-history-sample-text"><?php the_field('department_history_text'); ?></div>
            </div>
            <div class="department-history__title-two title-section"><?php the_field('department_history_title_two'); ?></div>
        </div>
    </div>
</section>
<section class="department-leadership">
    <div class="container">
        <div class="department-leadership__title title-section"><?php the_field('department_leadership_title'); ?></div>
        <ul class="department-leadership__list">
            <?php
            if (have_rows('department_leadership_repeater')):
                while (have_rows('department_leadership_repeater')) : the_row();
                    $department_leadership_img = get_sub_field('department_leadership_img');
                    if ($department_leadership_img) {
                        $department_leadership_alt = $department_leadership_img['alt'];
                        $department_leadership_url = $department_leadership_img['url'];
                    }
                    $department_leadership_title = get_sub_field('department_leadership_title');
                    $department_leadership_subtitle = get_sub_field('department_leadership_subtitle');
                    $department_leadership_text = get_sub_field('department_leadership_text');
                    ?>
                    <li class="department-leadership__item">
                        <div class="department-leadership__content">
                            <img src="<?php echo $department_leadership_url ?>"
                                 alt="<?php echo $department_leadership_alt ?>" class="department-leadership__photo">
                            <div class="department-leadership__item-position">
                                <div class="department-leadership__item-title"><?php echo $department_leadership_title ?></div>
                                <div class="department-leadership__item-subtitle title-section"><?php echo $department_leadership_subtitle ?></div>
                            </div>
                        </div>
                        <div class="department-history-sample-text"><?php echo $department_leadership_text ?></div>
                    </li>
                <?php endwhile; else : endif; ?>
        </ul>
    </div>
    </div>
</section>

<?php
get_footer();
?>

