<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <?php wp_head(); ?>
</head>
<body>

    <?php $shortname = "photographer"; ?>
    
    <?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
    <style type="text/css">
      body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
    </style>
    <?php } ?>
    
    <style type="text/css">
    body {
      <?php if(stripslashes(stripslashes(get_option($shortname.'_header_background_image',''))) != "") { ?> 
      background: url('<?php echo stripslashes(stripslashes(get_option($shortname.'_header_background_image',''))); ?>') <?php echo get_option($shortname.'_header_background_repeat','no-repeat') ?>; 
      background-position: <?php echo get_option($shortname.'_header_background_vertical','center') . ' ' . get_option($shortname.'_header_background_horizontal','center'); ?>;
      <?php } ?>    
    }    
    </style>

<div id="main_container">

    <div id="header">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',get_bloginfo('stylesheet_directory') . '/images/logo.png'))); ?>" class="logo" /></a>
        
<!--        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>-->
        <?php wp_nav_menu('menu=header_menu&container=false&menu_id=menu'); ?>
        <div class="clear"></div>
    </div><!--//header-->
    
    <div id="menu_container">
    <!--
        <ul>
          <li><a href="#">PORTRAIT</a></li>
          <li><a href="#">PEOPLE</a></li>
          <li><a href="#">LANDSCAPE</a></li>
          <li><a href="#">ARCHITECTURE</a></li>
          <li><a href="#">STILLS</a></li>
          <li><a href="#">OTHERS</a></li>
        </ul>-->
        <?php wp_nav_menu('menu=category_menu&container=false'); ?>
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input type="text" value="Search" name="s" id="s" onclick="if(this.value == 'Search') this.value='';" onblur="if(this.value == '') this.value='Search';" />
        <INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" ALT="Submit Form">
        </form>
        <div class="clear"></div>
    </div><!--//menu_container-->
    
    <div class="featured_text"><?php echo stripslashes(stripslashes(get_option($shortname.'_featured_text','Photographer Free WordPress Theme inspired by the works of Thomas Hawks Digital Connection'))); ?></div>