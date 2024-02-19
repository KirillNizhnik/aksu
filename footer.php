<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aksu
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-inner-logo">
                <?php the_custom_logo(); ?>
                <div class="footer-inner-logo-title"><?php bloginfo('description'); ?></div>
            </div>
            <div>
           <ul class="footer-list__page">
               <div>
                   <li class="footer-list__page-item-parent">
                       <a href="">Про нас</a>
                   </li>
                   <li class="footer-list__page-item">
                       <a href="">Головна</a>
                   </li>
                   <li class="footer-list__page-item">
                       <a href="">Новини</a>
                   </li>
                   <li class="footer-list__page-item">
                       <a href="">Історія кафедри</a>
                   </li>
                   <li class="footer-list__page-item">
                       <a href="">Склад кафедри</a>
                   </li>
               </div>

           </ul>
            </div>
            <div class="footer-contacts">
                <div class="footer-maps">
                    <?php the_field("maps_link", 'option'); ?>
                </div>
                <div class="footer-contacts footer-contacts-wrap">
                    <div class="footer-contacts__list-tel">
                        <div class="footer-contacts-link-wrap footer-contacts-link-wrap-icon">
                            <div>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                                </svg>
                            </div>
                            <a href="tel:<?php the_field("phone_number_1_link", 'option'); ?>"
                               class="footer-contacts-link"><?php the_field("phone_number_1", 'option'); ?></a>
                        </div>
                        <div class="footer-contacts-link-wrap">
                            <div class="footer-contacts-line"></div>
                            <a href="tel:<?php the_field("phone_number_2_link", 'option'); ?>"
                               class="footer-contacts-link"><?php the_field("phone_number_2", 'option'); ?></a>
                        </div>
                        <div class="footer-contacts-link-wrap">
                            <div class="footer-contacts-line"></div>
                            <a href="tel:<?php the_field("phone_number_3_link", 'option'); ?>"
                               class="footer-contacts-link"><?php the_field("phone_number_3", 'option'); ?></a>
                        </div>
                        <div class="footer-contacts-link-wrap">
                            <div class="footer-contacts-line"></div>
                            <a href="tel:<?php the_field("phone_number_4_link", 'option'); ?>"
                               class="footer-contacts-link"><?php the_field("phone_number_4", 'option'); ?></a>
                        </div>

                    </div>
                    <div class="footer-contacts__list">
                        <a href="mailto: <?php the_field("mail", 'option'); ?>" class="footer-contacts-link">
                            <div>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-mail"></use>
                                </svg>
                            </div>
                            <span><?php the_field("mail", 'option'); ?></span></a>
                        <a href="tel:<?php the_field("phone_number_6_link", 'option'); ?>" class="footer-contacts-link">
                            <div>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                                </svg>
                            </div>
                            <span><?php the_field("phone_number_6", 'option'); ?></span></a>
                        <a href="<?php the_field("address_link", 'option'); ?>" class="footer-contacts-link">
                            <div>
                                <svg width="24px" height="24px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-geo"></use>
                                </svg>
                            </div>
                            <span><?php the_field("address", 'option'); ?></span></a>
                        <div class="footer-contacts__list-icons">
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
                                        <img src="<?php echo $image_url ?>" alt="<?php echo $image_alt ?>">
                                    </a>

                                <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright" id="year"></div>

    <script>
        let currentYear = new Date().getFullYear();

        let yearElement = document.getElementById('year');

        yearElement.textContent = '© ' + currentYear + ' Кафедра АКСУ НАУ. All Rights Reserved.';
    </script>
</footer>

<?php wp_footer(); ?>

</body>
</html>
