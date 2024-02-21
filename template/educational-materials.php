<?php
/*
 * Template Name: Educational-materials
*/
get_header();
?>

    <main>
        <section
                style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.00) 100%),
                        url('<?php
                $image = get_field("educational_materials_background_img");
                if (!empty($image)) {
                    echo $image["url"];
                } ?>');"
                class="educational-materials-hero">
            <div class="container">
                <h2 class="educational-materials__title title-section"><?php the_field("educational_materials_title"); ?></h2>
            </div>
        </section>
        <section class="educational-materials">
            <div class="container">
                <?php if (have_rows('educational_materials_publications')): ?>
                    <ul class="educational-materials__container">
                    <?php while (have_rows('educational_materials_publications')): the_row();
                        $educational_materials_title_text = get_sub_field('educational_materials_title_text');
                        $educational_materials_text = get_sub_field('educational_materials_text');
                        $educational_materials_link = get_sub_field('educational_materials_link');
                        $educational_materials_link_text = get_sub_field('educational_materials_link_text');
                        ?>
                        <li class="educational-materials__content">
                            <h2 class="educational-materials__content-title"><?php echo $educational_materials_title_text ?></h2>
                            <p class="educational-materials__content-text"><?php echo $educational_materials_text ?></p>
                            <a href="<?php echo $educational_materials_link ?>"
                               class="educational-materials__content-link btn-section"><?php echo $educational_materials_link_text ?>
                                <svg width="32px" height="32px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                                </svg>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
        </section>
    </main>


<?php get_footer(); ?>