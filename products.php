<!DOCTYPE html>
<?php 	
	include 'head_foot.php';
	$headFoot = new Head();	
	if(isset($_GET['category'])){
		$cat = $_GET['category'];
		$hm = getData("SELECT * FROM `home_products` WHERE `category`='$cat'");		
		if(empty($hm)){
			$hm = getData("SELECT * FROM `home_products`");			
		}
	}else{
		$hm = getData("SELECT * FROM `home_products`");
	}

	if(isset($_GET['search'])&&!empty($_GET['search'])){
		$search = '%'.$_GET['search'].'%';
		// echo "$search";die();
		$hm = getData("SELECT * FROM `home_products` WHERE `alt` LIKE '$search' OR `model` LIKE '$search'");
		if(empty($hm)){
			$nores = 'Sorry, no result for "'.$_GET['search'].'".';
		}
	}

	$nb_hm = count($hm);
	$news = getData("SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 5");
	$nbN = count($news);	
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	
	<meta name="keywords" content="laser cutting machine,metal laser cutting machine,laser cutting and engraving machine,laser cutter,laser cutting,Cnc laser cutting machine,Fiber laser cutting machine,Metal cutting machine,Metal laser cutting machine,Laser cutting machine,Laser cutting machines,laser engraver, cutting, laser, cutter, laser marker">
	<meta name="description" content="Laser cutting and Cutter Product Line from GNlaser Laser"/>
	<title>Products | 2016 China Fiber Laser Cutting,Laser Engraving and Laser marking Machine For Sale</title>
	<?php echo $headFoot->dispmeta(); ?>
	
				
</head>	


	<!-- BEGIN: BODY -->
	<body class="home page">	
		
	
	<!-- BEGIN: ALL CONTENT -->		
	<div class="everything">
		<!-- Begin nav bar -->
		<?php echo $headFoot->dispHead('products') ; ?>

		<!-- Put your image here on the "style" -->
		<div class="fullwidth-container image" style="background: url(img/team/breadcrum.jpg);">
			<div class="parallax-overlay parallax-overlay-pattern"></div>
			<div class="container">
	
	        	<div class="pageTitle sixteen columns">
	            	<h1 class="page_title">GNlaser Products</h1>
	                <h2 class="secondaryTitle">Check all the new laser cutting machines here.</h2>
	            </div>
	        </div>
	    </div>

		<div class="entry-content">					
	        <div class="container">
	            
	            <!-- BEGIN: CONTENT -->
	            <div class="twelve columns">
	            	<section class="home_widget recentProjects3">
	                        <div class="projects_container_proj sixteen columns"> 
	                        	<?php if($nores) {echo $nores;}?>                           
	                            <!-- PROJECTS NO SCROLLER -->
	                            <div class="project_list_s3">
	                                <div class="slides_container jcarousel-skin-tango">
	                                    <div class="projs_row">
											<?php for ($i=0; $i < $nb_hm ; $i++) { ?>
	                                        <div data-rel='link' class="indproj1  one-third column alpha" style="margin-right: 2%;">
	                                            <div class="slides_item post-thumb">
	                                                <ul class="ch-grid">
	                                                    <li>
	                                                        <div class="ch-item">
	                                                            <a <?php echo 'href="details.php?id='.$hm[$i]['id'].'"'; ?>>
	                                                                <img class="img_thumb" <?php echo 'alt="'.$hm[$i]['alt'].'" src="'.$hm[$i]['path'].'"' ; ?> />
	                                                            </a>	                                                            
	                                                            <div class="mask" onclick="$(this).siblings('a').trigger('click');">
	                                                                <div class="more" onclick="$(this).parents('.ch-item').find('.flex_this_thumb').click();"></div>
	                                                                <div class="link" onclick="window.location = $(this).parents('.ch-item').children('a').eq(0).attr('href');"></div>
	                                                            </div>
	                                                        </div>
	                                                    </li>
	                                                </ul>
	                                                <div class="no-flicker">
	                                                    <div class="proj-title-tags">
	                                                        <div class="p_title no-flicker"><a <?php echo 'href="details.php?id='.$hm[$i]['id'].'"'; ?>><?php echo $hm[$i]['model']; ?></a>
	                                                        </div>
	                                                        <div class="p_exerpt no-flicker">
	                                                            <p><?php echo $hm[$i]['alt']; ?></p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <?php } ?>

	                                         
	                                        
	                                        <!--endofdiv-->
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="clear"></div>
	                    </section>
	            	
	            	 <!-- FLEXSLIDER -->
	             
	                <!-- end container -->
	                
	            </div>
	            
	            <!-- BEGIN: RIGHT SIDEBAR -->
	           <div class="four columns">
				<div id="secondary" class="widget-area four columns alpha">
					<!-- Begin Search Form -->
					<div id="search-2" class="widget widget_search">			
						<form role="search" method="get" id="searchform" action="products.php">
							<div><label class="screen-reader-texts" for="s">Search for:</label>
								<input type="text" value="To search type and hit enter" onfocus="if ($(this).val() === 'To search type and hit enter') $(this).val('');" onblur="if ($(this).val() === '') $(this).val('To search type and hit enter');" name="search" id="s" />
								<input type="submit" id="searchsubmit" value="Search" />
							</div>
						</form>
					</div>
					<!-- End Search Form -->
					<div id="tag_cloud-4" class="widget widget_tag_cloud">
					<h2>Categories</h2>
					<div class="tagcloud">
						<a href='products.php' class='tag-link-11' title='All' style='font-size: 7pt;'>All</a>
						<a href='products.php?category=fiber' class='tag-link-11' title='Fiber Laser Cutting Machine' style='font-size: 7pt;'>Fiber Laser Cutting Machine</a>
						<a href='products.php?category=yag' class='tag-link-12' title='YAG Laser Cutting Machine' style='font-size: 8pt;'>YAG Laser Cutting Machine</a>
						<a href='products.php?category=tube' class='tag-link-5' title='Tube Laser Cutting Machine' style='font-size: 8pt;'>Tube Laser Cutting Machine</a>						
						
					</div>
				</div>
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
									<a class="the_title" <?php echo 'href="news_more.php?id='.$news[$i]['news_id'].'" onclick="nb_click(\''.$news[$i]['news_id'].'\',\''.$news[$i]['click'].'\')"   title="'.$news[$i]['title'].'">'.mb_substr($news[$i]['title'],0,27,'UTF-8').'[...]'; ?></a><br />
									<div class="recent-contantbottom">
										<span class="blog-i">by:&nbsp;</span><a class="the_author" href="#"><?php echo $news[$i]['author']; ?></a>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- End Latest Post 1 -->
							
						</ul>
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
	            <!--  END: LEFT SIDEBAR -->
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