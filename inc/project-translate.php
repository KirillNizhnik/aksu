<?php
if (!function_exists('my_strings')) {
	function my_strings() {
		$strings = array(
			'page_error'                   => 'Page error',
			'page_error_text'              => 'Page error text',
			'page_error_btn'               => 'Page error button',
			'phone_number_head_department' => 'Номер телефону завідувача кафедри',
			'address'                      => 'Адреса',
			'address_link'                 => 'Адреса(link)',
			'maps_link'                    => 'Карта(link)',
			'copyright'                    => 'Copyright',
			'news_title'                   => 'News title',
			'all_news_title'               => 'All news title',
			'send_btn'                     => 'Завантажити',
			'learn_more_btn'               => 'Дізнатись більше',
			'other_news_title'             => 'Other news title',
			'read_more'                    => 'Читати більше',
			'conferences_title'            => 'Conferences title',
			'teacher_title'                => 'Teacher title',
			'return_btn'                   => 'Return button',
		);

		foreach ( $strings as $name => $original_text ) {
			pll_register_string( $name, $original_text, 'aksu' );
		}
	}

	add_action( 'after_setup_theme', 'my_strings' );
}