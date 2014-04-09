<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package alexandria
 */
?>

    		</div><!-- .content-container -->
        
    	</div><!-- .Responsive-Container -->
        
	</div><!-- #main -->
    
	<!-- Footer Starts Here -->
	
    
</div><!-- #page -->


<?php
if ( is_home() ) { ?>
    <div id="Vision">
         <p id="VisionMessage">Valt is more than just password management.  It's saving time so you can return to what's important. It's not having to fight a confusing interface. <br>It's <i>demanding more out of software.</i> </p>
        <div id="LearnMore"><a href="/boop">Learn More</a></div>
    </div>
<?php } else {
    // This is not a homepage
}
?>

<footer  class="site-footer" >
    

            <ul id="BottomMenu">
                <li><a href="<?php echo site_url('/about', 'http')?>">About</a></li>
                <li><a href="http://www.robcaraway.wordpress.com">Blog</a></li>
                <li><a href="<?php echo site_url('/faq', 'http')?>">FAQ</a></li>
                <li><a href="<?php echo site_url('/support', 'http')?>">Support</a></li>
                <li><a href="<?php echo site_url('/terms-of-service', 'http')?>">Press Kit</a></li>
                <li id="copyright">&copy; Tapsmith, LLC 2014</li>
            </ul>

    </footer><!-- #colophon -->


</div><!-- #wrapper-one -->


</body>
</html>