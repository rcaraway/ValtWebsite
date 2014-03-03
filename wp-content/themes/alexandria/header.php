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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper-one">
    <img src="/Valt/ValtWebsite/media/gradientBack.png" id="backGradient">
<div id="wrapper-two">
<div id="wrapper-three">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    <div class="header-social">
        
       <div class="responsive-container">
            
            
       </div>
        
    </div> 
       
	<header id="masthead" class="site-header" role="banner">
    
    	<div class="responsive-container">
        
        
        	<div class="site-header-half-width-logo">
    
                <div class="site-branding">
                	
                    <ul id="headerList">                       
                    <li><img id="appIcon" src="/Valt/ValtWebsite/media/webIcon.png"/> </li>
                    <li><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Valt</a></h1></li>
                    <li ><i><h2 id="devices">for iPhone and iPad</h2></i></li>
                    </ul>
                </div>
                
            </div>
            
        

            
    	</div><!-- #Responsive-Container -->            
            
	</header><!-- #masthead -->
    
	<?php 
		
		if( is_front_page() && ( !of_get_option('show_alexandria_slider_home') || of_get_option('show_alexandria_slider_home') == 'true' ) ) {
			get_template_part( 'slider' );
		}
				
		if( ( (is_page() && !is_front_page() ) || is_404() ) && ( !of_get_option('show_alexandria_slider_page') || of_get_option('show_alexandria_slider_page') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
		if( ( is_single() ) && ( !of_get_option('show_alexandria_slider_single') || of_get_option('show_alexandria_slider_single') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
		if( ( is_archive() || (is_home() && !is_front_page()) ) && ( !of_get_option('show_alexandria_slider_archive') || of_get_option('show_alexandria_slider_archive') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
	?>

	<div id="main" class="site-main">
    
    	<div class="responsive-container">    
        
    		<div class="content-container">         
