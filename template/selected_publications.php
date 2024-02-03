<?php
/*
 * Template Name: Selected publications
*/
get_header();
?>

<section class="home-hero" style="background-image: url(<?php echo the_field('publications_img'); ?>);">
    <div class="container">
        <h2 class="home-hero__title"><?php the_field("publications_title"); ?></h2>
    </div>
</section>

<section class="publications">
    <div class="container">
        <div> <?php
            if (have_rows('publications_list')):
                while (have_rows('publications_list')) :
                    the_row();
                    $publications_age = get_sub_field('publications_list_age');
                    $publications_text = get_sub_field('publications_list_text');
                    ?>
                    <div class="publications-inner">
                    <h2 class="publications-inner__title"><?php if ($publications_age): echo $publications_age; endif; ?></h2>
                    <h4 class="publications-inner__text"><?php if($publications_text) : echo $publications_text; endif; ?></h4>
                    <ul class="publications-list">
                        <?php
                        if (have_rows('publications_list_list')):
                            while (have_rows('publications_list_list')) : the_row();
                                $publications_title = get_sub_field('publications_list_list_title');
                                $checkedUaFile =get_sub_field('publications_on_off_ua');
                                $checkedEnFile =get_sub_field('publications_on_off_en');

                                ?>

                                <li class="publications-list__item">
                                    <div class="publications-list__item-title"><?php if ($publications_title) : echo $publications_title; endif; ?></div>

                                    <?php
                                        if ($checkedEnFile || $checkedUaFile):

                                        ?>
                                        <div class="publications-list__item-files">
                                            <?php if ($checkedUaFile) : ?>
                                                <?php
                                                $publications_files_ua = get_field('publications_ukrainian_file');
                                                ?>
                                            <div data-src="<?php echo $publications_files_ua['url']; ?>" class="publications-list__item__file btn-section" >
                                                <span><?php echo basename($publications_files_ua); ?></span>
                                                <svg width="24px" height="24px" class="home-history__btn-svg">
                                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                                </svg>
                                            </div>
                                            <?php endif;
                                            if ($checkedEnFile) :?>
                                            <div class="publications-list__item__file btn-section">
                                                <span>Save2</span>
                                                <svg width="24px" height="24px" class="home-history__btn-svg">
                                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send"></use>
                                                </svg>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                    endif;
                                    ?>

                                </li>

                            <?php endwhile; else : endif; ?>
                    </ul>

                    </div><?php endwhile;
            else :
            endif; ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>
