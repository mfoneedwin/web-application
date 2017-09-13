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
	<meta name="description" content="Find out about Gnlaser Laser and the Application of the final end products"/>
	<title> Application | 2016 China Fiber Laser Cutting,Laser Engraving and Laser marking Machine For Sale</title>
	<?php echo $headFoot->dispmeta(); ?>		
</head>	
	<body class="home page">	
	
	
	<div class="everything">
		
		<!-- BEGIN: HEADER CONTAINER -->
		<?php echo $headFoot->dispHead('application') ; ?>
		

		<!-- PAGE TITLE -->
		<!-- Put your image here on the "style" -->
		<div class="fullwidth-container image" style="background: url(img/team/breadcrum.jpg);">
			<div class="parallax-overlay parallax-overlay-pattern"></div>
			<div class="container">
	
	        	<div class="pageTitle sixteen columns">
	            	<h1 class="page_title">This is our Application Gallery</h1>
	                <h2 class="secondaryTitle">Want to cut big thickness in high speed? <span class="text_color"> You can get it all.</h2>
	            </div>
	        </div>
	
	    
	    <!-- START: FULL CONTENT -->	
		<div class="entry-content">
			<div class="container">	
	
	            <!-- BEGIN PROJECTS STYLE 1 WITH OPACITY EFFECT -->
	            <article id="projects-1">
	                <div class="project_list_s2">
	
	                    <div class="moreinfo_text sixteen columns">
	                        <!-- CATEGORIES FILTER: ADD MORE CATEGORIES AT THE BOTTOM OF THE PAGE -->
	                        <div class="filterby">
	                            <div class="filterby_btn closed" onclick="toggleFilter($(this));">Application Hall
	                                <div class="arrow-right"></div>
	                            </div>
	                            <ul class="projectCategories"></ul>
	                        </div>
	                    </div>
	                    
	                    <!-- BEGIN: PROJECTS  -->
	                    <div class="thumbnails_list">
	                        <ul class="proj_list_overlay">
	                            
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app1.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app1.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Samples for metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>6 mm carbon steel plate cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app2.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app2.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Carbon steel plate laser cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app3.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app3.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Carbon steel plate laser cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app4.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app4.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Stainless steel swivel laser cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app5.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app5.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Carbon steel plate laser cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app6.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app6.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Metal cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Carbon steel plate laser cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app7.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app7.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample for cloth cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Vamp hollow out cutting</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app8.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app8.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample for cloth cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Vamp hollow out</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app9.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app9.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample for cloth cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Vamp cut</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app10.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app10.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample for cloth cutting</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Vamp cut2</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="laser cutting machine" src="img/gallery/laser cutting machine-app11.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app11.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample of applique</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Wooden comb marking</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            <!-- PROJECT #01 -->
	                            <li data-id="id-1" class="illustrations logotype  view slides_item four columns">
	
	                                <div class="post-thumb post-thumb-s2">
	                                    <ul class="ch-grid">
	                                        <li class="nc4">
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="Laser cutting machine" src="img/gallery/laser cutting machine-app12.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/gallery/laser cutting machine-app12.jpg"></a>
	                                                <div class="mask" onclick="$(this).siblings('a').trigger('click');" style="height:100%;">
	                                                    <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                    <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="#">Sample of applique</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Leather spray flowers</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>

	                <!-- .entry-content -->
	
	                <!-- CATEGORIES DIV (HELPER) -->
	                <div class="cat_helper">
	                    <ul class="splitter">
	                        <li onclick='$(this).addClass("active").siblings().removeClass("active");$(this).siblings().not("active").slideHorzHide();$(this).parents(".filterby").children(".filterby_btn").removeClass("open").addClass("closed");' id='term_id_-1' class='segment-1 selected-1 termCat active'><a class='no-flicker' href='javascript:;' data-value='all'>Sample Exhibition</a>
	                        </li>

	                        <li onclick='$(this).addClass("active").siblings().removeClass("active");$(this).siblings().not("active").slideHorzHide();$(this).parents(".filterby").children(".filterby_btn").removeClass("open").addClass("closed");' id='term_id_10'
	                        class='segment-0 termCat'><a href='javascript:;' class='no-flicker' data-value='wordpress'>Industry Application</a>
	                        </li>
	                        
	                    </ul>
	                </div>
	                <!-- /HELPER -->
	                
	                <!-- SCRIPT FOR PROJECTS FILTER WITH OPACITY EFFECT -->
	                <script>
	                    jQuery(document).ready(function ($) {
	
	                        $("#projects-1 .projectCategories").html($("#projects-1 .cat_helper").html());
	                        $("#projects-1 .cat_helper").html("").remove();
	
	                        clickThumbsOverlay("projects-1");
	                        $('.projectCategories .splitter').children('li').not('.active').slideHorzHide();
	                        $('.entry-breadcrumb').appendTo($('#wrapper > .container'));
	                    });
	
	                    function toggleFilter($el) {
	                        if ($el.hasClass('closed')) {
	                            /* OPEN */
	                            $el.siblings('.projectCategories').children('.splitter').children('li').slideHorzShow();
	                            $el.removeClass('closed').addClass('open');
	                        } else {
	                            /* CLOSE */
	                            $el.siblings('.projectCategories').children('.splitter').children('li').not('.active').slideHorzHide();
	                            $el.removeClass('open').addClass('closed');
	                        }
	
	                    }
	
	                    jQuery.fn.slideHorzShow = function (speed, easing, callback) {
	                        this.animate({
	                            marginLeft: 'show',
	                            marginRight: 'show',
	                            paddingLeft: 'show',
	                            paddingRight: 'show',
	                            width: 'show'
	                        }, speed, easing, callback);
	                    };
	                    jQuery.fn.slideHorzHide = function (speed, easing, callback) {
	                        this.animate({
	                            marginLeft: 'hide',
	                            marginRight: 'hide',
	                            paddingLeft: 'hide',
	                            paddingRight: 'hide',
	                            width: 'hide'
	                        }, speed, easing, callback);
	                    };
	                </script>
	
	            </article>
	            <!-- BEGIN PROJECTS STYLE 1 WITH OPACITY EFFECT -->
	        </div>
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
		
		<!-- BEGIN: BACK-TO-TOP BUTTON -->			
		<div id="back-to-top"><a href="javascript:;"></a>



		
		</div>
		<?php echo $headFoot->dispFoot() ; ?>
		
		
		
		<!-- BEGIN: FOOTER -->
		
<!-- END: ALL CONTENT -->	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
</body>
</html>