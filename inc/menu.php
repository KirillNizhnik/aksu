<?php
function menu_setup(): void {
	register_nav_menus(
		array(
			'header_menu'        => 'Головне меню',
			'header_mobile_menu' => 'Мобільне головне меню',
			'footer_menu'        => 'Підвал меню'


		)
	);
}

add_action( 'after_setup_theme', 'menu_setup' );

class Footer_Walker_Nav_Menu extends Walker_Nav_Menu {
	private bool $mainLevelStarted = false;



	public function start_lvl( &$output, $depth = 0, $args = null ): void {

	}

	public function end_lvl( &$output, $depth = 0, $args = null ): void {
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $current_object_id = 0 ): void {
		if ( $depth === 0 ) {
			if ( $this->mainLevelStarted === true ) {
				$this->mainLevelStarted = false;
				$output                 .= '</ul>';
			}
			if ( $this->mainLevelStarted === false ) {
				$this->mainLevelStarted = true;
				$output                 .= ' <ul class="footer-list__page">';
			}

			$output .= '<li class="footer-list__page-item-parent">';
			$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		} elseif ( $depth === 1 ) {
			$output .= '<li class="footer-list__page-item">';
			$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}

	}

	public function end_el( &$output, $item, $depth = 0, $args = null ): void {
		if ( $depth === 0 ) {
			$output .= '</li>';
		} elseif ( $depth === 1 ) {
			$output .= '</li>';
		}

	}
}

class Header_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ): void {

	}

	public function end_lvl( &$output, $depth = 0, $args = null ): void {
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $current_object_id = 0 ): void {
		if ( $depth === 0 ) {


			$output .= '<li class="header-mob-dropdown__list-item header-mob-dropdown__list-item-page-parent">';
			$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		} elseif ( $depth === 1 ) {
			$output .= '<li class="header-mob-dropdown__list-item">';
			$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}

	}

	public function end_el( &$output, $item, $depth = 0, $args = null ): void {
		if ( $depth === 0 ) {
			$output .= '</li>';
		} elseif ( $depth === 1 ) {
			$output .= '</li>';
		}

	}
}

class Header_Walker_Nav_Menu extends Walker_Nav_Menu {
	private bool $mainLevelStarted = false;
	private int $count = 0;

	private int $count_main_elements;


	public function __construct(int $count_main_elements = 0) {
		$this->count_main_elements = $count_main_elements;
	}

	public function start_lvl( &$output, $depth = 0, $args = null ): void {
	}

	public function end_lvl( &$output, $depth = 0, $args = null ): void {
		if ( $depth === 0 ) {
			$output .= '</div>';
		}
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $current_object_id = 0 ): void {

		if ( $depth === 0 ) {
			if ($this->count_main_elements === $this->count){
				$home = get_home_url();
				$logo_url = get_custom_logo();
				$output.='<li class="menu-item-type-logo"><a href="'. $home . '" class="custom-logo-link"
                                                       rel="home"> '. $logo_url . '
                                    </a></li>';
			}
			$this->count++;
			$has_children = in_array('menu-item-has-children', $item->classes);
			$plank = null;
			if ($has_children){
				$plank = '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 19 22" fill="none">
                                <path d="M5 9.5L10.0008 14.08L15 9.5" stroke="#010E11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>';
			}
			if ( $this->mainLevelStarted === true ) {
				$this->mainLevelStarted = false;
				$output                 .= '</li>';
			}
			if ( $this->mainLevelStarted === false ) {
				$this->mainLevelStarted = true;
				$output                 .= '<li id="" class="menu-item-type-post_type custom-menu-item">';
			}
			$output .= '<a href="' . $item->url . '">
                            <span>' . $item->title . '</span>'. $plank .'
                        </a>';
			if ($has_children)	{
				$output .= ' <div class="menu-item__dropdown">';

						$output .= '<div class="menu-item__dropdown-item">
                                <a href="' . $item->url . '" class="menu-item__dropdown-item-parent">' . $item->title . '</a>
                      	</div>';}
		} elseif ( $depth === 1 ) {
			$output .= '<div class="menu-item__dropdown-item">
                                <a href="' . $item->url . '" class="menu-item__dropdown-item">' . $item->title . '</a>
                      </div>';
		}

	}

	public function end_el( &$output, $item, $depth = 0, $args = null ): void {
		if ( $depth === 0 ) {
		} elseif ( $depth === 1 ) {}

	}
}

class Count_Walker_Nav_Menu extends Walker_Nav_Menu {
	private bool $mainLevelStarted = false;
	private int $count = 0;

	public function start_lvl( &$output, $depth = 0, $args = null ): void {
	}

	public function end_lvl( &$output, $depth = 0, $args = null ): void {

	}


	public function start_el( &$output, $item, $depth = 0, $args = null, $current_object_id = 0 ): void {

		if ( $depth === 0 ) {
			$this->count++;
		}

	}

	public function end_el( &$output, $item, $depth = 0, $args = null ): void {
		if ( $depth === 0 ) {
		} elseif ( $depth === 1 ) {}

	}


	public function getCount() {
		return $this->count;

	}


}




