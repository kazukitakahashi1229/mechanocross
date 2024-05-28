<?php 

/* ==========================================================================
CSS
========================================================================== */
function style_script() {

    $theme_var = date('YmdHi');
    wp_enqueue_style( 'base', get_theme_file_uri().'/assets/css/base.css', array(), $theme_var, false );

    if ( is_front_page()) {
        wp_enqueue_style( 'top', get_theme_file_uri().'/assets/css/top.css', array(), $theme_var, false );
    } else if (is_page('about-us')) {
        wp_enqueue_style( 'about-us', get_theme_file_uri().'/assets/css/about.css', array(), $theme_var, false );
    } else if (is_page('what-we-do')) {
        wp_enqueue_style( 'what-we-do', get_theme_file_uri().'/assets/css/what-we-do.css', array(), $theme_var, false );
    } else if (is_page('business-model')) {
        wp_enqueue_style( 'business-model', get_theme_file_uri().'/assets/css/business.css', array(), $theme_var, false );
    } else if (is_page('sustainability')) {
        wp_enqueue_style( 'sustainability', get_theme_file_uri().'/assets/css/sustainability.css', array(), $theme_var, false );
    } else if (is_page('research')) {
        wp_enqueue_style( 'research', get_theme_file_uri().'/assets/css/research.css', array(), $theme_var, false );
    } else if (is_page('recruit')) {
        wp_enqueue_style( 'recruit', get_theme_file_uri().'/assets/css/recruit.css', array(), $theme_var, false );
    } else if (is_page('contact')) {
        wp_enqueue_style( 'contact', get_theme_file_uri().'/assets/css/contact.css', array(), $theme_var, false );
    } else {
        wp_enqueue_style( 'page', get_theme_file_uri().'/assets/css/page.css', array(), $theme_var, false );
    }

    if (is_front_page() || is_page('research') || is_page('recruit')) {
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    }
    
}
add_action( 'wp_enqueue_scripts', 'style_script' );


/* ==========================================================================
favicon
========================================================================== */
function set_myfavicon() {
    
}
add_action('wp_head', 'set_myfavicon');


// ======================================================
// JS 
// ======================================================
function footer_script() {

    $theme_var = date('YmdHi');
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    wp_enqueue_script('script_js', get_theme_file_uri().'/assets/js/script.js', array(), $theme_var, true);

    if (is_front_page() || is_page('research') || is_page('recruit')) {
        wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js' );
    }

}
add_action( 'wp_enqueue_scripts', 'footer_script' );


// ======================================================
// thumbnail activate
// ======================================================
add_theme_support( 'post-thumbnails' );


/* ==========================================================================
<body>に固定ページのスラッグ名追加
========================================================================== */
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
    if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
    }
    return $classes;
}


/* ==========================================================================
//スマホ表示分岐(PC・タブレット or スマホ)
========================================================================== */
function is_mobile(){
    $useragents = array(
      'iPhone', // iPhone
      'iPod', // iPod touch
      'Android.*Mobile', // 1.5+ Android *** Only mobile
      'Windows.*Phone', // *** Windows Phone
      'dream', // Pre 1.5 Android
      'CUPCAKE', // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS', // Palm Pre Experimental
      'incognito', // Other iPhone browser
      'webmate' // Other iPhone browser
   
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
  }


?>
