<?php
/*
 * Template Name: Scientific-schools
*/
get_header();
?>
    <main>
        <section class="scientific-schools">
            <div class="container">
                <h2 class="scientific-schools__title title-section"><?php the_field("scientific_schools_title"); ?></h2>
                <?php if (have_rows('scientific_schools_repeater')): ?>
                    <ul class="scientific-schools__wrap">
                        <?php while (have_rows('scientific_schools_repeater')): the_row();
                            $scientific_schools_title = get_sub_field('scientific_schools_publications_title'); ?>
                            <li class="scientific-schools__content-wrap">
                                <h3 class="scientific-schools__title2"><?php echo $scientific_schools_title ?></h3>
                                <?php if (have_rows('scientific_schools_item_repeater')): ?>
                                    <ul class="scientific-schools__content-wrap   scientific-schools_retreat">
                                        <?php while (have_rows('scientific_schools_item_repeater')): the_row();
                                            $scientific_schools_content_title = get_sub_field('scientific_schools_content_title');
                                            $scientific_schools_content_text = get_sub_field('scientific_schools_content_text');
                                            $scientific_schools_head_of_direction_title = get_sub_field('scientific_schools_head_of_direction_title');
                                            $scientific_schools_head_of_direction_full_name = get_sub_field('scientific_schools_head_of_direction_full_name'); ?>
                                            <li class="scientific-schools__content">
                                                <div class="scientific-schools__content-title"><?php echo $scientific_schools_content_title ?></div>
                                                <p class="scientific-schools__content-text"><?php echo $scientific_schools_content_text ?></p>
                                                <div class="scientific-schools__content-title"><?php echo $scientific_schools_head_of_direction_title ?></div>
                                                <p class="scientific-schools__content-full-name"><?php echo $scientific_schools_head_of_direction_full_name ?></p>
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