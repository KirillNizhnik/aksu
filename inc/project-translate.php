<?php
function my_custom_strings() {
    $strings = array(
        'page_error' => 'Page error',
        'page_error_text' => 'Page error text',
        'page_error_btn' => 'Page error button',
        'phone_number_head_department' => 'Номер телефону завідувача кафедри',
        'address' => 'Адреса',
        'address_link' => 'Адреса(link)',
        'maps_link' => 'Карта(link)',
        'copyright' => 'Copyright',
    );

    foreach ($strings as $name => $original_text) {
        pll_register_string($name, $original_text, 'aksu');
    }
}

add_action('after_setup_theme', 'my_custom_strings');
