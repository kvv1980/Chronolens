<?php 

// show_admin_bar( false );


function load_style_script(){
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;600;700&display=swap');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome-5-pro-master/css/all.css');
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), false, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), false, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), false, true);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), false, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}



add_action('wp_enqueue_scripts', 'load_style_script');



add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => 'Header menu',
	) );
});



add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');