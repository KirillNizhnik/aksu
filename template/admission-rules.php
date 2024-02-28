<?php
/*
 * Template Name: Admission rules
*/
get_header();
?>

<section class="admission-rules">
    <div class="container">
        <h1 class="admission-rules__title title-section"><?php the_field("admission_rules_title"); ?></h1>
        <?php if (have_rows('admission_rules_repeater')): ?>
            <ul class="application-order-list">
                <?php while (have_rows('admission_rules_repeater')): the_row();
                    $admission_rules_item_title = get_sub_field('admission_rules_item_title');
                    $admission_rules_item_subtitle = get_sub_field('admission_rules_item_subtitle');
                    $admission_rules_text = get_sub_field('admission_rules_text');
                    $admission_rules_link = get_sub_field('admission_rules_link');
                    $admission_rules_link_href = get_sub_field('admission_rules_link_href');
                    ?>
                    <li class="application-order-item">
                        <?php if ($admission_rules_item_title): ?>
                            <div class="admission-rules-item-title"><?php echo $admission_rules_item_title ?></div>
                        <?php endif; ?>
                        <?php if ($admission_rules_item_subtitle): ?>
                            <div class="admission-rules-item-subtitle"><?php echo $admission_rules_item_subtitle ?></div>
                        <?php endif; ?>
                        <?php if ($admission_rules_text): ?>
                            <div class="admission-rules-item-text"><?php echo $admission_rules_text ?></div>
                        <?php endif; ?>
                        <?php if (have_rows('admission_rules_repeater_files')): ?>
                            <ul>
                                <?php while (have_rows('admission_rules_repeater_files')): the_row();
                                    $admission_rules_file = get_sub_field('admission_rules_file');
                                    $admission_rules_file_href = get_sub_field('admission_rules_file_href');
                                    if (is_array($admission_rules_file_href)) {
                                        $admission_rules_file_url = $admission_rules_file_href['url'];
                                    }
                                    ?>
                                    <li>
                                        <?php if ($admission_rules_file_href): ?>
                                            <a href="<?php echo $admission_rules_file_url ?>"
                                               class="admission-rules-link-text"><span><?php echo $admission_rules_file ?></span>
                                                <svg width="24px" height="24px" class="home-history__btn-svg">
                                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-send-2"></use>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($admission_rules_link_href): ?>
                            <a href="<?php echo $admission_rules_link_href ?>"
                               class="admission-rules-link btn-section"><?php echo $admission_rules_link ?>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
?>
