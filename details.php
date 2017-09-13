<!DOCTYPE html>
<?php 	
	include 'head_foot.php';
	$headFoot = new Head();	

	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
		$detail = getData("SELECT * FROM `home_products` WHERE `id`=$id");	
		if(empty($detail)){
			header("Location: products.php");
			exit();
		}
	}else{
		header("Location: products.php");
		exit();
	}
	
	$news = getData("SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 5");
	$nbN = count($news);	
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	
	<meta name="keywords" content="laser cutting machine,metal laser cutting machine,laser cutting and engraving machine,laser cutter,laser cutting,Cnc laser cutting machine,Fiber laser cutting machine,Metal cutting machine,Metal laser cutting machine,Laser cutting machine,Laser cutting machines,laser engraver, cutting, laser, cutter, laser marker">
	<meta name="description" content="Find out about GNlaser Laser and the history of the company"/>
	<title> Laser Cutting Machine Details | 2016 China Fiber Laser Cutting,Laser Engraving and Laser marking Machine For Sale | <?php echo $detail[0]['model']; ?></title>
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
	                <h2 class="secondaryTitle"><?php echo $detail[0]['model']; ?></h2>
	            </div>
	        </div>
	    </div>

		<div class="entry-content">					
	        <div class="container">
	            
	            <!-- BEGIN: CONTENT -->
	            <div class="twelve columns">
	            	<section class="home_widget recentProjects3">
			            	<div class="zaptitle page_title_s2">
					        	<span class="page_info_title_s2"><?php echo $detail[0]['model']; ?></span>
					        </div>
	                        <div class="projects_container_proj sixteen columns"> 	                                                 
	                           <img style="width: 100%;" alt="" <?php echo 'src="'.$detail[0]['path'].'"'; ?> />
	                        </div>
	                        <div class="clear"></div>
	                        <div class="shortcode-services default">
						        <div class="service-items itemsPerRow-3">
						            <div class="row row-0">
						                <ul>
						                    <li class="service-item no-flicker four columns">
						                        <p class="fa_icon_big">
						                        	<i class="fa fa-bolt"></i>
						                        </p>
						
						                        <div class="text_container_fabig">
						                            <h4><?php echo $detail[0]['power']; ?></h4>
						
						                            <p class="item-desc">Laser Source Power</p>
						                        </div>
						                    </li>
						
						                    <li class="service-item no-flicker four columns">
						                        <p class="fa_icon_big">
						                        	<i class="fa fa-fire"></i>
						                        </p>
						
						                        <div class="text_container_fabig">
						                            <h4><?php echo $detail[0]['length']; ?></h4>
						
						                            <p class="item-desc">Laser Wave Length</p>
						                        </div>
						                    </li>
						
						                    <li class="service-item no-flicker four columns">
						                        <p class="fa_icon_big">
						                        	<i class="fa fa-scissors"></i>
						                        </p>
						
						                        <div class="text_container_fabig">
						                            <h4><?php echo $detail[0]['cutting_range']; ?></h4>
						
						                            <p class="item-desc">Cutting Range</p>
						                        </div>
						                    </li>
						                    <li class="service-item no-flicker four columns">
						                        <p class="fa_icon_big">
						                        	<i class="fa fa-power-off"></i>
						                        </p>
						
						                        <div class="text_container_fabig">
						                            <h4><?php echo $detail[0]['consumption']; ?></h4>
						
						                            <p class="item-desc">Power Consumption</p>
						                        </div>
						                    </li>
						                </ul>
						            </div>
						        </div>
						    </div>
						    <div class="clear"></div>
						    <div class="white-space"></div>
						    <section class='special_tabs'>

				                <div class='label 1'>
				                    <div class='designare_icon_special_tabs'><i class='fa fa-info'></i>
				                    </div><span class='tab_title'>Specification</span>
				                </div>
				                <div class='content 1'>
				                    <h1 class="aligncenter">Specification</h1>
				                    <br/>
									<?php echo $detail[0]['specification']; ?>
				                </div>
				                <div class='label 2'>
				                    <div class='designare_icon_special_tabs'><i class='fa fa-cog'></i></div>
				                    <span class='tab_title'>Feature</span>
				                </div>
				                <div class='content 2'>
				                    <h1 class="aligncenter">Feature</h1>
				                    <br/>
				                    <?php echo $detail[0]['feature']; ?>
				                </div>
				                <div class='label 3'>
				                    <div class='designare_icon_special_tabs'><i class='fa fa-star'></i></div>
				                    <span class='tab_title'>Material</span>
				                </div>
				                
				                <div class='content 3'>
					                <h1 class="aligncenter">Material</h1>
				                    <br/>
				                    <div class="aligncenter">
				                        <?php echo $detail[0]['material']; ?>
				                    </div>
				                </div>
				                <div class='label 4'>
				                    <div class='designare_icon_special_tabs'><i class='fa fa-flask'></i></div>
				                    <span class='tab_title'>Application</span>
				                </div>
				                <div class='content 4'>
				                    <h1 class="aligncenter">Application</h1>
				                    <br/>
				                    <div class="aligncenter">
				                        <?php echo $detail[0]['application']; ?>
				                    </div>
				                </div>
				                <div class='label 5'>
				                    <div class='designare_icon_special_tabs'><i class='fa fa-pencil-square-o'></i></div>
				                    <span class='tab_title'>Sample</span>
				                </div>
				                <div class='content 5'>
				                    <h1 class="aligncenter">Sample</h1>
				                    <h6 class="aligncenter">Cutting Sample</h6>
				                    <br/>
				                    <article id="projects-2">
						            	<div class="entry-content" style="margin-top: 0;">
						                    <div class="thumbnails_list aligncenter">
						                        <ul id="da-thumbs" class="da-thumbs proj_list">
						                            <li data-id="id-1" class="illustrations logotype  slides_item post-thumb view eight columns ">						                                
						                                <img  <?php echo 'alt="Sample 1" title="Sample 1" src="'.$detail[0]['sample1'].'"'; ?> >
						                            </li>
						                            <li data-id="id-2" class="design logotype  slides_item post-thumb view eight columns ">
						                                <img <?php echo 'alt="Sample 2" title="Sample 2" src="'.$detail[0]['sample2'].'"'; ?>>	                                    
						                            </li>
						                            <li data-id="id-3" class="logotype  slides_item post-thumb view eight columns ">
						                                <img <?php echo 'alt="Sample 3" title="Sample 3" src="'.$detail[0]['sample3'].'"'; ?>>
						                            </li>
						                            <li data-id="id-4" class="wordpress  slides_item post-thumb view eight columns ">
						                                <img <?php echo 'alt="Sample 4" title="Sample 4" src="'.$detail[0]['sample4'].'"'; ?>>						                            </li>	      
						                        </ul>
						                    </div>
						                </div>
						            </article>
				                </div>
				            </section>
				            <div class="white-space"></div>
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