    <div id="feature" class="site-slider">
    
    	<div class="responsive-container"> 
        
        	<div class="site-slider-slider-one">
            
            	<div class="site-slider-slider-one-image">
                    
                    <img src="http://i.imgur.com/TuNA35r.png" id="iphoneImage" />
                    <div id="slideshow">
                        <img src="http://i.imgur.com/vdOgDhe.png" alt="" class="active" />
                        <img src="http://i.imgur.com/Jsz6V0F.png" alt="" />
                        <img src="http://i.imgur.com/O19PzTB.png" alt="" />
                        <img src="http://i.imgur.com/Kz1zirU.png" alt="" />
                    </div>

                    <script type='text/javascript'>
                        
                        function slideSwitch() {
                            
                            var $active = $('#slideshow IMG.active');

                            if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

                            var $next =  $active.next().length ? $active.next()
                                : $('#slideshow IMG:first');

                            $active.addClass('last-active');
                                
                            $next.css({opacity: 0.0})
                                .addClass('active')
                                .animate({opacity: 1.0}, 1000, function() {
                                    $active.removeClass('active last-active');
                                });
                        }

                        $(function() {
                            setInterval( "slideSwitch()", 5000 );
                        });

                    </script>



                </div> <!-- .site-slider-slider-one-image -->
                
            	<div class="site-slider-slider-one-text">
                
                	<h1 class="site-slider-slider-one-text-heading">
				        Mobile<br>password keeping<br>done right.
                    </h1>
                 
                 
                    
                    
                    <p id="downloadButton"><a href="itms-apps://itunes.apple.com/app/id791566527?at=10l6dK">Get the Free App</a></p>
                
                </div><!-- .site-slider-slider-one-text -->                

    		</div><!-- .site-slider-slider-one -->
        
    	</div><!-- #Responsive-Container -->           
    
    </div><!-- #banner -->


        