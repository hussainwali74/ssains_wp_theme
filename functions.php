<?php

function ssains_script_enqueue(){
    wp_enqueue_style(
        //handle, name of the file we wanna enque, wp automatically includes css at the end of this
        'customstyles',
        //the location of our file
        // get_template_directory_uri() this gets us the full absolute uri
        get_template_directory_uri().'/css/ssains.css',
        //an array of all the dependencies our css file has
        array(),
        //version number of our file
        '1.0',
        //specify if the file has to be accessed on all device sizes or not
        'all'
    );
    wp_enqueue_script( 'customjs', get_template_directory_uri().'/js/ssains.js', array(), '1.0',true );
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

function ssains_theme_support()
{
    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Main Menu');
    register_nav_menu('secondary', 'Footer Navigation Menu'); 
}

add_action('init', 'ssains_theme_support');

//adding custom theme features
add_theme_support( 'custom-background' ); 

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',array('aside', 'image','video') );
