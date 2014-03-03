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
	<?php 
		$footer_layout = 'one';								
		get_template_part( 'footer', $footer_layout );
								
	?>
    <!-- Footer ends Here -->
    
</div><!-- #page -->
</div><!-- #wrapper-one -->
</div><!-- #wrapper-two -->
</div><!-- #wrapper-three -->

<?php wp_footer(); ?>

</body>
</html>