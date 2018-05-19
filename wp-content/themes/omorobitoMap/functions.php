<?php
//ショートコード
function my_home_url( $atts ) {
return home_url();
}
add_shortcode( 'home_url', 'my_home_url' );

function my_theme_url( $atts ) {
    return get_template_directory_uri();
}

add_shortcode( 'theme_url', 'my_theme_url' );

add_theme_support( 'post-thumbnails' );

/** Add custom post type. */ 
add_action('init', 'register_news'); 
function register_news() { 
    $labels = array('name'=>'上演情報','singular_name'=>'information');  $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'query_var' => true, 
        'rewrite' => true, 
        'capability_type' => 'post', 
        'has_archive' => true, 
        'hierarchical' => false, 
        'menu_position' => 30 , 
        'supports' => array('title','editor','excerpt','revisions','thumbnail') 
    );  register_post_type('information',$args);  
} 

/* Add Taxonomy */  
register_taxonomy( 
    'infocat',  
    'information',  
    array( 
        'label' => '情報区分',  
        'hierarchical' => true,  
        'public' => true  
    ) 
);
