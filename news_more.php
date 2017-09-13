<!DOCTYPE html>
<?php 
	include 'head_foot.php';
	$headFoot = new Head();
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$news_id = $_GET['id'];
		$data = getData("SELECT * FROM `news` WHERE `news_id`=$news_id");
		if(!empty($data)){
			$dbdate = $data[0]['date'];
			$timestamp = strtotime($dbdate);
			$day = date("d", $timestamp);
			$month = date("F", $timestamp);
		}else{
			header("Location: news.php");
			exit();
		}
	}else{
		header("Location: news.php");
		exit();
	}
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
	<meta name="description" content="We Gnlaser brings more updates about laser cutting machine 24/7"/>
	<title>News | 2016 China Fiber Laser Cutting,Laser Engraving and Laser marking Machine For Sale</title>
	<?php echo $headFoot->dispmeta(); ?>
</head>	
	<!-- BEGIN: BODY -->
	<body class="home page">	
	
	
	<div class="everything">
		
		<!-- BEGIN: HEADER CONTAINER -->
		<?php echo $headFoot->dispHead('news') ; ?>
		

		<!-- PAGE TITLE -->
		<!-- Put your image here on the "style" -->
		<div class="fullwidth-container image" style="background: url(img/team/breadcrum.jpg);">
			<div class="parallax-overlay parallax-overlay-pattern"></div>
			<div class="container">
	
	        	<div class="pageTitle sixteen columns">
	            	<h1 class="page_title">GNlaser News</h1>
	                <h2 class="secondaryTitle">Get all the latest news here.</h2>
	            </div>
	        </div>
	    </div>
			
		<!-- START: FULL CONTENT -->	
		<div class="entry-content">
			<div class="container">
				<!-- Begin Blog Posts -->
				<section id="primary" role="region" class="blogarchive blog-rs twelve columns">
					<div id="content">	    
						<div class="post-listing">
							<!-- Begin Blog Post 1 -->
						    <article id="post-1471" class="post">						    	
							    <div class="postcontent">							    											    
									<div class="post-cc">
										<div class="tr-blogfw">
											<div class="td-blogfw">
												<div class="data_type">
													<div class="cutcorner_top"></div>
														<div class="data">
															<div class="day"><?php echo "$day"; ?></div>
															<div><?php echo "$month"; ?></div>
														</div>
														<div class="post_type slider"></div>												    		
														<div class="cutcorner_bottom"></div>
												</div>
											</div>
											<div class="thepostcont">
												<div class="metas_container">
													<div class="the_title">
														<h2><a href="#"><?php echo $data[0]['title']; ?></a></h2>
														<br/>
													</div>
												</div> <br/> <br/>
												<div class="metas">
													<div class="metas-div">
														<div class="divider-tags">
															<a class="the_author" href="#"><?php echo $data[0]['author']; ?></a>
														</div>
														<div class="divider-tags">
															<span class="tags"><a <?php echo 'href="news.php?category='.$data[0]['category'].'"';?> title="View all posts in Company" rel="category tag"><?php echo $data[0]['category']; ?></a></span>
														</div>
														<div class="divider-tags">
															<span class="categories"><a  title="Number of clicks" rel="tag">Clicks: <?php echo $data[0]['click']; ?></a></span>
														</div>
													</div>
												</div> <br/> <br/>
												<div class="blog_excerpt">
													<p style="font-size:18px !important;"><?php echo $data[0]['content']; ?></p>
													
												</div>
													
											</div>
										</div>
									</div>
								</div>
							    <div class="des-sc-dots-divider"></div>								    
							</article>
								<!-- End Blog Post 1 -->
								
								
							</div> <!-- end of post-listing -->
							<div class="white-space"></div>
							<div class="white-space"></div>
							
					<!-- begin of Navigation -->	
					<div class="navigation">
						<div class="des-pages">
							
							<a href="news.php" class="page current" title="2"> <span class="fa fa-reply"></span> Go back</a>
						</div>
					</div>	
				</div><!-- #content -->
				
			</section><!-- #primary -->
	
			<div class="four columns">
				<div id="secondary" class="widget-area four columns alpha">
					<!-- Begin Search Form -->
					<div id="search-2" class="widget widget_search">			
						<form role="search" method="get" id="searchform" action="news.php">
							<div><label class="screen-reader-texts" for="s">Search for:</label>
								<input type="text" value="To search type and hit enter" onfocus="if ($(this).val() === 'To search type and hit enter') $(this).val('');" onblur="if ($(this).val() === '') $(this).val('To search type and hit enter');" name="search" id="s" />
								<input type="submit" id="searchsubmit" value="Search" />
							</div>
						</form>
					</div>
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
									<a class="the_title" <?php echo 'href="news_more.php?id='.$news[$i]['news_id'].'" onclick="nb_click(\''.$news[$i]['news_id'].'\',\''.$news[$i]['click'].'\')" title="'.$news[$i]['title'].'">'.mb_substr($news[$i]['title'],0,27,'UTF-8').'[...]'; ?></a><br />
									<div class="recent-contantbottom">
										<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#"><?php echo $news[$i]['author']; ?></a>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- End Latest Post 1 -->
							
						</ul>
					</div>
				<div id="tag_cloud-4" class="widget widget_tag_cloud">
					<h2>Categories</h2>
					<div class="tagcloud">
						<a href='news.php?category=Application' class='tag-link-11' title='Application' style='font-size: 8pt;'>Application</a>
						<a href='news.php?category=Company' class='tag-link-12' title='Company' style='font-size: 8pt;'>Company</a>
						<a href='news.php?category=Industry' class='tag-link-5' title='Industry' style='font-size: 8pt;'>Industry</a>						
					</div>
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
							<strong>Address:</strong> Han Street International Headquarters C-1305, Wuchang, Wuhan, China<br/>
							<strong>Email:</strong> gnlaser@188.com<br/>
							<strong>Phone:</strong> +86-27-87318320 / 84658466<br/>
							<strong>Fax:</strong> +86-27-83600135<br/>
							<strong>Skype:</strong> gn.laser.china<br/><br/>	
						
						</div>
					</div>
			</div><!-- #secondary .widget-area -->		
		</div>	
		</div><!-- #primary -->
		</div> <!-- enf of .container -->	

		<!-- BEGIN: BREADCRUMBS -->
	 	<div class="breadcrumbs-container"> 
			<div class="entry-breadcrumb no-flicker" style="border: none;"> 
				<p> <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>News</p>
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
			
			
			
			<!-- BEGIN: FOOTER WIDGETS -->		
	    	<?php echo $headFoot->dispFoot() ; ?>
	    <!-- END: FOOTER -->    
	    
	    
		<!-- END: SECONDARY FOOTER -->
	</div>	
</div>
<!-- END: ALL CONTENT -->	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
</body>
</html>