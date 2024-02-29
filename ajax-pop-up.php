<?php
function handle_ajax_request() {
    if (isset($_POST['action']) && $_POST['action'] === 'fetch_graduate_data') {
        // Get the graduate ID from the AJAX request
        $graduate_id = isset($_POST['graduate_id']) ? intval($_POST['graduate_id']) : 0;

        $graduate_post = get_post($graduate_id);

        $response = array(
            'graduateImgSrc' => get_the_post_thumbnail_url($graduate_id, 'thumbnail'),
            'graduateTitle' => $graduate_post->post_title,
            'graduateSubtitle' => $graduate_post->post_excerpt,
            'graduateText' => get_field('our_graduates_single_text_pc', $graduate_id),

        );

        wp_send_json($response);
    }
}

// Hook the function to handle AJAX requests
add_action('wp_ajax_fetch_graduate_data', 'handle_ajax_request');
add_action('wp_ajax_nopriv_fetch_graduate_data', 'handle_ajax_request'); // For non-logged-in users


