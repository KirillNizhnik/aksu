<?php
/*
 * Template Name: Disciplines and syllabuses
*/
get_header();
?>
<main>

    <section class="home-hero disciplines_hero"
             style="background-image: url(<?php echo the_field('disciplines_syllabuses_images'); ?>);">
        <div class="container">
            <h2 class="home-hero__title disciplines_hero__title">
                <div><?php the_field("disciplines_syllabuses_title"); ?></div>
                <div class="disciplines_hero_title-age"><?php the_field("disciplines_syllabuses_title_age"); ?></div>
                <div class="disciplines_hero_title-spec"><?php the_field("disciplines_syllabuses_title_spec"); ?></div>
            </h2>
        </div>
    </section>

    <div class="disciplines_section">
        <div class="container">
            <div class="disciplines-wrap">
                <?php
                if (have_rows('disciplines_syllabuses_category')):
                    while (have_rows('disciplines_syllabuses_category')) :
                        the_row();
                        $disciplines_syllabuses_num = get_sub_field('disciplines_syllabuses_category_num');
                        $disciplines_syllabuses_name = get_sub_field('disciplines_syllabuses_category_name');
                        $disciplines_syllabuses_text = get_sub_field('disciplines_syllabuses_category_descr');

                        $disciplines_syllabuses_file_array = get_sub_field('disciplines_syllabuses_category_file');
                        $disciplines_syllabuses_file_url = $disciplines_syllabuses_file_array['url'];
                        $disciplines_syllabuses_file_name = basename($disciplines_syllabuses_file_url);
                        ?>
                        <div class="disciplines-inner">
                            <div class="disciplines-name">
                                <div class="disciplines-name-inner">
                                    <div class="disciplines-name-inner-num">
                                        <?php echo $disciplines_syllabuses_num ?>
                                    </div>
                                    <div>
                                        <div class="disciplines-name-inner-name">
                                            <?php echo $disciplines_syllabuses_name ?>
                                        </div>
                                        <a class="disciplines-name-inner-send"
                                           href="<?php echo $disciplines_syllabuses_file_url; ?>" target="_blank">
                                            <span><?php echo $disciplines_syllabuses_file_name; ?></span>
                                            <svg width="24px" height="24px" class="disciplines-name-inner-send-svg">
                                                <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                            </svg>
                                        </a>
                                        <div class="disciplines-name-inner-descr"><?php echo $disciplines_syllabuses_text ?></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <?php
                                if (have_rows('disciplines_syllabuses_category_file_list_list')):
                                    while (have_rows('disciplines_syllabuses_category_file_list_list')) :
                                        the_row();
                                        $disciplines_category_file_name_title = get_sub_field('disciplines_syllabuses_category_file_list_list_title');
                                        $disciplines_category_file_name_subtitle = get_sub_field('disciplines_syllabuses_category_file_list_list_subtitle');

                                        ?>
                                        <div class="disciplines-descr">
                                            <div class="disciplines-descr-text-1"><?php echo $disciplines_category_file_name_title; ?></div>
                                            <div class="disciplines-descr-text-2"><?php echo $disciplines_category_file_name_subtitle; ?></div>
                                            <button class="btn-section disciplines-descr__link">
                                                <span><?php echo pll__('Дізнатись більше', 'aksu'); ?></span>
                                                <svg width="24px" height="24px" class="disciplines-name-inner-send-svg">
                                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                                </svg>
                                            </button>
                                        </div>

                                        <ul class="disciplines-list disciplines-syllabuses-dropdown">
                                            <?php
                                            if (have_rows('disciplines_syllabuses_category_file_list')):
                                                while (have_rows('disciplines_syllabuses_category_file_list')) :
                                                    the_row();
                                                    $name_file = get_sub_field('disciplines_syllabuses_category_file_list_name');
                                                    $author_file = get_sub_field('disciplines_syllabuses_category_file_list_author');
                                                    $doc_file = get_sub_field('disciplines_syllabuses_category_file_list_file');

                                                    $doc_file_url = $doc_file['url'];
                                                    $doc_file_name = basename($doc_file_url);
                                                    ?>

                                                    <li class="disciplines-list-item">
                                                        <div class="disciplines-list-item-title"><?php echo $name_file; ?></div>
                                                        <div class="disciplines-list-item-author"><?php echo $author_file; ?></div>
                                                        <a class="disciplines-list-item-send disciplines-name-inner-send"
                                                           href="<?php echo $doc_file_url; ?>"
                                                           target="_blank">
                                                            <span><?php echo $doc_file_name; ?></span>
                                                            <svg width="24px" height="24px"
                                                                 class="disciplines-name-inner-send-svg">
                                                                <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                <?php endwhile; else : endif; ?>
                                        </ul>


                                    <?php endwhile; else : endif; ?>

                            </div>
                        </div>
                    <?php endwhile;
                else :
                endif; ?>
            </div>
        </div>
</main>
<?php
get_footer();
?>
