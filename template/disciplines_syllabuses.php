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
            <div class="disciplines-inner"> <?php
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

                <div class="disciplines-name">
                    <div class="disciplines-name-inner">
                        <div class="disciplines-name-inner-num">
                            <?php echo $disciplines_syllabuses_num ?>
                        </div>
                        <div>
                            <div class="disciplines-name-inner-name">
                                <?php echo $disciplines_syllabuses_name ?>
                            </div>
                            <div class="disciplines-name-inner-send"
                                 data-src="<?php echo $disciplines_syllabuses_file_url; ?>">
                                <span><?php echo $disciplines_syllabuses_file_name; ?></span>
                                <svg width="24px" height="24px" class="">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                </svg>
                            </div>
                            <div class="disciplines-name-inner-descr"><?php echo $disciplines_syllabuses_text ?></div>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="disciplines-list">
                    <?php
                    if (have_rows('disciplines_syllabuses_category_file_list')):
                    while (have_rows('disciplines_syllabuses_category_file_list')) :
                    the_row();
                    $disciplines_category_file_name_1 = get_sub_field('disciplines_syllabuses_category_file_list_name_1');
                    $disciplines_category_file_name_2 = get_sub_field('disciplines_syllabuses_category_file_list_name_2');


                    $name_file = get_sub_field('disciplines_syllabuses_category_file_list_name');
                    $author_file = get_sub_field('disciplines_syllabuses_category_file_list_author');
                    $doc_file = get_sub_field('disciplines_syllabuses_category_file_list_file');

                    $doc_file_url = $doc_file['url'];
                    $doc_file_name = basename($doc_file_url);

                    ?>

<!--                    <div class="disciplines-descr">-->
<!--                        <div class="disciplines-descr-text-1">--><?php //echo $disciplines_category_file_name_1; ?><!--</div>-->
<!--                        <div class="disciplines-descr-text-2">--><?php //echo $disciplines_category_file_name_2; ?><!--</div>-->
<!--                    </div>-->


                        <li class="disciplines-list-item">
                            <div class="disciplines-list-item-title"><?php echo $name_file; ?>
                            </div>
                            <div class="disciplines-list-item-author"><?php echo $author_file; ?>
                            </div>
                            <div class="disciplines-list-item-send" data-src="<?php echo $doc_file_url; ?>">
                                <span><?php echo $doc_file_name; ?></span>
                                <svg width="24px" height="24px" class="">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                </svg>
                            </div>
                        </li>
                        <?php endwhile; else :
                        endif; ?>
                    </ul>
                </div>

            </div>

            <?php endwhile; else :
            endif; ?>


            <!--            <div class="disciplines-inner">-->
            <!--                <div class="disciplines-name">-->
            <!--                    <div class="disciplines-name-inner">-->
            <!--                        <div class="disciplines-name-inner-num">-->
            <!--                            1-->
            <!--                        </div>-->
            <!--                        <div>-->
            <!--                            <div class="disciplines-name-inner-name">Освітньо-професійна программа 2022р. рівня-->
            <!--                                “Бакалавр”-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-name-inner-send">-->
            <!--                                <span>Завантажити</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                            <div class="disciplines-name-inner-descr">Перелік дисциплін та силабусів 1-8 семестрів</div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="disciplines-descr">-->
            <!--                        <div class="disciplines-descr-text-1">ОБОВ’ЯЗКОВІ КОМПОНЕНТИ</div>-->
            <!--                        <div class="disciplines-descr-text-2">Цикл дисциплін професійної підготовки</div>-->
            <!--                    </div>-->
            <!--                    <ul class="disciplines-list">-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!---->
            <!---->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="disciplines-descr">-->
            <!--                        <div class="disciplines-descr-text-1">ОБОВ’ЯЗКОВІ КОМПОНЕНТИ</div>-->
            <!--                        <div class="disciplines-descr-text-2">Цикл дисциплін професійної підготовки</div>-->
            <!--                    </div>-->
            <!--                    <ul class="disciplines-list">-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!---->
            <!---->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->


            <!--            <div class="disciplines-inner">-->
            <!--                <div class="disciplines-name">-->
            <!--                    <div class="disciplines-name-inner">-->
            <!--                        <div class="disciplines-name-inner-num">-->
            <!--                            1-->
            <!--                        </div>-->
            <!--                        <div>-->
            <!--                            <div class="disciplines-name-inner-name">Освітньо-професійна программа 2022р. рівня-->
            <!--                                “Бакалавр”-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-name-inner-send">-->
            <!--                                <span>Завантажити</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                            <div class="disciplines-name-inner-descr">Перелік дисциплін та силабусів 1-8 семестрів</div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="disciplines-descr">-->
            <!--                        <div class="disciplines-descr-text-1">ОБОВ’ЯЗКОВІ КОМПОНЕНТИ</div>-->
            <!--                        <div class="disciplines-descr-text-2">Цикл дисциплін професійної підготовки</div>-->
            <!--                    </div>-->
            <!--                    <ul class="disciplines-list">-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!---->
            <!---->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="disciplines-descr">-->
            <!--                        <div class="disciplines-descr-text-1">ОБОВ’ЯЗКОВІ КОМПОНЕНТИ</div>-->
            <!--                        <div class="disciplines-descr-text-2">Цикл дисциплін професійної підготовки</div>-->
            <!--                    </div>-->
            <!--                    <ul class="disciplines-list">-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="disciplines-list-item">-->
            <!--                            <div class="disciplines-list-item-title">1. Комп'ютерні технології та програмування</div>-->
            <!--                            <div class="disciplines-list-item-author">(доцент Безкоровайний Ю.М.) семестр 1, екзамен.-->
            <!--                            </div>-->
            <!--                            <a href="" class="disciplines-list-item-send">-->
            <!--                                <span>Silabus до дисципліни (pdf)</span>-->
            <!--                                <svg width="24px" height="24px" class="">-->
            <!--                                    <use href="-->
            <?php //echo bloginfo('template_url'); ?><!--/assets/images/icons/icons.svg#icon-send"></use>-->
            <!--                                </svg>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!---->
            <!---->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
</main>
<?php
get_footer();
?>
