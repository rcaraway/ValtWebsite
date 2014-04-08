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
    <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1424767724447584";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="headerBackground">

            <ul id="headerList">  
                <li><a href="<?php echo site_url()?>"><img id="appIcon" src="http://i.imgur.com/l00dgfa.png" title="Hosted by imgur.com"/> </a> </li>
                <li id="siteTitle"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Valt</a></h1></li>
                <li id="deviceList"><i><h2 id="devices">for iPhone and iPad</h2></i></li>
            </ul>
            <div id="socialMedia">
                <ul id="mediaList">
                    <li><a href="https://twitter.com/share" class="twitter-share-button" data-via="GetValt">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                    <li><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></li>
            </div>

    </div>

<div id="wrapper-one">

    <div id="page" class="hfeed site">
	
       




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
