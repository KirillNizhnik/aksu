<?php
/*
 * Template Name: Scientific-schools
*/
get_header();
?>
    <main>
        <section class="scientific-schools">
            <div class="container scientific-schools__container">
                <h2 class="scientific-schools__title title-section"><?php the_field("scientific-schools_title"); ?></h2>
                <?php if (have_rows('scientific-schools_repeater')): ?>
                    <ul class="scientific-schools__content-wrap">
                        <?php while (have_rows('scientific-schools_repeater')): the_row();
                            $scientific_schools_title = get_sub_field('scientific-schools_title2'); ?>
                            <li class="scientific-schools__content-inner">
                                <h3 class="scientific-schools__title2"><?php echo $scientific_schools_title ?></h3>
                                <?php if (have_rows('scientific-schools_item-repeater')): ?>
                                    <ul class="scientific-schools__content-inner">
                                        <?php while (have_rows('scientific-schools_item-repeater')): the_row();
                                            $scientific_schools_content_title = get_sub_field('scientific-schools_content-title');
                                            $scientific_schools_content_text1 = get_sub_field('scientific-schools_content-text1');
                                            $scientific_schools_content_title2 = get_sub_field('scientific-schools_content-title2');
                                            $scientific_schools_content_text2 = get_sub_field('scientific-schools_content-text2'); ?>
                                            <li class="scientific-schools__content">
                                                <div class="scientific-schools__content-title"><?php echo $scientific_schools_content_title ?></div>
                                                <p class="scientific-schools__content-text1"><?php echo $scientific_schools_content_text1 ?></p>
                                                <div class="scientific-schools__content-title"><?php echo $scientific_schools_content_title2 ?></div>
                                                <p class="scientific-schools__content-text2"><?php echo $scientific_schools_content_text2 ?></p>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php
get_footer();
?>