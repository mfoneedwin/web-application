<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<!--
		Theme:      ZAP HTML Vs1.0
		Author:		Designare
		Portfolio:  http://themeforest.net/user/designare
	-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
	<meta name="keywords" content="YOUR KEYWORDS">
	<meta name="description" content="YOUR DESCRIPTION"/>
	<title>Zap | Multi-Purpose HTML5 Template</title>

	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<link rel="apple-touch-icon" sizes="144x144" href="#">	
	
	<!-- Zap CSS -->
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/skeleton.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/camera.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/tango/skin.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/blog.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/resize.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/retina.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
	<!-- Layer Slider -->
	<link rel='stylesheet'  href='css/layerslider.css' type='text/css' media='all' />
	
	<!-- Rev Slider -->
	<link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/captions.css' type='text/css' media='all' />
	
	<!-- COLORS VARIATIONS -->
	<link rel='stylesheet'  href='css/color-variations/greenzap.css' type='text/css' media='all' />
	<!--
	<link rel='stylesheet'  href='css/color-variations/red.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/green.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/orange.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/yellow.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/blue.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/violet.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/brown.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/darkblue.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='css/color-variations/pink.css' type='text/css' media='all' />
	-->
	
	<!-- Fonts -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans' type='text/css' media='screen' />
	
	<!-- Javascript -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/jQuerytools.js'></script>
	<script type='text/javascript' src='js/utils.js'></script>
	<script type='text/javascript' src='js/zap.js'></script>
	<script type='text/javascript' src='js/blog.js'></script>
	<script type='text/javascript' src='js/twitter/jquery.tweet.js'></script>
	<script type='text/javascript' src='js/camera.min.js'></script>
	<script type='text/javascript' src='js/layerslider.kreaturamedia.jquery.js'></script>
	<script type='text/javascript' src='js/jquery-easing-1.3.js'></script>
	<script type='text/javascript' src='js/jquerytransit.js'></script>
	<script type='text/javascript' src='js/layerslider.transitions.js'></script>
	<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
	<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>	
	<script type='text/javascript' src='js/jflickrfeed.js'></script>
	<script type='text/javascript' src='js/jquery.jcarousel.min.js'></script>	
			
</head>	
	<!-- BEGIN: BODY -->
	<body class="home page">	
	
	<!-- HEADER TYPE OPTIONS: "style1", "style2", "style3", "style4" -->
	<div id="headerStyleType" class="zap_helper_div">style2</div>
		
	<!-- FOR HIGH RESOLUTION IMAGES USED THIS IMG TAG 
		<img src="low-res.png" media="only screen and (min-device-pixel-ratio: 2) then (src=high-res.png)"/> 
	-->
	
	<!-- LOADING PAGES | COMMENT the DIV "loading-pages" IF YOU DON'T WANT TO USE IT -->
	<div class="loading-pages"></div>
	
	
	<!-- FOR HIGH RESOLUTION IMAGES USED THIS IMG TAG 
		<img src="low-res.png" media="only screen and (min-device-pixel-ratio: 2) then (src=high-res.png)"/> 
	-->

	<!-- BEGIN: TOP PANEL -->		
	<div id="toppanel">
		<div class="toppanel_content">
			<div class="container content">
				
				<!-- BEGIN: ONE-THIRD COLUMN -->								
				<div class="one-third column">
					
					<!-- BEGIN: CONTACT WIDGET -->	   
	    			<div class="contact-widget-container">	
						<div class="title"><h4>HI THERE, LET’S GET IN TOUCH!</h4></div>    
						<div class="contact-form">
							<div class="message_success form_success"></div>
							<form method="post" action="#" class="validateform">
								<ul class="forms">
									<li>
										<input type="text" name="name" class="yourname txt corner-input" onfocus="if ($(this).val() === 'Name') $(this).val(''); checkerror(this);" onblur="if ($(this).val() === '') $(this).val('Name');  var v = $(this).val(); $('.yourname_val').html(v);" value="Name">
										<div class="yourname_val"></div>
										<div class="yourname_error zap_helper_div">Please enter a Name</div>
									</li>
									<li>
										<input style="margin: 10px 0;" type="text" name="email" class="youremail txt corner-input" onfocus="if ($(this).val() === 'Email') $(this).val(''); checkerror(this);" onblur="if ($(this).val() === '') $(this).val('Email'); var v = $(this).val(); $('.youremail_val').html(v);" value="Email">
										<div class="youremail_val"></div>
										<div class="youremail_error zap_helper_div">Please enter a valid Email</div>
									</li>
									<li>
										<textarea name="message" class="yourmessage textarea message corner-input" rows=20 cols=30 onfocus="if ($(this).html() === 'Message') $(this).html(''); checkerror(this);" onblur="if ($(this).html() === '') $(this).html('Message');  var v = $(this).html(); $('.yourmessage_val').html(v);">Message</textarea>
										<div class="yourmessage_val"></div>
										<div class="yourmessage_error zap_helper_div">Please enter a Message</div>
									</li>
									<li>
										<a id="send-comment" href="javascript:;" onclick="sendemail($(this),'paulo.estv@gmail.com', 'Email from Zap', '', '', '', 'Message Successfully Sent', 'There was an error. Please try again later.')" class="submit">Send</a>
									</li>
								</ul>
							</form>
						</div>
					</div>
					<!-- END -->	
				</div>
				<!-- END -->
				
				<!-- BEGIN: ONE-THIRD COLUMN -->
				<div class="one-third column">    
					
					<!-- BEGIN: FLICKR WIDGET -->
					<div class="flickr_container">
    					<div class="title"><h4>From Flickr</h4></div>
    					<ul id="flickr" class="thumbs"></ul>
    				</div>
    				
    				<!-- FLICKR SCRIPT -->
					<script>
						jQuery(document).ready(function($){
							//flicker gadget
								$('#flickr').jflickrfeed({
										limit: 4,
										qstrings: {
											id: ''
										},
										itemTemplate: '<li>'+
														'<a rel="prettyPhoto[gallery1]" href="{{image}}" title="{{title}}">' +
															'<img src="{{image_s}}" alt="{{title}}" />' +
														'</a>' +
													  '</li>'
									}, function(data) {
										$('#flickr a').prettyPhoto({autoplay_slideshow:false, deeplinking: false, show_title: false, social_tools: ''});
								});
							});
					</script>
					
					<!-- BEGIN: TAG CLOUD WIDGET --> 
					<h4>Tag Cloud</h4><hr/>
					<div class="tagcloud">
						<a href='#' title=''>Gallery</a>
						<a href='#' title=''>Music</a>
						<a href='#' title=''>Photos</a>
						<a href='#' title=''>SliderImages</a>
						<a href='#' title=''>Video</a>
						<a href='#' title=''>WpThemes</a>
					</div>
					<!-- END -->
				</div>
				<!-- END -->
				
				<!-- BEGIN: ONE-THIRD COLUMN -->
				<div class="one-third column">
					<h4>Why Zap?</h4><hr/>
					
					<!-- BEGIN: ACCORDION WIDGET -->
					<div class="textwidget">
						<div id="accordion" class="shortcode-accs default">
							
							<!-- BEGIN: ACC1 -->
							<div class="acc-title">
								<h2 class="">Powerfull admin panel</h2>
							</div>
							<div class="pane acc-sec acc-powerfull-admin-panel" style="display:block">
								<p>Intuitive options panel, build your custom skin, setup sliders, fonts, newsletter, seo, social media, languages, import/export options, and tons more!</p>
							</div>
							
							<!-- BEGIN: ACC2 -->
							<div class="acc-title">
								<h2 class="">Tons of layout options</h2>
							</div>
							<div class="pane acc-sec acc-tons-of-layout-options" >
								<p>Tons of layout options content goes here. </p>
							</div>
							
							<!-- BEGIN: ACC3 -->
							<div class="acc-title">
								<h2 class="">500 + Google fonts</h2>
							</div>
							<div class="pane acc-sec acc-500-google-fonts" >
								<p>500 + Google fonts content goes here.</p>
							</div>
						</div>
					</div>
					<!-- END -->
				</div>
				<!-- END -->
			</div>
									
		</div>
						
	</div>
	
	<!-- BEGIN: TOP PANEL TRIGGER -->				
	<div class="trigger_toppanel_closer" onclick="$(this).siblings('#toppanel_trigger').click();">
		<div class="clicker">
			<div class="signal"></div>
		</div>
	</div>
	<div id="toppanel_trigger">
		<div class="signal"></div>
	</div>
	<!-- END -->				
	
	<!-- BEGIN: ALL CONTENT -->		
	<div class="everything">
		
		<!-- BEGIN: HEADER CONTAINER -->
		<div class="header_container headerstyle-style4">
			
			<!-- BEGIN: TOP BAR -->
			<div class="fullwidth_container style-top-bar">
				<div class="container">
					<div class="info_above_menu">
						
						<!-- BEGIN: TOP BAR CONTENTS LEFT -->
						<div class="eight columns" style="float:left;top: 13px; position:relative;">
							<div class="telephone">
								<i class="fa fa-phone"></i>
								351 344 588	
							</div>
									
							<div class="email">
								<i class="fa fa-envelope"></i>
								<a href="mailto:geral@zapstudio.com">geral@zapstudio.com</a>
							</div>
							
							<div class="address">
								<i class="fa fa-map-marker"></i>
								Street N1, Washington USA
							</div>
						</div>
						<!-- END -->
						
						<!-- BEGIN: TOP BAR CONTENTS RIGHT -->
						<div class="eight columns">
							<div class="top-bar-menu">
								<ul id="menu_top_bar" class="sf-menu sf-js-enabled sf-shadow">
									<li class="menu-item">
										<a href="#">Contacts</a>
									</li>
									
									<li class="menu-item">
										<a href="#">SmartBox Features</a>
									</li>
									
									<li class="menu-item">
										<a href="#">Buy Template</a>
									</li>
								</ul>						
							</div>
							
						</div>						
						<!-- END -->			
					</div>
				</div>
			</div>
			<!-- END: TOP BAR -->
			
			<!-- BEGIN: HEADER -->		
			<header class="container" id="header">
                <div class="logo_and_menu">
                    <div class="logo columns" style="margin-top: 10px; margin-left: 0px;">
                        <h1>
                        	<a href="index.html" tabindex="-1">
                        		<img alt="my logo" class="logo_normal notalone" src="img/logozap.png" style="position: relative; margin-top: 22px;margin-bottom: 10px; margin-left: 0px;max-height:58px;" title="my logo">
                        	
                        		<img alt="my logo" class="logo_retina" src="img/logo@2x.png" style="display:none; position: relative; margin-top: 22px; margin-left: 0px;max-height:58px;" title="my logo">
                        	</a>
                        </h1>

                        <div class="slogan" style="background: none; font-size: 12px; color: #; margin-top: 34px;">Multi-Purpose HTML5 Template</div>
                        
                    </div>

                    <div class="info_above_menu style4" style="margin-top: 36px;">
                        <form action="#" id="searchform_top" method="get">
                            <input class="field" id="s_top" name="s" onblur="if ($(this).val()=='') $(this).val('To search type and hit enter');" onfocus="var t = setTimeout(function(){ $('#s_top').css({'color':'#10b9b9'}); var t2 = setTimeout (function(){ $('#s_top').val('').css('color','#FFF'); }, 300); },1000);" placeholder="" type="text" value="To search type and hit enter">
                        </form>

                        <div class="socialdiv" style="float:right;">
                            <ul>
                                <li><a class="facebook" href="#" target="_blank" title="Facebook"></a></li>

                                <li><a class="twitter" href="#" target="_blank" title="Twitter"></a></li>

                                <li><a class="linkedin" href="#" target="_blank" title="LinkedIn"></a></li>

                                <li><a class="skype" href="#" target="_blank" title="Skype"></a></li>

                                <li><a class="google" href="#" target="_blank" title="Google"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="fullwidth_container fullwidth_container_menu">
                <div class="container">
                    <!-- Start Menu -->

                    <!-- BEGIN: DESKTOP MENU -->															                    					
					<ul id="menulava" class="sf-menu">
					
						<!-- BEGIN: MENU ITEM HOME -->
						<li class="current-menu-item"><a href="#">Home</a>
							<ul class="sub-menu">
								<li class=""><a href="home-v1-layerslider.html">Home v1 LayerSlider</a></li>
								<li class=""><a href="home-v2-designare-slider.html">Home v2 Designare Slider</a></li>
								<li class=""><a href="home-v3-revolutionslider.html">Home v3 RevolutionSlider</a></li>
								<li class=""><a href="home-v4-revolutionslider.html">Home v4 &#8211; Cut Rev Slider</a></li>
								<li class=""><a href="home-v5-flexslider.html">Home v5 FlexSlider</a></li>
								<li class=""><a href="home-v6-portfolio.html">Home v6 Portfolio</a></li>
							</ul>
						</li>
					
						<!-- BEGIN: MENU ITEM FEATURES -->
						<li class=""><a href="#">Features</a>
							<ul class="sub-menu">
								<li><a href="features.html">Zap Features</a></li>
								<li><a href="home-boxed.html">Boxed Layout</a></li>

								<li><a href="#">Header Options</a>
									<ul class="sub-menu">
										<li><a href="header-1.html">Header 1</a></li>
										<li><a href="index.html">Header 2</a></li>
										<li><a href="header-3.html">Header 3</a></li>
										<li><a href="header-4.html">Header 4</a></li>
									</ul>
								</li>
								
								<li><a href="#">Page Titles</a>
									<ul class="sub-menu">
										<li><a href="services-v1.html">Banner Type</a></li>
										<li><a href="features.html">Image Type</a></li>
										<li><a href="about-v1.html">Image Type2</a></li>
										<li><a href="percentage-graphs.html">Colored Style</a></li>
										<li><a href="about-v2.html">Dark Style</a></li>
										<li><a href="services-v2.html">Light Style</a></li>
										<li><a href="services-v2.html">Big Text</a></li>
									</ul>
								</li>
								
								<li><a href="#">Multilevel Menu</a>
									<ul class="sub-menu">
										<li><a href="#">Create Awesome</a></li>
										<li><a href="#">Nice Multilevel</a>
											<ul class="sub-menu">
												<li><a href="#">Menus</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								
								<li><a href="#">Trusted Elite Author!</a></li>
								<li><a href="#">Free Updates &#038; Support</a></li>
								<li><a href="#">Only 17$ Buy it →</a></li>
							</ul>
						</li>
						
						<!-- BEGIN: MENU ITEM Elements -->
						<li class=""><a href="#">Elements</a>
							<ul class="sub-menu">
								<li><a href="horizontal-tabs.html">Horizontal tabs</a></li>
								<li><a href="percentage-graphs.html">Percentage graphs</a></li>
								<li><a href="toggle">Accordion &#038; Toggle</a></li>
								<li><a href="font-awesome.html">Font Awesome</a></li>
								<li><a href="special-tabs.html">Special tabs</a></li>
								<li><a href="recent-projects.html">Recent projects</a></li>
								<li><a href="recent-posts.html">Recent posts</a></li>
								<li><a href="buttons.html">Buttons</a></li>
								<li><a href="featured-box.html">Info / Featured Box</a></li>
								<li><a href="google-maps.html">Google maps</a></li>
								<li><a href="services-layout.html">Services layout</a></li>
								<li><a href="services-balls.html">Services balls</a></li>
								<li><a href="social-buttons.html">Social buttons</a></li>
							</ul>
						</li>
						
						<!-- BEGIN: MENU ITEM PAGES -->
						<li class=""><a href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="about-v1.html">About us</a></li>
								<li><a href="about-v2.html">About v2</a></li>
								<li><a href="about-v3.html">About v3</a></li>
								<li><a href="services-v1.html">Services v1</a></li>
								<li><a href="services-v2.html">Services v2</a></li>
								<li><a href="our-pricing.html">Our Pricing</a></li>
								<li><a href="contacts-v2.html">Contacts v2</a></li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="left-right-sidebar.html">Left &#038; Right Sidebar</a></li>
								<li><a href="bigger-sidebar.html">Biggest Sidebar</a></li>
								<li><a href="faq.html">Our FAQ</a></li>
							</ul>
						</li>
						
						<!-- BEGIN: MENU ITEM PORTFOLIO -->
						<li class=""><a href="#">Portfolio</a>
							<ul class="sub-menu">
								<li><a href="portfolio-v1-2columns.html">Portfolio v1 2Columns</a></li>
								<li><a href="portfolio-v1-3columns.html">Portfolio v1 3Columns</a></li>
								<li><a href="portfolio-v1-4columns.html">Portfolio v1 4Columns</a></li>
								<li><a href="portfolio-v2-2columns.html">Portfolio v2 2Columns</a></li>
								<li><a href="portfolio-v2-3columns.html">Portfolio v2 3Columns</a></li>
								<li><a href="portfolio-v2-4columns.html">Portfolio v2 4Columns</a></li>
								<li><a href="single-leftslider.html">Singles &#8211; Left Slider</a></li>
								<li><a href="single-fullslider.html">Singles &#8211; Full Slider</a></li>
								<li><a href="single-fullwidth.html">Singles &#8211; FullWidth Slider</a></li>
								<li><a href="single-simpleimage.html">Single &#8211; Simple Image</a></li>
							</ul>
						</li>
						
						<!-- BEGIN: MENU ITEM BLOG -->
						<li class=""><a href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog-right-sidebar.html">Blog &#8211; Right Sidebar</a></li>
								<li><a href="blog-left-sidebar.html">Blog &#8211; Left Sidebar</a></li>
								<li><a href="blog-fullwidth.html">Blog &#8211; Full-Width</a></li>
							</ul>
						</li>
						
						<!-- BEGIN: MENU ITEM CONTACTS -->
						<li class=""><a href="contacts.html">Contacts</a></li>
	
					</ul>
					<!-- END: DESKTOP MENU -->	
					
					<!-- BEGIN: MOBILE MENU -->						
					<div id="select-menu">
						<select class="dropdown-menu" id="menu-primary-navigation">
					        <option value="">
					            Mobile menu
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="index.html">
					            Home
					        </option>
					
					        <option value="home-v1-layerslider.html">
					            Home v1 LayerSlider
					        </option>
					
					        <option value="home-v2-designare-slider.html">
					            Home v2 Designare Slider
					        </option>
					
					        <option value="home-v3-revolutionslider.html">
					            Home v3 RevolutionSlider
					        </option>
					
					        <option value="home-v4-revolutionslider.html">
					            Home v4 - Cut Rev Slider
					        </option>
					
					        <option value="home-v5-flexslider.html">
					            Home v5 FlexSlider
					        </option>
					
					        <option value="home-v6-portfolio.html">
					            Home v6 Portfolio
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="#">
					            Features
					        </option>
					
					        <option value="features.html">
					            All Zap Features
					        </option>
					
					        <option value="#">
					            Header Options
					        </option>
					
					        <option value="header-1.html">
					            Header 1
					        </option>
					
					        <option value="index.html">
					            Header 2
					        </option>
					
					        <option value="header-3.html">
					            Header 3
					        </option>
					
					        <option value="header-4.html">
					            Header 4
					        </option>
					        
					         <option value="#">
					            Page Titles
					        </option>
					
					        <option value="services-v1.html">
					            Banner Type
					        </option>
					
					        <option value="features.html">
					            Image Type
					        </option>
					
					        <option value="percentage-graphs.html">
					            Colored Style
					        </option>
					
					        <option value="about-v2.html">
					            Dark Style
					        </option>
					        
					        <option value="services-v2.html">
					            Light Style
					        </option>
					        	
					        <option value="#">
					            Multilevel Menu
					        </option>
					
					        <option value="#">
					            Create Awesome
					        </option>
					
					        <option value="#">
					            Multilevel menus using
					        </option>
					
					        <option value="#">
					            WP menus
					        </option>
					
					        <option value="#">
					            Trusted Elite Author!
					        </option>
					
					        <option value="#">
					            Free Updates &amp; Support
					        </option>
					
					        <option value="#">
					        	Only 17$ Buy it →
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="#">
					            Elements
					        </option>
					
					        <option value="horizontal-tabs.html">
					            Horizontal tabs
					        </option>
					
					        <option value="percentage-graphs.html">
					            Percentage graphs
					        </option>
					
					        <option value="toggle.html">
					            Accordion &amp; Toggle
					        </option>
					
					        <option value="font-awesome.html">
					            Font Awesome
					        </option>
					
					        <option value="special-tabs.html">
					            Special tabs
					        </option>
					
					       
					        <option value="recent-projects.html">
					            Recent projects
					        </option>
					
					        <option value="recent-posts.html">
					            Recent posts
					        </option>
					
					        <option value="buttons.html">
					            Buttons
					        </option>
					
					        <option value="featured-box.html">
					            Info / Featured Box
					        </option>
					
					        <option value="google-maps.html">
					            Google maps
					        </option>
					
					        <option value="services-layout.html">
					            Services layout
					        </option>
					
					        <option value="services-balls.html">
					            Services balls
					        </option>
					
					        <option value="social-buttons.html">
					            Social buttons
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="#">
					            Pages
					        </option>
					
					        <option value="about-v1.html">
					            About us
					        </option>
					
					        <option value="about-v2.html">
					            About v2
					        </option>
					        
					        <option value="about-v3.html">
					            About v3
					        </option>
					
					        <option value="services-v1.html">
					            Services v1
					        </option>
					
					        <option value="services-v2.html">
					            Services v2
					        </option>
					
					        <option value="our-pricing.html">
					            Our Pricing
					        </option>
					
					        <option value="contacts-v2.html">
					            Contacts v2
					        </option>
					
					        <option value="left-sidebar.html">
					            Left Sidebar
					        </option>
					
					        <option value="right-sidebar.html">
					            Right Sidebar
					        </option>
					
					        <option value="left-right-sidebar.html">
					            Left &amp; Right Sidebar
					        </option>
					
					        <option value="bigger-sidebar.html">
					            Bigger Sidebar
					        </option>
					
					        <option value="faq.html">
					            Our FAQ
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="#">
					            Portfolio
					        </option>
					
					        <option value="portfolio-v1-2columns.html">
					            Portfolio v1 2Columns
					        </option>
					
					        <option value="portfolio-v1-3columns.html">
					            Portfolio v1 3Columns
					        </option>
					
					        <option value="portfolio-v1-4columns.html">
					            Portfolio v1 4Columns
					        </option>
					
					        <option value="portfolio-v2-2columns.html">
					            Portfolio v2 2Columns
					        </option>
					
					        <option value="portfolio-v2-3columns.html">
					            Portfolio v2 3Columns
					        </option>
					
					        <option value="portfolio-v2-4columns.html">
					            Portfolio v2 4Columns
					        </option>
					
					        <option value="single-leftslider.html">
					            Singles - Left Slider
					        </option>
					
					        <option value="single-fullslider.html">
					            Singles - Full Slider
					        </option>
					
					        <option value="single-fullwidth.html">
					        Singles - FullWidth Slider
					        </option>
					
					        <option value="single-simpleimage.html">
					            Single - Simple Image
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="#">
					            Blog
					        </option>
					
					        <option value="blog-right-sidebar.html">
					            Blog - Right Sidebar
					        </option>
					
					        <option value="blog-left-sidebar.html">
					            Blog - Left Sidebar
					        </option>
					
					        <option value="blog-fullwidth.html">
					            Blog - Full-Width
					        </option>
					
					        <option value="">
					            &nbsp;
					        </option>
					
					        <option value="contacts.html">
					            Contacts
					        </option>
					
					        
					    </select>
					</div> 
                </div>
            </div>

            <div class="header-shadow" style='display:none;'></div>
		
		</div>
		<!-- END: HEADER CONTAINER -->