<?php
/*
 * Template Name: Contacts
*/
get_header();
?>

<main>
    <section class="contacts">
        <div class="container">
            <div class="contacts__container">
                <h2 class="contacts__title title-section">
                    <?php the_field('contacts_content_title') ?>
                </h2>
                <div class="contacts__content">
                    <div class="contacts__content-inner">
                        <div class="contacts__content-title">
                            <?php the_field('chair_title') ?>
                        </div>
                        <div class="contacts__phone-list">
                            <div class="contacts__phone-link-wrap contacts__phone-link-wrap-icon">
                                <div>
                                    <svg width="24px" height="24px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                                    </svg>
                                </div>
                                <a href="tel:<?php the_field("phone_number_1_link", 'option'); ?>"
                                   class="contacts-link"><?php the_field("phone_number_1", 'option'); ?></a>
                            </div>
                            <div class="contacts__phone-link-wrap">
                                <div class="contacts__line"></div>
                                <a href="tel:<?php the_field("phone_number_2_link", 'option'); ?>"
                                   class="contacts-link"><?php the_field("phone_number_2", 'option'); ?></a>
                            </div>
                            <div class="contacts__phone-link-wrap">
                                <div class="contacts__line"></div>
                                <a href="tel:<?php the_field("phone_number_3_link", 'option'); ?>"
                                   class="contacts-link"><?php the_field("phone_number_3", 'option'); ?></a>
                            </div>
                            <div class="contacts__phone-link-wrap">
                                <div class="contacts__line"></div>
                                <a href="tel:<?php the_field("phone_number_4_link", 'option'); ?>"
                                   class="contacts-link"><?php the_field("phone_number_4", 'option'); ?></a>
                            </div>
                        </div>
                        <div class="contacts__link-list">
                            <div class="contacts__link-item">
                                <div>
                                    <svg width="24px" height="24px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-mail"></use>
                                    </svg>
                                </div>
                                <a href="mailto: <?php the_field("mail", 'option'); ?>"
                                   class="contacts-link"><?php the_field("mail", 'option'); ?></a>
                            </div>
                            <div class="contacts__link-item">
                                <div>
                                    <svg width="24px" height="24px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                                    </svg>
                                </div>
                                <a href="tel:<?php the_field("phone_number_6_link", 'option'); ?>"
                                   class="contacts-link">
                                    <?php the_field("phone_number_6", 'option'); ?></a>
                            </div>
                            <div class="contacts__link-item">
                                <div>
                                    <svg width="24px" height="24px">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-geo"></use>
                                    </svg>
                                </div>
                                <a href="<?php the_field("address_link", 'option'); ?>" class="contacts-link">
                                    <?php the_field("address", 'option'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="contacts__social-list">
                            <?php
                            if (have_rows('social_link_list', 'option')):
                                while (have_rows('social_link_list', 'option')) : the_row();
                                    $social_link = get_sub_field('social_link', 'option');
                                    $social_icon = get_sub_field('social_link_list_icon', 'option');
                                    if ($social_icon) {
                                        $image_alt = $social_icon['alt'];
                                        $image_url = $social_icon['url'];
                                    }
                                    ?>
                                    <a href="<?php echo "$social_link" ?>">
                                        <img class="contacts__social-icon" src="<?php echo $image_url ?>"
                                             alt="<?php echo $image_alt ?>">
                                    </a>
                                <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                    <div class="contacts__content-inner">
                        <div class="contacts__content-title"><?php the_field('department_head_title') ?></div>
                        <div class="contacts__content-text1 title-section"><?php the_field('department_head_full_name') ?></div>
                        <div class="contacts__content-text2"><?php the_field('contacts_scientific_degree') ?></div>
                        <div class="contacts__phone-link-wrap contacts__phone-link-wrap-icon">
                            <div>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                                </svg>
                            </div>
                            <a href="tel:<?php the_field("phone_number_5_link", 'option'); ?>"
                               class="contacts-link"><?php the_field("phone_number_5", 'option'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="contacts-maps">
                    <?php the_field("maps_link", 'option'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
