<?php
/*
 * Template Name: Home
*/
get_header();
?>
<main>

    <section class="home-hero" style="background-image: url(<?php echo the_field('hero_images'); ?>);">
        <div class="container">
            <h2 class="home-hero__title"><?php the_field("hero_title"); ?></h2>
        </div>
    </section>

    <section class="home-its">
        <div class="container">
            <div class="home-its-box">
                <h2 class="home-its-box__title"><?php the_field("home_its_title"); ?></h2>
                <p class="home-its-box__descr"><?php the_field("home_its_descr"); ?></p>
                <a href="#" class="home-its-box__link">
                    <svg width="48px" height="48px" class="home-its-box__link-icon">
                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-down"></use>
                    </svg>
                </a>
            </div>

            <div class="home-its__text"><?php the_field("home_its_text"); ?></div>
        </div>
    </section>

    <section class="home-why">
        <div class="container">
            <div class="home-why-title"><?php the_field("privilege_title"); ?></div>
            <ul class="home-why-list">
                <?php
                if (have_rows('privilege_list')):
                    while (have_rows('privilege_list')) : the_row();
                        $privilege_title = get_sub_field('privilege_list-tite');
                        $privilege_text = get_sub_field('privilege_list-text');
                        $privilege_img = get_sub_field('privilege_list-img');
                        if ($privilege_img) {
                            $image_alt = $privilege_img['alt'];
                            $image_url = $privilege_img['url'];
                        }
                        ?>
                        <li class="home-why-list__item">
                            <img class="home-why-list__item-img" src="<?php echo $image_url ?>"
                                 alt="<?php echo $image_alt ?>">
                            <h3 class="home-why-list__item-title"><?php echo $privilege_title ?></h3>
                            <div class="home-why-list__item-text"><?php echo $privilege_text ?></div>
                        </li>
                    <?php endwhile; else : endif; ?>

            </ul>
        </div>
    </section>

    <div class="home-history">
        <div class="container">
            <div class="home-history__title"><?php the_field("home-history_title"); ?></div>

            <div class="home-history__inner">
                <div class="home-history__wrapp">
                    <div class="home-history__text"><?php the_field("home-history_text"); ?></div>
                    <a href="<?php the_field("home-history_btn_link"); ?>" class="home-history__link">
                        <span><?php the_field("home-history_btn"); ?></span>
                        <svg width="24px" height="24px" class="home-history__btn-svg">
                            <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-arrow-mini-top"></use>
                        </svg>
                    </a>
                </div>
                <?php
                $home_history_image_url = ''; // Initialize the variable to an empty string
                $home_history_image_alt = ''; // Initialize the variable to an empty string

                $home_history_img = get_field("home-history_img");

                if ($home_history_img) {
                    $home_history_image_url = $home_history_img['url'];
                    $home_history_image_alt = $home_history_img['alt'];
                }
                ?>

                <img class="home-history__btn-img" src="<?php echo $home_history_image_url; ?>"
                     alt="<?php echo $home_history_image_alt; ?>">
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
