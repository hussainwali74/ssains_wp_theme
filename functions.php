<?php
/**
 * ================================================
 *              Include Scripts
 * ================================================
 */
function ssains_script_enqueue(){
    //css
 
    //js
    wp_enqueue_script('jquery',  true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(),  false );
    wp_enqueue_script( 'navbar', get_template_directory_uri().'/js/mobile/navbar.js', array(), true );
    wp_enqueue_script( 'signup', get_template_directory_uri().'/js/footer/signup.js', array(), true );
    wp_enqueue_script( 'analytics', get_template_directory_uri().'/js/google/analytics.js', array(), true );
    wp_enqueue_script( 'cookies', get_template_directory_uri().'/js/cookies.js', array(), true );
    wp_enqueue_script( 'customjs', get_template_directory_uri().'/js/ssains.js', array(), true );
    
}
//now call this function with an action to tell wp when to call the function
//add_action is a hook, gives us ability to tap into the wp execution cycle
add_action(
    //tag, here we want to tap into when including files, this is a function wp_enqueue_scripts() but here specify as a string
    'wp_enqueue_scripts',
    //callback, the function we want to call at this specific moment
    'ssains_script_enqueue'
    //int priority,
    //accepted_args
);//after this will go to header/footer.php and let wordpress know where we want to add these   

/**
 * ================================================
 *              Include Menus
 * ================================================
 */
function ssains_theme_support()
{
    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Main Menu');
    register_nav_menu('secondary', 'Footer Navigation Menu'); 
}

add_action('init', 'ssains_theme_support');
/**
 * ================================================
 *              Custom Theme Support
 * ================================================
 */
add_theme_support( 'custom-background' ); 
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',array('aside', 'image','video') );

/**
 * ================================================
 *              SIDEBAR FUNCTIONs
 * ================================================
 */
function ssains_widget_setup(){
    register_sidebar(array(
        'name' => 'Sidebarz',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'ssains Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    )
);
}
add_action( 'widgets_init', 'ssains_widget_setup');