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
        <div id="VisionIcon"><img src="/iPhoneTablet.png"></div>
         <p id="VisionMessage">We wanted a pleasant password keeper we could use on the fly.  We couldn't find a good one, so we built Valt. <a id="LearnMore" href="/boop">Learn More</a> </p>
    </div>
<?php } else {
    // This is not a homepage
}
?>


</div><!-- #wrapper-one -->
</div><!-- #wrapper-two -->
</div><!-- #wrapper-three -->

<?php 
		$footer_layout = 'one';								
		get_template_part( 'footer', $footer_layout );
								
	?>
    <!-- Footer ends Here -->

<?php wp_footer(); ?>

</body>
</html>