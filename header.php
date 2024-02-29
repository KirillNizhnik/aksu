<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aksu
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#D3E3F7">
    <title><?php bloginfo( 'name' );
		echo " | ";
		bloginfo( 'description' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<?php wp_head(); ?>
</head>

<body class="body">
<header class="header">
    <div class="container">
        <div class="header-contacts">
            <div class="header-contacts__list">
                <div>
                    <svg width="24px" height="24px">
                        <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-phone"></use>
                    </svg>
                </div>
                <a href="tel:<?php the_field( "phone_number_1_link", 'option' ); ?>"
                   class="header-contacts-link"><?php the_field( "phone_number_1", 'option' ); ?></a>
                <div class="header-contacts-line"></div>
                <a href="tel:<?php the_field( "phone_number_2_link", 'option' ); ?>"
                   class="header-contacts-link"><?php the_field( "phone_number_2", 'option' ); ?></a>
                <div class="header-contacts-line"></div>
                <a href="tel:<?php the_field( "phone_number_3_link", 'option' ); ?>"
                   class="header-contacts-link"><?php the_field( "phone_number_3", 'option' ); ?></a>
                <div class="header-contacts-line"></div>
                <a href="tel:<?php the_field( "phone_number_4_link", 'option' ); ?>"
                   class="header-contacts-link"><?php the_field( "phone_number_4", 'option' ); ?></a>
            </div>
            <div class="header-contacts__list">
                <div>
                    <svg width="24px" height="24px">
                        <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-mail"></use>
                    </svg>
                </div>
                <a href="mailto: <?php the_field( "mail", 'option' ); ?>"
                   class="header-contacts-link"><?php the_field( "mail", 'option' ); ?></a>
                <div class="header-contacts-line"></div>
                <a href="tel:<?php the_field( "phone_number_6_link", 'option' ); ?>"
                   class="header-contacts-link"><?php echo pll__( 'Номер телефону завідувача кафедри', 'aksu' ); ?></a>
            </div>
            <div class="header-contacts__list-icons">
				<?php
				if ( have_rows( 'social_link_list', 'option' ) ):
					while ( have_rows( 'social_link_list', 'option' ) ) : the_row();
						$social_link = get_sub_field( 'social_link', 'option' );
						$social_icon = get_sub_field( 'social_link_list_icon', 'option' );
						if ( $social_icon ) {
							$image_alt = $social_icon['alt'];
							$image_url = $social_icon['url'];
						}
						?>

                        <a href="<?php echo "$social_link" ?>">
                            <img src="<?php echo $image_url ?>" alt="<?php echo $image_alt ?>">
                        </a>

					<?php endwhile; else : endif; ?>
            </div>
            <?php
                $current_locale = get_locale();
                $language_code = substr($current_locale, 0, 2);
                $languages = pll_languages_list();
                $key = array_search($language_code, $languages);
                if ($key !== false) {
                    unset($languages[$key]);
                }
                ?>
	        <?php foreach ($languages as $language):
	        $current_post_id = get_the_ID();
	        $translated_post_id = pll_get_post($current_post_id, $language);
	        if (is_post_type_archive()){
                $translated_post_url = '/';
            }
            elseif($translated_post_id){
		        $translated_post_url = get_permalink($translated_post_id);}
	        else{
		        $translated_post_url = get_home_url();
	        }
	        ?>
                <a class="header-contacts__lang" href="<?= $translated_post_url ?>">
		        <?= strtoupper($language) ?>
            </a>
	        <?php endforeach; ?>
            <div class="header-contacts-search">
                <input class="header-contacts-search-input" type="text" placeholder="Search">
                <button class="header-contacts-search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18.75 18.75L15.4404 15.4464M15.4404 15.4464C16.5227 14.3656 17.1923 12.8716 17.1923 11.2212C17.1923 7.92338 14.5189 5.25 11.2212 5.25C7.92338 5.25 5.25 7.92338 5.25 11.2212C5.25 14.5189 7.92338 17.1923 11.2212 17.1923C12.8685 17.1923 14.36 16.5252 15.4404 15.4464Z"
                              stroke="#595D62" stroke-width="0.75" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="header-desktop">
            <div class="menu">
                <ul class="menu-inner">

					<?php
					$menu_name = 'header_menu';
                    $count = new Count_Walker_Nav_Menu();
					$args = array(
						'theme_location'  => $menu_name,
						'walker'          => $count,
						'container'       => 'ul',
						'container_class' => 'header-mob-dropdown__list',
						'menu_class'      => 'footer-list__page',
						'items_wrap'      => '%3$s',
					);
					$menu = wp_nav_menu( $args );
                    $countMainElem = $count->getCount()/2;
					$walker = new Header_Walker_Nav_Menu($countMainElem);
					$args = array(
						'theme_location'  => $menu_name,
						'walker'          => $walker,
						'container'       => 'ul',
						'container_class' => 'header-mob-dropdown__list',
						'menu_class'      => 'footer-list__page',
						'items_wrap'      => '%3$s',
					);
					wp_nav_menu( $args );
					?>
                </ul>
            </div>


        </div>
        <div class="header-mob">
            <div class="header-mob-contacts-tablet">
				<?php
				$item_id      = 31;
				$item_classes = array(
					'menu-item-type-post_type',
					'menu-item',
					'menu-item-type-post_type',
					'menu-item-object-page',
					'custom-menu-item'
				);
				$item_url     = get_field('contact_links','options');
				$item_title   = get_field('contact_label', 'options');

				$output = '<li id="menu-item-' . $item_id . '" class="' . implode( ' ', $item_classes ) . '">';
				$output .= '<a href="' . $item_url . '">' . $item_title . '</a>';
				$output .= '</li>';

				echo $output;
				?>

            </div>
            <div class="header-mob-logo">
				<?php the_custom_logo(); ?>
            </div>
            <buttons class="header-mob-btn js-open-menu" data-modal-open>
                <span></span>
                <span></span>
                <span></span>
            </buttons>

        </div>
    </div>
</header>
<div class="header-mob-dropdown backdrop is-hidden mobile-menu" data-modal>
    <div class="header-mob-dropdown-scroll">
        <div class="container">
            <div class="header-mob">
                <div class="header-mob-contacts-tablet">
					<?php
					$item_id      = 31;
					$item_classes = array(
						'menu-item-type-post_type',
						'menu-item',
						'menu-item-type-post_type',
						'menu-item-object-page',
						'custom-menu-item'
					);
					$item_url     = get_field('contact_links','options');
					$item_title   = get_field('contact_label', 'options');

					$output = '<li id="menu-item-' . $item_id . '" class="' . implode( ' ', $item_classes ) . '">';
					$output .= '<a href="' . $item_url . '">' . $item_title . '</a>';
					$output .= '</li>';

					echo $output;
					?>

                </div>
                <div class="header-mob-logo">
					<?php the_custom_logo(); ?>
                </div>
                <buttons class="header-mob-btn js-close-menu" data-modal-close>
                    <svg width="34px" height="34px">
                        <use href="<?php echo bloginfo( 'template_url' ); ?>/assets/images/icons/icons.svg#icon-close"></use>
                    </svg>
                </buttons>

            </div>
        </div>
        <div class="header-contacts-search header-contacts-search-mob header-mob-dropdown__list-item-page-parent">
            <input class="header-contacts-search-input header-dropdown-contacts-search-input" type="text"
                   placeholder="Search">
            <button class="header-contacts-search-btn header-dropdown-contacts-search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18.75 18.75L15.4404 15.4464M15.4404 15.4464C16.5227 14.3656 17.1923 12.8716 17.1923 11.2212C17.1923 7.92338 14.5189 5.25 11.2212 5.25C7.92338 5.25 5.25 7.92338 5.25 11.2212C5.25 14.5189 7.92338 17.1923 11.2212 17.1923C12.8685 17.1923 14.36 16.5252 15.4404 15.4464Z"
                          stroke="#595D62" stroke-width="0.75" stroke-linecap="round"></path>
                </svg>
            </button>
        </div>
		<?php
		echo '<ul class="header-mob-dropdown__list">';
		wp_nav_menu( array(
			'theme_location'  => 'header_mobile_menu',
			'walker'          => new Header_Mobile_Walker_Nav_Menu(),
			'container'       => 'ul',
			'container_class' => 'header-mob-dropdown__list',
			'menu_class'      => 'footer-list__page',
			'items_wrap'      => '%3$s',
		) );
		echo '</ul>'; ?>
        <!--        <ul class="header-mob-dropdown__list">-->
        <!--            <li class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent">-->
        <!--                <a href="">Про нас</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href=""> Новини</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Історія кафедри</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Склад кафедри</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Наші випускники</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Контакти</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent">-->
        <!--                <a href="">Студенту</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Дисципліни та силабуси</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href=""> Навчальні матеріали</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent">-->
        <!--                <a href="">Абітурієнту</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href=""> Сторінка абітурієнта</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Спеціальності</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Правила прийому</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Магістратура</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent">-->
        <!--                <a href="">Наука</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Наукові школи та напрямки</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Обрані публікації</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Правила прийому</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Конференції</a>-->
        <!--            </li>-->
        <!--            <li class="header-mob-dropdown__list-item ">-->
        <!--                <a href="">Лабораторії</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <div class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent header-mob-dropdown__bottom">
            <div class="header-contacts__list-icons header-mob-dropdown__list-list-icons">
				<?php
				if ( have_rows( 'social_link_list', 'option' ) ):
					while ( have_rows( 'social_link_list', 'option' ) ) : the_row();
						$social_link = get_sub_field( 'social_link', 'option' );
						$social_icon = get_sub_field( 'social_link_list_icon', 'option' );
						if ( $social_icon ) {
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

