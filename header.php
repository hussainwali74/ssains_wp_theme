<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ssains </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); //let wp know we want to print here the enqueues ?>
</head>
<?php
$ssains_class = array(); 
//check if our first page is not our blog page by
// is_front_page(), this we set on admin panel 
// is_home() checks if its the blog home page
if(is_home()):
    $ssains_class = array('ssains_class','my_class');
else:
    $ssains_class = array('nothing_class');
    endif ?>
<body <?php body_class($ssains_class); ?> >

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo get_custom_header()->url; ?>">
    
<?php wp_nav_menu(); ?>