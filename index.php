<!DOCTYPE html>
<?php

	include 'head_foot.php';
	$headFoot = new Head();

	$hm = getData("SELECT * FROM `home_products`");
	$nb_hm = count($hm);
	$news = getData("SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 2");

?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>

	<meta name="keywords" content="laser cutting machine,metal laser cutting machine,laser cutting and engraving machine,laser cutter,laser cutting,Cnc laser cutting machine,Fiber laser cutting machine,Metal cutting machine,Metal laser cutting machine,Laser cutting machine,Laser cutting machines,laser engraver, cutting, laser, cutter, laser marker">
	<meta name="description" content="The cutting quality of laser cutting machine is good, is the best way to determine laser cutting equipment performance, here Gnlaser give you a list of factors to determine the quality of laser cutting machine,Affordable & Pro Quality Laser Cutting Machines, Fiber & CO2 & YAG Laser Cutters For Metal and Non-Metal Materials,cutting, and marking systems - affordable, easy-to-use, and versatile"/>
	<title> Laser Cutting Machine Tools, Industrial Lasers Cutting machine,Metal Cutting Machine,Fiber cutting Machine and Tube cutting machine- GNlaser Wuhan China </title>
	<?php echo $headFoot->dispmeta(); ?>


</head>


	<!-- BEGIN: BODY -->
	<body class="home page">


	<!-- BEGIN: ALL CONTENT -->
	<div class="everything">
		<!-- Begin nav bar -->
		<?php echo $headFoot->dispHead('home') ; ?>

		<!-- BEGIN: REVOLUTION SLIDER
			 NOTE: PLEASE READ THE REV SLIDER DOCUMENTATION TO LEARN HOW TO WORK WITH THE SLIDER
		-->
		<div id="slider_container">

			<!-- REVOLUTION SLIDER 3.0.2 fullwidth mode -->
			<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#f2f2f2;padding:0px;margin-top:0px;margin-bottom:0px;max-height:450px;">
				<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:450px;height:450;">
					<ul>

						<!-- BEGIN: SLIDE #01 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >

							<!-- BACKGROUND IMAGE -->
							<img src="img/banner1/bg11.jpg" alt="" data-fullwidthcentering="on">

							<!-- CAPTION #01-->
							<div class="tp-caption sfr"
								data-x="729"
								data-y="12"
								data-speed="2300"
								data-start="10"
								data-easing="easeInOutBack">
								<img src="img/banner1/ban22.png"  alt="">
							</div>

							<!-- CAPTION #02-->
							<div class="tp-caption lfb"
								data-x="-200"
								data-y="269"
								data-speed="2500"
								data-start="300"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban3.png" alt="">
							</div>

							<!-- CAPTION #03-->
							<div class="tp-caption sfb"
								data-x="-170"
								data-y="262"
								data-speed="1100"
								data-start="2000"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban44.png" alt="">
							</div>

							<!-- CAPTION #04-->
							<div class="tp-caption sfb"
								data-x="60"
								data-y="262"
								data-speed="1100"
								data-start="2500"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban55.png" alt="">
							</div>

							<!-- CAPTION #05-->
							<div class="tp-caption sfb"
								data-x="345"
								data-y="262"
								data-speed="1100"
								data-start="3000"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban66.png" alt="">
							</div>

							<!-- CAPTION #06-->
							<div class="tp-caption sfb"
								data-x="628"
								data-y="262"
								data-speed="1100"
								data-start="3500"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban77.png" alt="">
							</div>
							<!-- CAPTION #07-->
							<div class="tp-caption sfb"
								data-x="912"
								data-y="268"
								data-speed="1100"
								data-start="4000"
								data-easing="easeInOutQuint">
								<img src="img/banner1/ban88.png" alt="">
							</div>
							<!-- CAPTION #08-->
							<div class="tp-caption lfl"
								data-x="680"
								data-y="140"
								data-speed="4300"
								data-start="1000"
								data-easing="easeInOutQuint">
								<img src="img/banner1/txt1.png" alt="">
							</div>


						</li>
						<!-- END: SLIDE #01 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >

							<!-- BACKGROUND IMAGE -->
							<img src="img/preview_images/p3.jpg"  alt=""  data-fullwidthcentering="on">

							<!-- CAPTION #01 -->
							<div class="tp-caption big_black sft"
								data-x="0"
								data-y="95"
								data-speed="1800"
								data-start="500"
								data-easing="easeOutExpo">
								<div style="color:#1252A7 !important;">STRONG <span class="df-color-font"> &amp;</span> HI-TECH MACHINE</div>
							</div>

							<!-- CAPTION #02 -->
							<div class="tp-caption medium_text sft"
								data-x="center" data-hoffset="2"
								data-y="center" data-voffset="-12"
								data-speed="1400"
								data-start="1200"
								data-easing="easeOutExpo">
								<div style="color:#1252A7 !important;">WE SET A NEW STANDARD OF ENDLESS POSSIBILITIES!</div><br/>

							</div>

							<!-- CAPTION #03 -->
							<div class="tp-caption sft"
								data-x="56"
								data-y="194"
								data-speed="1300"
								data-start="2000"
								data-easing="easeInOutBack">
								<img src="img/preview_images/p2.png" alt="">					 								</div>

							<!-- CAPTION #04 -->
							<div class="tp-caption sfb"
								data-x="718"
								data-y="199"
								data-speed="1300"
								data-start="2000"
								data-easing="easeInOutBack">
								<img src="img/preview_images/p1.png" alt="">					 					 			</div>

							<!-- CAPTION #05 -->
							<div class="tp-caption sfb"
								data-x="450"
								data-y="252"
								data-speed="1400"
								data-start="2300"
								data-easing="easeOutExpo">
								<img src="img/preview_images/line.png" alt="">					 					 					</div>
						</li>


					</ul>
					<!-- END: SLIDE #04 -->
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>

		<!-- BEGIN: REVOLUTION SLIDER SCRIPT -->
		<script type="text/javascript">

			var tpj=jQuery;


			var revapi2;

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal != undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

			if(tpj('#rev_slider_2_1').revolution == undefined)
				revslider_showDoubleJqueryError('#rev_slider_2_1');
			else
			   revapi2 = tpj('#rev_slider_2_1').show().revolution(
				{
					delay:9000,
					startwidth:1010,
					startheight:450,
					hideThumbs:200,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:4,

					navigationType:"none",
					navigationArrows:"solo",
					navigationStyle:"round",

					touchenabled:"on",
					onHoverStop:"on",

					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:0,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:0,
					soloArrowRightVOffset:0,

					shadow:0,
					fullWidth:"on",
					fullScreen:"off",

					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,

					shuffle:"off",

					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					videoJsPath:"http://designarethemes.com/themes/zapwp/wp-content/plugins/revslider/rs-plugin/videojs/",
					fullScreenOffsetContainer: ""
				});

			});	//ready

		</script>
		<!-- END: REVOLUTION SLIDER -->

		</div>
		<!-- END: SLIDER CONTAINER DIV -->
		<div class="entry-content">

			<!-- BEGIN: INTRO TEXT -->
			<div class="container">

		    	<h1 style="text-align: center;">Welcome to <span class="text_color">GNlaser</span> </h1>
		    	<h2 style="text-align: center;">Wuhan GNlaser Equipment Manufacturing Co., Ltd. Specializes in the research, developping, producing and marketing of laser equipments. Over 10 years development, we have an integrative team of many hi-tech elites and experts in mechanism, optoelectronics industrial automation and software development.</h2>
			</div><br/> <br/>
			<div class="container">


			<section id="lastprojects4-19" class="home_widget recentProjects4">
	                <div class="projects_container_s4">
	                    <div class="zaptitle page_title_s4">
	                    	<span class="page_info_title_s4">Our Porducts</span>
	                        <!-- BEGIN Slides Arrows -->
	                        <div class="pag-proj2_s4">
	                            <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
	                            <div class="goto_projects" onclick="window.location ='products.php'" title="View all Products"></div>
	                            <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
	                        </div>
	                        <!-- END Slides Arrows -->
	                    </div>

	                    <div class="project_list_s4">
	                        <ul class="slides_container jcarousel-skin-tango">

	                            <!-- PROJECTS -->
	                            <?php for($i=0;$i<$nb_hm;$i++){ ?>
	                            <li>
	                                <ul class="da-thumbs da-recent-projs">
	                                    <li>
	                                        <a <?php echo 'href="details.php?id='.$hm[$i]['id'].'"'; ?>>
	                                            <div class="slides_item post-thumb">
	                                                <img class="img_thumb" <?php echo 'alt="'.$hm[$i]['alt'].'" src="'.$hm[$i]['path'].'"'; ?> height="245" width="490" />
	                                                <div class="dahover"><span class="da-title"><?php echo $hm[$i]['model']; ?></span><span class='overlay_categories'><span><?php echo $hm[$i]['alt']; ?></span></span><span class="viewproj"><i class="fa fa-arrow-right"></i></span>
	                                                </div>
	                                            </div>
	                                        </a>
	                                    </li>
	                                </ul>
	                            </li>
	                            <?php } ?>




	                        </ul>
	                    </div>
	                </div>
	                <script type="text/javascript">
	                    jQuery(function ($) {
	                        $('#lastprojects4-19 .da-thumbs > li > a > .post-thumb').hoverdir();
	                        $('#lastprojects4-19 .project_list_s4').carousel({
	                            dispItems:1,
	                            loop:true,
	                            autoSlide:true,
	                            autoSlideDuration:9000
	                        });
	                    });
	                </script>
	            </section>
	            </div>
	               <div class="white-space"></div>
			<div id="parallax-2" class="parallax" style="background-image: url(img/bg/bg1.jpg);">
					  <div class="parallax-overlay parallax-overlay-pattern"></div>

						  <div class="parallax-content container">
							  <!-- BEGIN: EIGHT COLUMNS LEFT -->
				            <div class="eight columns">
				            	<div style="margin-top: 50px;">
				                    <h1 style="color:#fff;">We have powerfull &amp; precise laser cutting machines suitable for all your projects.</h1>
				                    <h2><span class="text_color">Multi-Purpose Laser cutting machines.</span></h2>
				                    <br/>
				                </div>

				                <p style="color:#fff;">You’re about to meet the awesomeness of the new standard, and endless possibilities you ever imagined with these new machines. These machines are loaded of ressources to build something exceptional, just let your creativity flow.</p>
				                <br/>

				                <!-- BUTTON -->
				                <p>
				                	<a class="des-sc-button button button white" href="products.php" ><span>
				                	<i class="icon-info-sign"></i>See all Products</span></a>
			               </div>

			               <!-- BEGIN: EIGHT COLUMNS LEFT -->
				            <div class="eight columns">
				            	<video width="600" height="400" controls="controls">
									  <source src="video/glaser.mp4" type="video/mp4">
									  Your browser does not support the video tag.
									</video>
								<!-- <embed src="video/glaser.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'				allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="600" height="400" alt="video gnlaser laser cutting machine" loop = "true" autostart="false"></embed> -->
				            </div>

					       </div>
			</div>


				  <!-- BEGIN: LATEST NEWS & A LITLE MORE ABOUT ZAP -->
				  <div class="container">
					  	<div class="white-space"></div>

					    <!-- BEGIN: LATESTS NEWS + MORE ABOUT ZAP -->
					    <div class="main_cols container">

					        <!-- BEGIN: EIGHT COLUMNS - LATESTS NEWS NO SCROLLER-->
					        <div class="eight columns">
							    <section class="home_widget recentPosts noscroller" id="recentPosts-1">
							    	<div class="projects_container rposts2 sixteen columns">

							        	<!-- TITLE -->
							        	<div class="zaptitle page_title_s2">
							            	<span class="page_info_title_s2">Latest News</span>
							            </div>

							            <!-- POSTS NO SCROLLER-->
							            <div class="project_list_s2">
						                    <div class="slides_container post_listing">
						                    <?php for ($i=0; $i < 2 ; $i++) {
						                    	$dbdate = $news[$i]['date'];
												$timestamp = strtotime($dbdate);
												$day = date("d", $timestamp);
												$month = date("F", $timestamp);?>
						                        <div class="posts_row">
						                            <div>
						                                <div class="slides-item post no-flicker" id="post-1">
						                                    <div class="the_content">
						                                        <div class="data_type">
						                                            <div class="cutcorner_top"></div>
						                                            <div class="data">
						                                                <div class="day"><?php echo "$day"; ?></div>
						                                                <div class=""><?php echo "$month"; ?></div>
						                                            </div>
						                                            <div class="post_type slider"></div>
						                                            <div class="cutcorner_bottom"></div>
						                                        </div>
						                                        <div class="title_content">
						                                            <div class="the_title">
						                                                <a <?php echo 'href="news_more.php?id='.$news[$i]['news_id'].'" onclick="nb_click(\''.$news[$i]['news_id'].'\',\''.$news[$i]['click'].'\')" >'.$news[$i]['title']; ?></a>
						                                            </div>
						                                            <span class="comments_number"><a <?php echo 'href="news.php?category='.$news[$i]['category'].'"';?>><i class="fa fa-tags"></i><?php echo $news[$i]['category']; ?></a></span> &nbsp; &nbsp;
						                                            <span class="comments_number"><i class="fa fa-pencil"></i>Clicks: <?php echo $news[$i]['click']; ?></span>
						                                            <div class="the_content">
						                                                <p> <?php echo mb_substr($news[$i]['content'],0,150,'UTF-8').'[...]'; ?> <span class="rp_readmore"><a <?php echo 'href="news_more.php?id='.$news[$i]['news_id'].'" onclick="nb_click(\''.$news[$i]['news_id'].'\',\''.$news[$i]['click'].'\')" ';?>>Read More ⇒</a></span></p>
						                                            </div>
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                        </div>
						                    <?php } ?>
						                    </div>
							            </div>
							            <!-- END POSTS NO SCROLLER-->
							         </div>
							         <div class="clear"></div>
							    </section>
							</div>
					        <!-- END: EIGHT COLUMNS -->


					        <!-- BEGIN: EIGHT COLUMNS - HORIZONTAL TABS-->
					        <div class="eight columns">
					        	<div class='zaptitle'>
					            	<span>A little more about GNlaser</span>
					            </div>

					            <!-- BEGIN: HORIZONTAL TABS -->
					            <div class="shortcode-tabs default" id="tabs">

					                <!-- HORIZONTAL TABS MENU -->
					                <ul class="tabs" id="tabslist">
					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;"><i class='fa fa-compass'></i>Who we are</a>
					                    </li>

					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;">Our Philosophy</a>
					                    </li>

					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;">What we do</a>
					                    </li>
					                </ul>

					                <!-- HORIZONTAL TABS PANES -->
					                <div class="panes">

					                    <!-- PANE #1 -->
					                    <div>
					                        <div class="main_cols container">
					                            <div class="eight columns">
					                            	<h4>Welcome to <span style="color: #1252A7;">GNlaser</span></h4>
					                            	<p>Equipded with advanced CNC <a href="#">laser equipment</a> production base, internatiolized hi-tech talents and high quality sales team, we dedicate to providing customers with best laser application solution and laser equipments.</p>
					                            </div>

					                            <div class="eight columns">

					                            	<!-- BEGIN: FLEXSLIDER-->
					                            	<div class="flexslider clearfix" id="myslider-1" style="max-height:300px;">
					                                    <ul class="slides">
					                                        <li><a href='javascript:;' ><img alt='gnlaser team' src='img/team/team.jpg'  ></a></li>
					                                        <li><a href='javascript:;'><img alt='gnlaser world map' src='img/team/earth.jpg' ></a></li>
					                                        <li><a href='javascript:;'><img alt='gnlaser worker' src='img/team/worker.jpg' ></a></li>
					                                    </ul>
					                                </div>

					                                <!-- FLEXSLIDER SCRIPT -->
					                                <script type="text/javascript">
														jQuery(document).ready(function($) {
														    $('#myslider-1').flexslider({
														        animation: "fade",
														        slideDirection: "vertical",
														        directionNav: false,
														        slideshowSpeed: 4500,
														        controlsContainer: '#myslider-1 .flex-container',
														        pauseOnAction: false,
														        pauseOnHover: true,
														        keyboardNav: false,
														        controlNav: true,
														        start: function(slider) {
														            $(slider).find('li').each(function() {
														                if ($(this).children('a').href != "javascript:;") {
														                    $(this).children('a').children('img').click(function() {
														                        window.location = $(this).parent('a').attr('href');
														                        $(this).parent('a').attr('href', 'javascript:;');
														                    });
														                }
														            });
														            $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
														                'opacity': 1
														            }, 500);
														        },
														        after: function(slider) {
														            $("#myslider-1").find(".flex-direction-nav").click(function() {
														                window.location = $("#myslider-1 .slides li").eq(slider.currentSlide).children("a").attr("href");
														            });
														            $("#myslider-1 .slides li").find(".flex-caption").each(function() {
														                $(this).css('opacity', 0);
														                if ($(this).parent().hasClass('clone')) {} else {
														                    $(this).animate({
														                        'opacity': 0
														                    }, 500);
														                }
														            });
														            $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
														                'opacity': 1
														            }, 500);
														        }
														    });
														});
					                                </script>
					                            </div>
					                        </div>
					                    </div>
					                    <!-- END PANE #1 -->


					                    <!-- PANE #2 -->
					                    <div>
					                        <p>Over the years, we take "talent-oriented, science and technology leaded, honesty and trustworthiness, innovation" as our mission, and adhere to the management concept of market-oriented, customer-centric, quality as core, service as guarantee Nowadays with laser application technology develops rapidly, we <a href="#">GNlaser</a>, as a sophisticated laser equipment manufacturer, are able to provide customers with most advanced and cost-effective laser equipments.</p>


					                    </div>
					                    <!-- END PANE #2 -->


					                    <!-- PANE #3 -->
					                    <div>
					                        <div class="shortcode-services default">
					                            <ul class="service-items bigicons itemsPerRow-3">
					                                <li class='service-item no-flicker'>
					                                	<i class="fa fa-shopping-cart text_color" style="font-size: 60px;"></i>
					                                    <p class='item-title'>Premium quality machines</p>
					                                    <p class='item-desc'>We provide premium quality laser cutting machines all over the world.</p>
					                                </li>
					                                <li class='service-item no-flicker'>
					                                    <i class="fa fa-briefcase text_color" style="font-size: 60px;"></i>
					                                    <p class='item-title'>Training &amp; workshop</p>
					                                    <p class='item-desc'>We provide training and application consulting workshop to help our customers.</p>
					                                </li>
					                                <li class='service-item no-flicker'>
					                                    <i class="fa fa-phone text_color" style="font-size: 60px;"></i>
					                                    <p class='item-title'>Customer services</p>
					                                    <p class='item-desc'>We adhere to the principle of centering customer's demand to provide a complete set of services.</p>
					                                </li>
					                            </ul>

					                        </div><br/>
					                        <p>
					                    </div>
					                    <!-- END PANE #3 -->

					                </div>
					            </div>
					            <!-- END HORIZONTAL TABS -->
					        </div>
					    </div>

					    <div class="white-space"></div>
					    <div class="white-space"></div>

					    <!-- BEGIN: CLIENTS FEEDBACK & OUR PARTNERS-->
					    <div class="container">

					    	<!-- EIGHT COLUMNS -->
					    	<div class="eight columns">

				            	<!-- SCRIPT FOR TESTIMONIALS SROLLER -->
				                <script type="text/javascript">
				                    jQuery(document).ready(function ($) {
				                        jQuery('.testimonis-1').carousel({
				                            dispItems: 1
				                        });
				                    });
				                </script>


				                <!-- BEGIN: TESTIMONIALS-->
				                <section class="recent_projects recent_testimonials">
				                    <div class="zaptitle page_title_testimonials">

				                    	<span class="page_info_title_testimonials">Clients Feedback</span>
				                        <!-- BEGIN Slides Arrows -->
				                        <div class="pag-testimonials">
				                            <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
				                            <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
				                        </div>
				                        <!-- END Slides Arrows -->
				                    </div>

				                    <!-- Testimonials -->
				                    <div id="testimonials2" class="home_proj slideContent testimonis-1">
				                        <ul class="carousel">

				                            <!-- CLIENT#1 -->
				                            <li>
				                                <div class="slide s1">
				                                    <div class="featured_image">
				                                        <div class="rotate-bg"></div>
				                                        <img title="Jonh Doe" alt="Jonh Doe" src="img/preview_images/350x400.gif" />
				                                    </div>
				                                    <div class="testi-text">
				                                        <p>Vestibulum porta tristique porttitor. Donec at velit ac nunc blandit mollis. Donec ornare quis lorem eu iaculis. Curabitur scelerisque tincidunt lorem quis egestas.</p>
				                                    </div>
				                                    <div class="testi-info"><span class='author'>Jonh Doe</span>, <span class='company'>Envato</span>
				                                    </div>
				                                </div>
				                            </li>

				                            <!-- CLIENT#2 -->
				                            <li>
				                                <div class="slide s2">
				                                    <div class="featured_image">
				                                        <div class="rotate-bg"></div>
				                                        <img title="Joana Doe" alt="Joana Doe" src="img/preview_images/350x400.gif" />
				                                    </div>
				                                    <div class="testi-text">
				                                        <p>" Vestibulum porta tristique porttitor. Donec at velit ac nunc blandit mollis. Donec ornare quis lorem eu iaculis. Curabitur scelerisque tincidunt lorem quis egestas. Vestibulum vitae tellus si... "</p>
				                                    </div>
				                                    <div class="testi-info"><span class='author'>Joana Doe</span>, <span class='company'>Designare</span>
				                                    </div>
				                                </div>
				                            </li>

				                            <!-- CLIENT#3 -->
				                            <li>
				                                <div class="slide s3">
				                                    <div class="featured_image">
				                                        <div class="rotate-bg"></div>
				                                        <img title="Paulo" alt="Paulo" src="img/preview_images/350x400.gif" />
				                                    </div>
				                                    <div class="testi-text">
				                                        <p>Aenean egestas semper arcu, in rhoncus ligula tincidunt non. Sed laoreet diam vel justo tempus pulvinar.</p>
				                                    </div>
				                                    <div class="testi-info"><span class='author'>Paulo</span>, <span class='company'>Designare</span>
				                                    </div>
				                                </div>
				                            </li>

				                            <!-- CLIENT#4 -->
				                            <li>
				                                <div class="slide s4">
				                                    <div class="featured_image">
				                                        <div class="rotate-bg"></div>
				                                        <img title="João" alt="João" src="img/preview_images/350x400.gif" />
				                                    </div>
				                                    <div class="testi-text">
				                                        <p>Phasellus sit amet volutpat odio. Pellentesque at urna bibendum sem venenatis convallis. Aenean ornare, lorem eget aliquet elementum, urna nibh dictum felis, vitae dictum neque nulla eu eros. Phasellus tellus odio, fringilla a laoreet ut, consequat nec sem.</p>
				                                    </div>
				                                    <div class="testi-info"><span class='author'>João</span>, <span class='company'>Designare</span>
				                                    </div>
				                                </div>
				                            </li>
				                        </ul>
				                    </div>
				                    <!-- end Testimonials -->
				                </section>
				                <!-- end My Testimonials -->
				            </div>

				            <!-- EIGHT COLUMNS -->
				            <div class="eight columns">

				            	<!-- BEGIN: PARTNERS WITH SCROLLER -->
				            	<section id='partners-1' class='shortcode-partners sixteen columns'>
				                	<div class="zaptitle"><span>Our partners</span>
				                    	<div class='pag-proj_partners'>
				                        	<div class='nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal'></div>
				                        	<div class='prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal'></div>
				                        </div>
				                    </div>

				                    <!-- START PARTNERS -->
				                    <div class='partners-carousel'>
				                        <ul class='partners-items'>

				                            <!-- PARTNER#01 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='La Battle'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='La Battle' title='La Battle' />
				                                </a>
				                            </li>

				                            <!-- PARTNER#02 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='MCB'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='MCB' title='MCB' />
				                                </a>
				                            </li>

				                            <!-- PARTNER#03 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='Eagle Financial Consulting'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='Eagle Financial Consulting' title='Eagle Financial Consulting' />
				                                </a>
				                            </li>

				                            <!-- PARTNER#04 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='ROXO'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='ROXO' title='ROXO' />
				                                </a>
				                            </li>

				                            <!-- PARTNER#05 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='Bike Easy'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='Bike Easy' title='Bike Easy' />
				                                </a>
				                            </li>

				                            <!-- PARTNER#06 -->
				                            <li class='withscroller partner-item no-flicker'>
				                                <a target='_blank' href='javascript:;' title='Majestic'>
				                                    <img class='logopartner' src='img/preview_images/300x142.gif' alt='Majestic' title='Majestic' />
				                                </a>
				                            </li>
				                        </ul>
				                    </div>
				                    <!-- END PARTNERS -->
				                    <div class='clear'></div>
				               </section>
				               <!-- END: PARTNERS WITH SCROLLER -->


				               <!-- SCRIPT FOR PARTNERS SCROLLER -->
				               <script type='text/javascript'>
				                    jQuery(document).ready(function ($) {
				                        jQuery('#partners-1 .partners-items li').css({
				                            'margin': '0px 10px 0px 0px',
				                            'float': 'left',
				                            'max-height': '130px'
				                        });
				                        jQuery('#partners-1').find('.partners-carousel').carousel({
				                            dispItems: 1
				                        });
				                        jQuery('#partners-1').find('.logopartner').hide().fadeIn(1000);
				                    });
				                    jQuery(window).load(function () {
				                        jQuery('#partners-1 .partners-items li').each(function (e) {
				                            jQuery(this).css('min-height', '').css('max-height', jQuery(this).children('a').height());
				                        });
				                        jQuery('#partners-1').find('.logopartner').each(function () {
				                            jQuery(this).greyScale({
				                                fadeTime: 500,
				                                reverse: false
				                            });
				                        });
				                    });
				                    jQuery(window).resize(function () {
				                        jQuery('#partners-1 .partners-items li').each(function (e) {
				                            jQuery(this).css('min-height', '').css('max-height', jQuery(this).children('a').height());
				                        });
				                    });
				                </script>
				          </div>
				          <!-- END: EIGHT COLUMNS -->
				    </div>
				    <!-- END: CLIENTS FEEDBACK & OUR PARTNERS-->
			<!-- START: PARALLAX #01 -->

		<!-- END: PARALLAX #01 -->
		</div>

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

								<!-- <form action="script.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>

									<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
								</form> -->
								<form action="#" onsubmit="return false" id="mc-embedded-subscribe-form2" class="validate" novalidate>

									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>

									<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" onclick="newsletter()" class="button"></div>
								</form>
							</div>
							<!-- END: MailChimp Signup Form -->
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- BEGIN: BACK-TO-TOP BUTTON -->
		<div id="back-to-top"><a href="javascript:;"></a></div>


		<!-- BEGIN: FOOTER -->
		<?php echo $headFoot->dispFoot() ; ?>
	</div>


</div>
<!-- END: ALL CONTENT -->
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

</body>
</html>
