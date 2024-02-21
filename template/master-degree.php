<?php
/*
 * Template Name: Master's degree
*/
get_header();
?>
<main>
    <section class="home-hero" style="background-image: url(<?php echo the_field('master_img_banner'); ?>);">
        <div class="container">
            <h2 class="home-hero__title master__title"><?php the_field("master_title"); ?></h2>
        </div>
    </section>


    <section class="home-its master-its">
        <div class="container">
            <div class="home-its-box ">
                <?php the_field("master_mini_descr"); ?>
                <a href="#docs" class="home-its-box__link master-its-box__link">
                    <svg width="48px" height="48px" class="home-its-box__link-icon">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <section class="home-history master-inf">
        <div class="container">
            <h2 class="home-history__title applicant-history__title"><?php the_field("master_title_about"); ?></h2>

            <div class="homimge-history__inner applicant__inner">

                <div class="home-history__wrapp applicant__wrapp">
                    <div class="home-history__text"><?php the_field("master_text_about"); ?></div>
                </div>
                <?php
                $master_image_url = '';
                $master_image_alt = '';

                $master_img = get_field("master_img_about");

                if ($master_img) {
                    $master_image_url = $master_img['url'];
                    $master_image_alt = $master_img['alt'];
                }
                ?>
                <img class="home-history__btn-img applicant-img" src="<?php echo $master_image_url; ?>"
                     alt="<?php echo $master_image_alt; ?>">


            </div>
        </div>
    </section>

    <section class="master-docs" id="docs">
        <div class="container">
            <h2 class="master-docs__title"><?php the_field("master_title_docs"); ?></h2>
            <ul class="master-docs__list">
                <?php if (have_rows('master_docs')) :
                    while (have_rows('master_docs')) : the_row();
                        $master_doc = get_sub_field('master_doc');
                        ?>
                        <li class="master-docs__list-item"><?php echo $master_doc; ?></li>
                    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </section>

    <section class="master-statements">
        <div class="container">
            <div class="master-statements__list">
                <?php if (have_rows('master_statements_list')) :
                    while (have_rows('master_statements_list')) :
                        the_row();
                        $master_statements_title = get_sub_field('master_statements_item_title');
                        $master_statements_text = get_sub_field('master_statements_item_text');
                        ?>
                        <div class="master-statements__list-item">
                            <h2 class="master-statements-item__title"><?php echo $master_statements_title; ?></h2>
                            <div class="master-statements-item__files">
                                <h3 class="master-statements-item__files-doc-name"></h3>
                                <?php if (have_rows('master_statements_item_files')) :
                                    while (have_rows('master_statements_item_files')) :
                                        the_row();
                                        $master_statements_files = get_sub_field('master_statements_item_files_doc');
                                        $master_statements_doc = $master_statements_files['url'];
                                        $master_statements_files_name = get_sub_field('master_statements_item_files_doc_name');
                                        ?>
                                        <a href="<?php echo $master_statements_doc; ?>" class="master-statements-item__files-doc" target="_blank">
                                            <span><?php echo $master_statements_files_name; ?></span>
                                            <svg width="24px" height="24px"
                                                 class="home-history__btn-svg">
                                                <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send-2"></use>
                                            </svg>
                                        </a>
                                    <?php endwhile;
                                else :
                                endif; ?>
                            </div>
                            <div class="master-statements-item__text"><?php echo $master_statements_text; ?></div>
                        </div>
                    <?php endwhile;
                else :
                endif; ?>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>
