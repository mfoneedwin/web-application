	<!-- BEGIN: BREADCRUMBS -->
 	<div class="breadcrumbs-container"> 
		<div class="entry-breadcrumb no-flicker" style="border: none;"> 
			<p>You are here: <a href="#">Home</a><span class="delimiter"> &raquo; </span>Your page</p>
		</div>	    		  
	</div>
	
	<!-- BEGIN: MAIL CHIMP CONTAINER -->
	<div class="mail_chimp_form_container">
		<div class="white_content_arrow">seta</div>
		<div class="mail-box">
			<div class="container mail-news">
				<div class="news-l">
					<div class="banner">
						Subscribe our Newsletter
					</div>
					
					<div class="form">
					<!-- BEGIN: MailChimp Signup Form 
						NOTE: PASTE THE CODE FROM YOUR MAIL CHIMP ACCOUNT HERE
					 -->
						<div id="mc_embed_signup">
							
							<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								
								<div class="mc-field-group">
									<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
								
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</form>
						</div>
						<!-- END: MailChimp Signup Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: MAIL CHIMP CONTAINER -->
	
	<!-- BEGIN: BACK-TO-TOP BUTTON -->			
	<div id="back-to-top"><a href="javascript:;"></a></div>
	
	
	<!-- BEGIN: FOOTER -->
	<div id="big_footer">
		
		<div id="tweet_scroll_place">
			<div class="container tweet_bird">
				<div class="tweet_scroll_text sixteen columns"></div>
			</div>
		</div>
		
		<script type="text/javascript">
			jQuery(function($){
		        $(".tweet_scroll_text").tweet({
		          modpath: 'js/twitter/index.php',
		          username: "DesignareThemes",
		          page: 1,
		          avatar_size: 0,
		          count: 5,
		          loading_text: "loading ..."
		        });
	        });
	        jQuery(document).ready(function(){
			      var ul = jQuery(".tweet_scroll_text .tweet_list");
		          var ticker = function() {
		            setTimeout(function() {
		              ul.find('li:first').animate( {marginTop: '-4em'}, 500, function() {
		                jQuery(this).detach().appendTo(ul).removeAttr('style');
		              });
		              ticker();
		            }, 5000);
		          };
		          ticker();
		    });
		</script>
		
		<!-- BEGIN: FOOTER WIDGETS -->		
    	<div id="footer_content">
    		<div class="container">
    			
    			<!-- BEGIN: CONTACT DETAILS WIDGET -->
    			<div class="four columns">
    				<h4>Contact Details</h4><hr/>
    				
    				<!-- BEGIN: WIDGET -->
    				<div class="textwidget">
						30 South Park Avenue, CA 94108<br/>
						San Francisco USA<br/><br/>
		
						<strong>Email:</strong> geral@zapstudio.com<br/>
						<strong>Phone:</strong> (123) 456-7890<br/>
						<strong>Fax:</strong> +08 (123) 456-7890<br/><br/>
						
						<!-- BEGIN: NUMERICAL INCREMENTS -->
						<div class="main_cols container">
							
							<!-- BEGIN: EIGHT-THIRD COLUMN -->
							<div class="eight-third column">
								<div>
									<!-- BEGIN: FIRST NUMERICAL INCREMENT -->
									<div id="numerical-2893" class="numericals"> 
									
										<script type="text/javascript"> 
										    jQuery(window).load(function(){
										    	if (isScrolledIntoView("numerical-1")){
										    		jQuery('#numerical-1').removeClass('notinview');
										    		incrementNumerical('#numerical-1', 540, 24);
										    	}
										    });
										    jQuery(window).scroll(function(){    	
										    	if (jQuery('#numerical-1.notinview').length){
										    		if (isScrolledIntoView("numerical-1")){
											    		jQuery('#numerical-1').removeClass('notinview');
											    		incrementNumerical('#numerical-1', 540, 24);
										        	}
										        }
										    });
								        </script> 
								        
								        <div class="numerical-container"><div id="numerical-1" class="notinview">
								        	<div style="font-size:40px; color: #10b9b9 !important;line-height: .5em;text-align: left;" class="value">0</div>
								        		<div style="font-size:;" class="unit"></div>
								        	</div>
								        	<div class="numerical-content">Happy Clients</div>
								        </div>
								    </div>
								</div>
							</div>
							<!-- END -->
							
							<!-- BEGIN: EIGHT-THIRD COLUMN -->
							<div class="eight-third column">
								<div>
									<!-- BEGIN: SECOND NUMERICAL INCREMENT -->
									<div id="numerical-3510" class="numericals">
										<script type="text/javascript"> 
										    jQuery(window).load(function(){
										    	if (isScrolledIntoView("numerical-2")){
										    		jQuery('#numerical-2').removeClass('notinview');
										    		incrementNumerical('#numerical-2', 28, 1);
										    	}
										    });
										    jQuery(window).scroll(function(){    	
										    	if (jQuery('#numerical-2.notinview').length){
										    		if (isScrolledIntoView("numerical-2")){
											    		jQuery('#numerical-2').removeClass('notinview');
											    		incrementNumerical('#numerical-2', 28, 1);
										        	}
										        }
										    });
								        </script>
								        <div class="numerical-container">
								        	<div id="numerical-2" class="notinview">
								        		<div style="font-size:40px; color: #10b9b9 !important;line-height: .5em;text-align: left;" class="value">0</div>
								        		<div style="font-size:;" class="unit"></div>
								        	</div>
								        <div class="numerical-content">Team members</div>
								     </div>
								 </div>
							</div>
							<!-- END -->
						</div>
						<!-- END: NUMERICAL INCREMENTS -->
					</div>
					<!-- END: WIDGET -->
				</div>				
			</div>
			<!-- END: CONTACT DETAILS WIDGET -->
			
			<!-- BEGIN: TWITTER WIDGET -->
			<div class="four columns">    
			    <div class="twitter_container">
					<div class="title">
						<h4>Latest Tweets</h4>
					</div>
					<div id="twitter_update_list">
					
						<!-- TWITTER SCRIPT  -->
						<script type="text/javascript">
							jQuery(document).ready(function(){
								jQuery('#twitter_update_list').tweet({
									modpath: 'js/twitter/index.php',
							        username: "DesignareThemes",
							        page: 1,
							        avatar_size: 0,
						            count: 2
						         });
							});
						</script>
						
					</div>
				</div>
			 </div>
			 <!-- END: TWITTER WIDGET -->
			 
			 <!-- BEGIN: RECENT POST WIDGETS -->
			 <div class="four columns">
			 	<div id="recentPostsSidebar_widget">

					<h2>Latest from Blog</h2>
					
					<ul class="recentposts_listing">
						
						<!-- RECENT POST #01 -->
						<li>
							<!-- Post type -->
							<div class="recentPostsSidebar slider"></div> 
							
							<!-- Post Content -->
							<div class="rc-container">
								<a class="the_title" href="#">Nice post with slider</a><br />
								<div class="recent-contantbottom">
									<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#">admin</a>
								</div>
							</div>
						</li>
						
						<!-- RECENT POST #02 -->		
						<li>
							<!-- Post type -->
							<div class="recentPostsSidebar image"></div> 
							
							<!-- Post Content -->
							<div class="rc-container">
								<a class="the_title" href="#">Featured Image</a><br />
								<div class="recent-contantbottom">
									<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#">admin</a>
								</div>
							</div>
						</li>
						
						<!-- RECENT POST #03 -->		
						<li>
							<!-- Post type -->
							<div class="recentPostsSidebar audio"></div> 
							
							<!-- Post Content -->
							<div class="rc-container">
								<a class="the_title" href="#">This is a Audio Post</a><br />
								<div class="recent-contantbottom">
									<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#">admin</a>
								</div>
							</div>
						</li>
						
						<!-- RECENT POST #04 -->		
						<li>
							<!-- Post type -->
							<div class="recentPostsSidebar video"></div> 
							
							<!-- Post Content -->
							<div class="rc-container">
								<a class="the_title" href="#">This is a Video Post</a><br />
								<div class="recent-contantbottom">
									<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#">admin</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- end: RECENT POST WIDGETS -->	
			
			<!-- BEGIN: ZAP CORE SERVICES -->
			<div class="four columns">
				<h4>Zap Core Services</h4><hr/>
				<div class="textwidget">
					<div id='service-35' class='shortcode-services default'>
						<ul class='service-items itemsPerRow-1'>
							
							<!-- SERVICE #01 -->
							<li class='service-item no-flicker'>
								<p class='designare_icon'><i class="fa fa-bolt text_color"></i></p>
								<p class='item-title'>Tons of Layout Options</p>
								<p class='item-desc'>Maecenas fermentum neque id ligula commodo elementum ornare.</p>
							</li>
							
							<!-- SERVICE #02 -->
							<li class='service-item no-flicker'>
								<p class='designare_icon'><i class="fa fa-clock-o text_color"></i></p>
								<p class='item-title'>Setup in Minutes</p>
								<p class='item-desc'>Maecenas fermentum neque id ligula commodo elementum ornare.</p>
							</li>

						</ul>
						<div class='fix'></div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- END: FOOTER -->    
    
    <!-- BEGIN: SECONDARY FOOTER -->
    <div class="copys">
		<div class="container">
			
			<!-- BEGIN: SECONDARY FOOTER LEFT -->
			<div class="copys_left eight columns">
				© 2013 Copyrights ZAP | All rights Reserved<br/>
				
				<!-- BEGIN: FOOTER MENU -->
				<a href="#">Home</a> - <a href="#">Features</a> - <a href="#">Shortcodes</a> - <a href="#">Portfolio</a> - <a href="#">Contacts</a>
			</div>
			
			<!-- BEGIN: SECONDARY FOOTER RIGHT -->
			<div class="copys_right eight columns">
				<div class="footer_right_content">
					
					<!-- BEGIN: FOOTER SOCIAL ICONS -->
					<div class="socialdiv" style="float:right;">
						<ul>
							<li><a href="#" target="_blank" class="facebook" title="Facebook"></a></li>
							<li><a href="#" target="_blank" class="twitter" title="Twitter"></a></li>
							<li><a href="#" target="_blank" class="linkedin" title="LinkedIn"></a></li>
							<li><a href="#" target="_blank" class="vimeo" title="Vimeo"></a></li>
							<li><a href="#" target="_blank" class="skype" title="Facebook"></a></li>
							<li><a href="#" target="_blank" class="linkedin" title="Twitter"></a></li>
							<li><a href="#" target="_blank" class="google" title="LinkedIn"></a></li>
							<li><a href="#" target="_blank" class="picasa" title="Twitter"></a></li>
							<li><a href="#" target="_blank" class="pinterest" title="Vimeo"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: SECONDARY FOOTER -->
</div>	
</div>
<!-- END: ALL CONTENT -->	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
</body>
</html>