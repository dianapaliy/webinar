<?php
register_nav_menus(array(
'top' => 'Верхнее меню',
 'aside' => "Панель сбоку"
));

define("THEME_DIR", get_template_directory_uri());
require_once( ABSPATH . 'wp-load.php');
/* REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
 
function enqueue_styles() {
        wp_register_style( 'style', THEME_DIR . '/css/all.css', array(), '', 'all' );
        wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
 
// ENQUEUE SCRIPTS
 
function enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery.min', THEME_DIR . '/js/jquery-1.11.1.min.js', array(), '', false );
    wp_enqueue_script( 'jquery.min' );
    wp_register_script( 'subscribe', THEME_DIR . '/js/subscribe.js', array(), '', false );
    wp_enqueue_script( 'subscribe' );
    wp_localize_script( 'subscribe', 'postsubscribe', array(
     'ajax_url' => admin_url( 'admin-ajax.php' )
     ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

remove_filter('the_content', 'wpautop');

function register_custom_sidebars() {

    register_sidebar(array(
        'id'            => 'sidebar-left',
        'name'          => __('Sidebar'),
        'description'   => __('Left Sidebar'),
        'class'         => 'sidebar',
        'before_title'  => '<h2 class="sidebar__title">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="sidebar__widget">',
        'after_widget'  => '</div>',
    ));
    register_sidebar(array(
        'name' => __('Виджеты для шапки'),
        'id' => 'header-widget-area',
        'description' => __('Виджеты в шапке'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));
 
}
add_action( 'widgets_init', 'register_custom_sidebars' );

function subscribeOn($user_id, $post_id) {
    global $wpdb, $user_id, $post_id;
    $user_id = get_current_user_id();
    $post_id = $_POST['post_id'];

    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
     echo 111;
     die();
     }
    else {
     wp_redirect( get_permalink( $_POST['post_id'] ) );
     exit();
    }

    $table_name = $wpdb->prefix . "subscribe";
//    $sql = "INSERT INTO " . $table_name . " (user_id, post_id) VALUES ('$user_id','$post_id');";
//    dbDelta($sql);
    $wpdb->insert($table_name, array(  'user_id'=>$user_id,  'post_id'=>$post_id),array('%s','%s'));
//    if($wpdb->insert($table_name, array(  'user_id'=>$user_id,  'post_id'=>$post_id),array('%s','%s'))===FALSE)
//    {
//        echo "Error";
//    }
//    else {
////        echo "Customer '".$name. "' successfully added, row ID is ".$wpdb->insert_id;
//        echo "OK!!!!!!!!";
//    }
//    die();
}
add_action('wp_ajax_subscribeOn', 'subscribeOn)');
