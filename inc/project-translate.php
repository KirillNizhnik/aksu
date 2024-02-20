<?php
function my_custom_strings() {
    $strings = array(
//        'welcome_message' => 'Welcome to our site!',
//        'about_us'        => 'About Us',
        'page_error' => 'Page error'
    );

    foreach ($strings as $name => $original_text) {
        pll_register_string($name, $original_text, 'aksu');
    }
}

add_action('after_setup_theme', 'my_custom_strings');
