<?php
//Error reporting
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

//Define constants
define('SITE_URL', home_url().'/');
define('AJAX_URL', admin_url('admin-ajax.php'));
define('THEME_PATH', get_template_directory().'/');
define('CHILD_PATH', get_stylesheet_directory().'/');
define('THEME_URI', get_template_directory_uri().'/');
define('CHILD_URI', get_stylesheet_directory_uri().'/');
define('THEMEX_PATH', THEME_PATH.'framework/');
define('THEMEX_URI', THEME_URI.'framework/');
define('THEMEX_PREFIX', 'themex_');

//Set content width
$content_width=940;

//Load language files
load_theme_textdomain('lovestory', THEME_PATH.'languages');

//Include theme functions
include(THEMEX_PATH.'functions.php');

//Include configuration
include(THEMEX_PATH.'config.php');

//Include core class
include(THEMEX_PATH.'classes/themex.core.php');

//Create theme instance
$themex=new ThemexCore($config);



function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom Blog', 'your-theme-domain' ),
            'id' => 'blog-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


add_filter( 'woocommerce_currencies', 'add_inr_currency' );
add_filter( 'woocommerce_currency_symbol', 'add_inr_currency_symbol' );

function add_inr_currency( $currencies ) {
    $currencies['INR'] = 'INR';
    return $currencies;
}

function add_inr_currency_symbol( $symbol ) {
	$currency = get_option( 'woocommerce_currency' );
	switch( $currency ) {
		case 'INR': $symbol = 'Rs.'; break;
	}
	return $symbol;
}

