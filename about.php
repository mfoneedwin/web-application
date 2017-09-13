<!DOCTYPE html>
<?php 
	include 'head_foot.php';
	$headFoot = new Head();	
	$news = getData("SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 5");
	$nbN = count($news);
	$hm = getData("SELECT * FROM `home_products`");
	$nb_hm = count($hm);
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>	
	<meta name="keywords" content="laser cutting machine,metal laser cutting machine,laser cutting and engraving machine,laser cutter,laser cutting,Cnc laser cutting machine,Fiber laser cutting machine,Metal cutting machine,Metal laser cutting machine,Laser cutting machine,Laser cutting machines,laser engraver, cutting, laser, cutter, laser marker">
	<meta name="description" content="Gnlaser is the largest manufacturer of fabricating equipment and industrial lasers in china. We are a high tech company specializing in laser cutting machines, press brakes, punching machines, and more"/>
	<title> About Us |2016 China Fiber Laser Cutting,Laser Engraving and Laser marking Machine For Sale </title>
	<?php echo $headFoot->dispmeta(); ?>	
</head>	
	<body class="home page">	
		
	
	<!-- BEGIN: ALL CONTENT -->		
	<div class="everything">
		<!-- Begin nav bar -->
		<?php echo $headFoot->dispHead('about') ; ?>
		<div class="fullwidth-container image" style="background: url(img/team/breadcrum.jpg);">
			<div class="parallax-overlay parallax-overlay-pattern"></div>
			<div class="container">
	
	        	<div class="pageTitle sixteen columns">
	            	<h1 class="page_title">About Us</h1>
	                <h2 class="secondaryTitle">More about our company.</h2>
	            </div>
	        </div>
	    </div>

	    
		<!-- START: FULL CONTENT -->	
		<div class="entry-content">					
	        <div class="container">
	            
	            <!-- BEGIN: CONTENT -->
	            <div class="twelve columns">
	            	
	            	 <!-- FLEXSLIDER -->
	                <div id="myslider-12" class="flexslider clearfix" style="max-height:300px;">
	                    <ul class="slides">
	                        <li>
	                            <a href='javascript:;'>
	                                <img src='img/about/laserCuttingMachine-ab.jpg'  alt='Laser cutting machine'>
	                            </a>
	                            <p class='flex-caption'><span class='caption-title'></span>
	                            </p>
	                        </li>
	                        <li>
	                            <a href='javascript:;'>
	                                <img src='img/about/laserCuttingMachine-ab1.jpg'  alt='Laser cutting machine'>
	                            </a>
	                        </li>
	                        <li>
	                            <a href='javascript:;'>
	                                <img src='img/about/laserCuttingMachine-ab2.jpg' alt='Laser cutting machine'>
	                            </a>
	                            <p class='flex-caption'><span class='caption-title'></span><span class='caption-content'></span>
	                            </p>
	                        </li>
	                        <li>
	                            <a href='javascript:;'>
	                                <img src='img/about/laserCuttingMachine-ab3.jpg'  alt='Laser cutting machine'>
	                            </a>
	                            <p class='flex-caption'><span class='caption-title'></span><span class='caption-content'></span>
	                            </p>
	                        </li>
	                    </ul>
	                </div>
	                <script type="text/javascript">
	                    jQuery(document).ready(function ($) {
	                        $('#myslider-12').flexslider({
	                            animation: "fade",
	                            slideDirection: "vertical",
	                            directionNav: true,
	                            slideshowSpeed: 4500,
	                            controlsContainer: '#myslider-12 .flex-container',
	                            pauseOnAction: false,
	                            pauseOnHover: true,
	                            keyboardNav: false,
	                            controlNav: true,
	                            start: function (slider) {
	                                $(slider).find('li').each(function () {
	                                    if ($(this).children('a').href != "javascript:;") {
	                                        $(this).children('a').children('img').click(function () {
	                                            window.location = $(this).parent('a').attr('href');
	                                            $(this).parent('a').attr('href', 'javascript:;');
	                                        });
	                                    }
	                                });
	                                $("#myslider-12 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
	                                    'opacity': 1
	                                }, 500);
	                            },
	                            after: function (slider) {
	                                $("#myslider-12").find(".flex-direction-nav").click(function () {
	                                    window.location = $("#myslider-12 .slides li").eq(slider.currentSlide).children("a").attr("href");
	                                });
	                                $("#myslider-12 .slides li").find(".flex-caption").each(function () {
	                                    $(this).css('opacity', 0);
	                                    if ($(this).parent().hasClass('clone')) {} else {
	                                        $(this).animate({
	                                            'opacity': 0
	                                        }, 500);
	                                    }
	                                });
	                                $("#myslider-12 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
	                                    'opacity': 1
	                                }, 500);
	                            }
	                        });
	                    });
	                </script>
	                 <!-- end flexslider -->
	                <div class="white-space"></div>
	                
	                <div class="main_cols container">
	                    <div class="one-third column">
	                        <h2 class="zaptitle"><span>Company Profile</span></h2>
	                        <p>Wuhan GN Laser Equipment  Manufacturing Co.. Ltd. specializes in the research, development, manufacture 
                        and marketing of professional laser equipments. It has an integrative team of many hi-tech elites and experts 
                         in mechanism.electronic, industrial automatization and computer software field and We keep going ahead actively.</p>
	                        
	                    </div>
	                    
	                    <div class="one-third column">
	                        <h2 class="zaptitle"><span>Our Approach</span></h2>
	                        <p>We have developed six series of more than 10 types laser products which adopt international advanced 
                         technology, such as laser cutting bed series, laser machine for textile clothing, laser welding machine, laser 
                         marking machine, laser cutting machine, laser machine for advertising and craftworks, etc. These laser 
                         machineries are widely applied in electronic circuit, textile and garment, leather, bags and cases.</p>
	                        
	                    </div>
	                    
	                    <div class="one-third column">
	                        <h2 class="zaptitle"><span>Our main services</span></h2>
	                        <div class="shortcode-unorderedlist">
	                            <ul>
	                                <li><i class="fa fa-check-circle-o"></i> YAG laser cutting machine</li>
	                            <li><i class="fa fa-check-circle-o"></i>Fiber laser cutting machine</li>
	                            <li><i class="fa fa-check-circle-o"></i> Tube laser cutting machine</li>
	                            <li><i class="fa fa-check-circle-o"></i> Laser cutting machine both sheet metal Stubes</li>
	                            <li><i class="fa fa-check-circle-o"></i>Laser Marking Machine</li>
	                            <li><i class="fa fa-check-circle-o"></i>Non-Metal Cutting Machine</li>
	                            </ul>
	                        </div>
	                        <p>&nbsp;
	                        <div class="shortcode-unorderedlist addicon-info-sign">
	                            <ul>
	                                
	                                
	                            </ul>
	                        </div>
	                    </div>
	                    
	                    <div class="white-space"></div>
	                    
	                    <!-- Projects -->
	                    <section class="home_widget recentProjects3">
	                        <div class="projects_container_proj sixteen columns">
	                            <!-- TITLE -->
	                            <div class="zaptitle page_title_s3">
	                            	<span class="page_info_title_s3">Our Qualification</span>
	                            </div>
	                            
	                            <!-- PROJECTS NO SCROLLER -->
	                            <div class="project_list_s3">
	                                <div class="slides_container jcarousel-skin-tango">
	                                    <div class="projs_row">
	                                        <div data-rel='magnifier' class="indproj1  one-third column alpha" style="margin-right: 2%;">
	                                            <div class="slides_item post-thumb">
	                                                <ul class="ch-grid">
	                                                    <li>
	                                                        <div class="ch-item">
	                                                            <a href="#">
	                                                                <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/6.jpg" />
	                                                            </a>
	                                                            <a class="flex_this_thumb" href="img/gallery/6.jpg"></a>
	                                                            <div class="mask" onclick="$(this).siblings('a').trigger('click');">
	                                                                <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                                <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                            </div>
	                                                        </div>
	                                                    </li>
	                                                </ul>
	                                                <div class="no-flicker">
	                                                    <div class="proj-title-tags">
	                                                        <div class="p_title no-flicker"><a href="#"></a>
	                                                        </div>
	                                                        <div class="p_exerpt no-flicker">
	                                                            <p>Qualification</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <!--endofdiv-->
	                                        <div data-rel='magnifier' class="indproj1  one-third column" style="margin-right: 2%;">
	                                            <div class="slides_item post-thumb">
	                                                <ul class="ch-grid">
	                                                    <li>
	                                                        <div class="ch-item">
	                                                            <a href="#">
	                                                                <img class="img_thumb" alt="Laser cutting Machine" src="img/gallery/7.jpg" />
	                                                            </a>
	                                                            <a class="flex_this_thumb" href="img/gallery/7.jpg"></a>
	                                                            <div class="mask" onclick="$(this).siblings('a').trigger('click');">
	                                                                <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                                <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                            </div>
	                                                        </div>
	                                                    </li>
	                                                </ul>
	                                                <div class="no-flicker">
	                                                    <div class="proj-title-tags">
	                                                        <div class="p_title no-flicker"><a href="#"></a>
	                                                        </div>
	                                                        <div class="p_exerpt no-flicker">
	                                                            <p>Qualification</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <!--endofdiv-->
	                                        <div data-rel='magnifier' class="indproj1  one-third column omega" >
	                                            <div class="slides_item post-thumb">
	                                                <ul class="ch-grid">
	                                                    <li>
	                                                        <div class="ch-item">
	                                                            <a href="#">
	                                                                <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/21.jpg" />
	                                                            </a>
	                                                            <a class="flex_this_thumb" href="img/gallery/21.jpg"></a>
	                                                            <div class="mask" onclick="$(this).siblings('a').trigger('click');">
	                                                                <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                                <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                            </div>
	                                                        </div>
	                                                    </li>
	                                                </ul>
	                                                <div class="no-flicker">
	                                                    <div class="proj-title-tags">
	                                                        <div class="p_title no-flicker"><a href="#"></a>
	                                                        </div>
	                                                        <div class="p_exerpt no-flicker">
	                                                            <p>Qualification</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <!--endofdiv-->
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="clear"></div>
	                    </section>
	                    <!-- End Projects -->
	                    <div class="white-space"></div>
	                </div>
	                <!-- end container -->
	                
	            </div>
	            
	            <!-- BEGIN: RIGHT SIDEBAR -->
	            <div class="four columns">
				<div id="secondary" class="widget-area four columns alpha">
					<!-- Begin Search Form -->
					
					<!-- End Search Form -->
				<div id="recentPostsSidebar_widget">
						<!-- Latest Posts Title -->
						<h2>Latest News</h2>
						<!-- Begin Latest Posts Menu -->
						<ul class="recentposts_listing">
							<?php for ($i=0; $i < $nbN; $i++) { 
								$dbdate = $news[$i]['date'];
								$timestamp = strtotime($dbdate);
								$day = date("d", $timestamp);
								$month = date("F", $timestamp); ?>
							<li>
								<div class="recentPostsSidebar slider"></div> 
								<div class="rc-container">
									<a class="the_title" <?php echo 'href="news_more.php?id='.$news[$i]['news_id'].'" onclick="nb_click(\''.$news[$i]['news_id'].'\',\''.$news[$i]['click'].'\')"  title="'.$news[$i]['title'].'">'.mb_substr($news[$i]['title'],0,27,'UTF-8').'[...]'; ?></a><br />
									<div class="recent-contantbottom">
										<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#"><?php echo $news[$i]['author']; ?></a>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- End Latest Post 1 -->
							
						</ul>
					</div>
				
					
				<div id="text-8" class="widget widget_text">
					<h2>Products</h2>			
						<div class="textwidget">
							<!-- Projects -->
							<section id="lastprojects4-7" class="home_widget recentProjects4">
								<div class="projects_container_s4">
									<div class="zaptitle page_title_s4"><span class="page_info_title_s4"></span>
										<div class="pag-proj2_s4">
											 <!-- BEGIN Slides Arrows -->
											<div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal">
											</div>
											<div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal">
											</div>
										</div><!-- END Slides Arrows -->
									</div>
									<!-- Begin Projects -->
									<div class="project_list_s4">
										<ul class="slides_container jcarousel-skin-tango">
											<?php for($i=0;$i<$nb_hm;$i++){ ?>
											<li>
												<ul class="da-thumbs da-recent-projs">
													<li><a <?php echo 'href="details.php?id='.$hm[$i]['id'].'"'; ?>>
														<div class="slides_item post-thumb"><img class="img_thumb" <?php echo 'alt="'.$hm[$i]['alt'].'" src="'.$hm[$i]['path'].'"'; ?> />
															<div class="dahover">
																<span class="da-title"><?php echo $hm[$i]['model']; ?></span>
																<span class='overlay_categories'>
																	<span><?php echo $hm[$i]['alt']; ?></span>
																</span>
																<span class="viewproj">
																	<i class="fa fa-arrow-right"></i>
																</span>
															</div>
														</div>
														</a>
													</li>
												</ul>
											</li>
											<?php } ?>
											
										</ul>
									</div>
									<!-- End Projects -->
								</div>
								<script type="text/javascript">
									jQuery(function($) {$('#lastprojects4-7 .da-thumbs > li > a > .post-thumb').hoverdir(); $('#lastprojects4-7 .project_list_s4').carousel({dispItems: 1, loop:true, autoSlide:true,
	                            autoSlideDuration:5000}); });
								</script>
								<div class="clear"></div>
							</section>
						</div>
				</div>

				
				<!-- Begin Tag Cloud -->
				
				<!-- End Tag Cloud -->
				<div id="recentPostsSidebar_widget">
						<!-- Latest Posts Title -->
						<h2>Contact</h2>
						<div class="textwidget">						
							<strong>Address:</strong> No.4, 7th Part, Private Science and Technology Industrial Park, Quanli First Road, Economic and Technological Development Zone, Wuhan, China<br/>
							<strong>Email:</strong> gnlaser@188.com<br/>
							<strong>Phone:</strong> +86-27-87318320 / 84658466<br/>
							<strong>Fax:</strong> +86-27-83600135<br/>
							<strong>Skype:</strong> gn.laser.china<br/><br/>	
						
						</div>
					</div>
					</div>
			</div>
		<!-- BEGIN: FOOTER -->
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
		<div id="back-to-top"><a href="javascript:;"></a></div>
		
		</div>
		<?php echo $headFoot->dispFoot() ; ?>
		
<!-- END: ALL CONTENT -->	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
</body>
</html>