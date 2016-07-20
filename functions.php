<?php
/**
* functions and definitions
*/

define( 'PACIOLI_VERSION', '1.0.0' );


/**
* Enqueue scripts and styles.
*/
function pacioli_styles(){
    if( !is_admin() ){
        // add jquery
        wp_enqueue_script('jquery');
        
        // iransans font
        wp_register_style('iransans-font', get_template_directory_uri() . '/assets/lib/iransans-font/iransans-font.css', false, PACIOLI_VERSION, 'screen');
        wp_enqueue_style( 'iransans-font');
        
        // iransans font
        wp_register_style('fontawesome', get_template_directory_uri() . '/assets/lib/fontawesome/css/font-awesome.min.css', false, PACIOLI_VERSION, 'screen');
        wp_enqueue_style( 'fontawesome');
        
        // add bootstrap
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', false, PACIOLI_VERSION, 'screen');
        wp_enqueue_style( 'bootstrap');
        
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js', array('jquery'), PACIOLI_VERSION, 'screen');
        wp_enqueue_script( 'bootstrap');

        if( is_rtl()){
            wp_register_style('bootstrap-rtl', get_template_directory_uri() . '/assets/lib/bootstrap-rtl/css/bootstrap-rtl.min.css', array('bootstrap'), PACIOLI_VERSION, 'screen');
            wp_enqueue_style( 'bootstrap-rtl');
        }
        
        // main stylesheet
        wp_register_style('pacioli-style', get_stylesheet_uri(), array('bootstrap'), PACIOLI_VERSION, 'screen');
        wp_enqueue_style( 'pacioli-style');
    }
}
add_action( "wp_enqueue_scripts", 'pacioli_styles' );


/*
*   Register Menus
*/
function pacioli_menus() {
    register_nav_menus(array(
    'main' => 'Main Top Menu',
    //'footer_menu' => 'My Custom Footer Menu',
    ));
}
add_action( 'init', 'pacioli_menus' );




/*
*   Register Menus
*/
add_filter( 'wp_nav_menu_items', 'pacioli_add_loginout_link', 10, 2 );
function pacioli_add_loginout_link( $items, $args ) {    
    if (is_user_logged_in() && $args->theme_location == 'main') {
        $items .= '<li class="login-btn"><ul class="nav navbar-nav navbar-right"><li><a class="btn btn-blue" role="button" href="'. wp_logout_url() .'">'. __('Log Out') .'</a></li></ul></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'main') {
        $items .= '<li class="login-btn"><ul class="nav navbar-nav navbar-right"><li><a class="btn btn-primary" role="button" href="'. site_url('wp-login.php') .'">'. __('Log In') .'</a></li></ul></li>';
    }
    return $items;
}


?>
