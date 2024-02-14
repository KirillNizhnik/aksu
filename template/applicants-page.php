<?php
/*
 * Template Name: Applicant`s page
*/
get_header();
?>
<main>
    <section class="home-hero" style="background-image: url(<?php echo the_field('applicant_img'); ?>);">
        <div class="container">
            <h2 class="home-hero__title"><?php the_field("applicant_title"); ?></h2>
            <p class="applicant_descr"><?php the_field("applicant_descr"); ?></p>
        </div>
    </section>

    <section class="home-its">
        <div class="container">
            <div class="home-its-box applicant-its-box">
                <h2 class="applicant-box__title"><?php the_field("applicant_branch_knowledge"); ?></h2>
                <p class="home-its-box__descr"><?php the_field("applicant_specialty"); ?></p>
                <p class="home-its-box__descr"><?php the_field("applicant_educational"); ?></p>
                <ul class="applicant-its-files_list">
                    <?php if (have_rows('applicant_files')) :
                        while (have_rows('applicant_files')) : the_row();
                            $applicant_files_name = get_sub_field('applicant_file_name');
                            $applicant_files = get_sub_field('applicant_file');
                            $applicant_files_url = $applicant_files['url'];
                            ?>
                            <?php if ($applicant_files) : ?>
                                <a href="<?php echo $applicant_files_url; ?>"
                                   class="home-history__link applicant-graduates__link ">
                                    <span><?php echo $applicant_files_name; ?></span>
                                    <svg width="24px" height="24px" class="home-history__btn-svg">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else : endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="applicant-information">
        <div class="container">
            <div class="applicant-information-inner-wrap">
                <div class="applicant-information-inner">
                    <div class="applicant-information__wrapp">
                        <?php the_field("applicant_basic_information"); ?>
                    </div>
                    <div class="applicant-information__wrapp applicant-information__wrapp-2">
                        <?php
                        if (have_rows('applicant_basic_information_files')):
                            while (have_rows('applicant_basic_information_files')) :
                                the_row();
                                $applicant_information_title = get_sub_field('applicant_basic_information_files_title');
                                $applicant_information_link_name = get_sub_field('applicant_basic_information_files_link');
                                $applicant_information_link = get_sub_field('applicant_basic_information_files_link_link');
                                $applicant_information_file = get_sub_field('applicant_basic_information_files_doc');
                                $applicant_information_file_name = get_sub_field('applicant_basic_information_files_doc_name');

                                if (is_array($applicant_information_file)) {
                                    $applicant_doc_file_url = $applicant_information_file['url'];
                                }
                                ?>

                                <h3 class="applicant-information__wrapp-title"><?php echo $applicant_information_title ?></h3>
                                <?php if ($applicant_information_link): ?>
                                <a href="<?php echo $applicant_information_link ?>"
                                   class="home-history__link applicant-graduates__link" target="_blank">
                                    <span><?php echo $applicant_information_link_name ?></span>
                                    <svg width="24px" height="24px" class="home-history__btn-svg">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                                <?php if ($applicant_information_file ): ?>
                                <a href="<?php echo $applicant_doc_file_url ?>"
                                   class="home-history__link applicant-graduates__link" target="_blank">
                                    <span><?php echo $applicant_information_file_name ?></span>
                                    <svg width="24px" height="24px" class="home-history__btn-svg">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php endwhile; else : endif; ?>
                    </div>
                </div>
                <?php
                $applicant_img = get_field("applicant_basic_information_img");
                if ($applicant_img) {
                    $applicant_image_alt = $applicant_img['alt'];
                    $applicant_image_url = $applicant_img['url'];
                }
                ?>
                <img src="<?php echo $applicant_image_url; ?>" alt="<?php echo $applicant_image_alt; ?>" class="applicant-information-inner__img">
            </div>
        </div>
    </section>

    <section class="home-history">
        <div class="container">
            <div class="home-history__title applicant-history__title"><?php the_field("applicant_title_educational"); ?></div>

            <div class="homimge-history__inner applicant__inner">
                <?php
                $applicant_image_url = '';
                $applicant_image_alt = '';

                $applicant_img = get_field("applicant_img_educational");

                if ($applicant_img) {
                    $applicant_image_url = $applicant_img['url'];
                    $applicant_image_alt = $applicant_img['alt'];
                }
                ?>

                <img class="home-history__btn-img applicant-img" src="<?php echo $applicant_image_url; ?>"
                     alt="<?php echo $applicant_image_alt; ?>">
                <div class="home-history__wrapp applicant__wrapp">
                    <div class="home-history__text"><?php the_field("applicant_text_educational"); ?></div>
                </div>

            </div>
        </div>
    </section>

    <section class="applicant-company">
        <div class="container">
            <h2 class="applicant-company__title"><?php the_field("employment_graduates_headlines_title"); ?></h2>

            <ul class="applicant-company__list">
                <?php
                if (have_rows('employment_graduates_headlines_text')):
                    while (have_rows('employment_graduates_headlines_text')) :
                        the_row();
                        $employment_company = get_sub_field('employment_graduates_headlines_text_company');
                        ?>
                        <li class="applicant-company__list-item"><?php echo $employment_company; ?></li>

                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </section>

    <section class="applicant-graduates">
        <div class="container container-applicant-graduates"
             style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.16)),url(<?php echo the_field('applicant_graduates_img'); ?>); ">
            <div class="applicant-graduates-inner">
                <div class="applicant-graduates-inner__text"><?php the_field("applicant_graduates_text"); ?></div>
                <a href="<?php the_field("applicant_graduates_link"); ?>"
                   class="home-history__link applicant-graduates__link applicant-graduates__link-center">
                    <span><?php the_field("applicant_graduates_btn"); ?></span>
                    <svg width="24px" height="24px" class="home-history__btn-svg">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>
