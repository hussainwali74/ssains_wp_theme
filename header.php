<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?> <?php wp_title( '-' ); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="0vyOW7anoOrhXA5U-4wnN7fk882OYg0r5todWFff-Sk" />
    <meta name="theme-color" content="#66FFE0">
    <meta property="og:title" content="Find Behtareen Insurance Plans! — easyinsurance.com.pk"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri()."/css/universalv3.css"; ?> >
<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri()."/css/blog.css"; ?> >
<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri()."css/fontawesome/font-awesome.min.css"; ?> >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta property="og:type" content="website" />
<meta property="og:url" content="https://easyinsurance.com.pk/"/>
<meta property="og:image" content="https://easyinsurance.com.pk/images/fb-dp.png"/>
<meta property="og:site_name" content="Easy Insurance"/>
<meta property="og:description" content="Compare and Buy plans online from Pakistan's top insurance companies. Get quotes for Life, Health, Travel and Car insurance polciies and buy instantly online"/>
<meta property="fb:app_id" content="162159941012939" />

    <?php wp_head(); //let wp know we want to print here the enqueues ?>
    <script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('4u6uyyeas299');
</script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '239401779919855');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=239401779919855&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
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
<body <?php // body_class($ssains_class); ?> >

    <!-- <img src="<?php // header_image(); ?>" height="<?php // echo get_custom_header()->height; ?>"
         width="<?php //echo get_custom_header()->width; ?>" alt="<?php //echo get_custom_header()->url; ?>"> -->

         <!-- @notmobile -->
<nav class="navbar">
  <div class="logo col-sm-4">
    <a href="/" class="pull-left">
      <img src=<?php echo get_template_directory_uri()."/images/logo-text.png"; ?> alt="logo"/>
    </a>
  </div>
  
      <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav navbar-nav col-sm-3 col-md-4 pb-5'
      )) ?>

  <div class="nav-actions">

    <!-- <a href="" class="p12 m12 inline" id="discount-modal"  data-toggle="modal" data-target="#AZADI-Modal">
      <img src=<?php echo get_template_directory_uri()."/images/AZADI-14.png"; ?> alt="azadi discount"/>
    </a>
 -->
    <a id="contact" class="nav-icon" title="Call / message us" data-toggle="popover" data-placement="bottom" data-content="+92 31 6161 6187"><i class="material-icons" style="font-size:20px;">call</i><h5 class="hidden-sm ml8"> Call</h5></a>
    <a class="m12 btn btn-secondary" href="/login"><h5>Login</h5></a>
    <script>
    $(document).ready(function(){
      $('#contact').popover({container: 'nav'})
    });
    </script>

    <!-- <h5 class="insureme-navbtn" style="float: right;"><a class="btn btn-secondary center hidden-xs">Need help?</a></h5> -->
  </div>

</nav>


 