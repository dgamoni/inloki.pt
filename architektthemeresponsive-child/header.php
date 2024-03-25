<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head>

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!--[if lt IE 9]>

  <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

  <![endif]-->          

  <?php wp_head(); ?>

  

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/themes/default/default.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.1.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.js"></script>    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

  

  <script type="text/javascript">

/*  $(window).load(function() {

      $('#slider').nivoSlider({

      pauseTime: '5000',

      controlNav: false

      });

  });*/

  </script>    

  

  

  <script type="text/javascript">

    var intervalID;

    

    function slideSwitch() {

        var $active = $('#slideshow a.active');

    

        if ( $active.length == 0 ) $active = $('#slideshow a:last');

    

        var $next =  $active.next().length ? $active.next()

            : $('#slideshow a:first');

    

        $active.addClass('last-active');

    

        $next.css({opacity: 0.0})

            .addClass('active')

            .animate({opacity: 1.0}, 1000, function() {

                $active.removeClass('active last-active');

            });

        clearInterval(intervalID);

        intervalID = setInterval( "slideSwitch()", 5000 );



    }

    

    function slideSwitch_prev() {

        var $active = $('#slideshow a.active');

    

        if ( $active.length == 0 ) $active = $('#slideshow a:first');

    

        var $next =  $active.prev().length ? $active.prev() : $('#slideshow a:last');

    

        $active.addClass('last-active');

    

        $next.css({opacity: 0.0})

            .addClass('active')

            .animate({opacity: 1.0}, 1000, function() {

                $active.removeClass('active last-active');

            });

        clearInterval(intervalID);

        intervalID = setInterval( "slideSwitch()", 5000 );



    }    

    

    $(function() {

        intervalID = setInterval( "slideSwitch()", 5000 );	$('.slide_prev_new').click(function() {		slideSwitch_prev();		clearInterval(intervalID);		intervalID = setInterval( "slideSwitch()", 5000 );	});		$('.slide_next_new').click(function() {		slideSwitch();		clearInterval(intervalID);		intervalID = setInterval( "slideSwitch()", 5000 );		});
    });    

  </script>            

</head>

<body>



<?php $shortname = "architekt"; ?>



    <?php if(get_option($shortname.'_custom_background_color','') != "") { ?>

    <style type="text/css">

      body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }

    </style>

    <?php } ?>



<div id="outside_container">

  <div id="main_container">

    

    <div id="header">

      <div class="header_top_text"><?php echo stripslashes(stripslashes(get_option($shortname.'_header_top_text','Architekt Free WordPress Theme is clean simple and unique. Design to showcase your architectual portfolio'))); ?></div>

      

      <?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>

        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a>

      <?php } else { ?>

        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" /></a>

      <?php } ?>

      

      <div class="header_text_cont">

        <?php echo stripslashes(stripslashes(get_option($shortname.'_header_right_text','Welcome to our online portfolio, we are small group of  passionated designers, looking to change and create amazing digital images to inspire others to follow in our steps. We have passion and motivation.'))); ?>

      </div><!--//header_text_cont-->

      

      <div class="clear"></div>

    </div><!--//header-->

    

    <div id="menu_container">

      <?php wp_nav_menu('menu=header_menu&container=false&menu_id=menu'); ?>

<!--      <ul>

        <li><a href="#">HOME</a></li>

        <li><a href="#">PROFILE</a></li>

        <li><a href="#">PORTFOLIO</a></li>

        <li><a href="#">BLOG</a></li>

        <li><a href="#">SERVICES</a></li>

        <li><a href="#">RESUME</a></li>

        <li><a href="#">CONTACT</a></li>

      </ul>-->

      

      <div class="header_search">

        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

        <input type="text" value="" name="s" id="s" />

        <INPUT TYPE="image" SRC="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">

        </form>

      </div><!--//header_search-->

      <div class="clear"></div>

    </div><!--//menu_container-->