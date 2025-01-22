<?php
// Enqueue custom styles and scripts for the Video Downloader page
function enqueue_video_downloader_assets() {
    if (is_page_template('page-video-downloader.php')) {
        wp_enqueue_style('video-downloader-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('video-downloader-script', get_template_directory_uri() . '/script.js', [], false, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_video_downloader_assets');
