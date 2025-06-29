<?php
add_action('wp_enqueue_scripts','GP_test_scripts');

function GP_test_scripts() {
wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
wp_enqueue_style('style', get_stylesheet_uri(  ) );
wp_enqueue_style('normolize-style', get_template_directory_uri(  ) . '/style/modern-normalize.min.css');
wp_enqueue_style('promo', get_template_directory_uri(  ) . '/style/promo.css');
wp_enqueue_style('service', get_template_directory_uri(  ) . '/style/service.css');
wp_enqueue_style('leadership', get_template_directory_uri(  ) . '/style/leadership.css');
wp_enqueue_style('technology', get_template_directory_uri(  ) . '/style/technology.css');
wp_enqueue_style('reviews', get_template_directory_uri(  ) . '/style/reviews.css');

wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap', false);



 wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
 wp_enqueue_script('script', get_template_directory_uri(  ) . '/script/script.js');
};




?>