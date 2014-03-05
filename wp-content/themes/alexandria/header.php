<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package alexandria
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper-one">
<div id="wrapper-two">
<div id="wrapper-three">
<div id="page" class="hfeed site">
	
       
    <div class="responsive-container">
    	<header  class="site-header">
                    <div id="headerInfo">
                        <ul id="headerList">  
    	                    <li><a href="<?php echo site_url()?>"><img id="appIcon" src="http://i.imgur.com/l00dgfa.png" title="Hosted by imgur.com"/> </a> </li>
    	                    <li id="siteTitle"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Valt</a></h1></li>
    	                    <li id="deviceList"><i><h2 id="devices">for iPhone and iPad</h2></i></li>
                        </ul>
                    </div>
    	</header>
    </div>

    <?php if (!is_page()): ?>
        <?php  get_template_part( 'slider' ); ?>
        <style type="text/css">
        #main
        {
            display: none;
            position: absolute;;
        } </style>
    <?php endif; ?>

	<div id="main" class="site-main">
    
    	<div class="responsive-container">    
        
    		<div class="content-container">         
