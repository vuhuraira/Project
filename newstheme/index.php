<!DOCTYPE html>
<html>
	<head>
		<title>This is Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--------------------------- Bootstrap --------------------->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		
		<!-- ----------------------Amazing Mobile Menu CSS ---------->
		<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.fs.naver.css" rel="stylesheet" type="text/css" />		
		
		<!-- News Tickr CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/ticker-style.css" rel="stylesheet" type="text/css" />
		
		<!------------------------Bebas Webfont ---------------------->
		
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" rel="stylesheet" media="screen">	
		
		<!----------------------- Nivo Slider CSS -------------------->
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
		
		<!-------------------------- Main CSS-------------------------->
		
		<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" media="screen">
		
		<!------------------------ Responsive Framework --------------->
		<link href="responsive.css" rel="stylesheet" media="screen">
		<?php wp_head()?>
	</head>
	<body>
		<div class="body_bg">
		
		
		<div class="column">
			<div class="header">
				<div class="logo floatleft">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
				</div>
				<div class="headermenu floatleft">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Contact Us</a></li>
						<li><a href="">Subscribe</a></li>
						<li><a href="">Login</a></li>
					</ul>
				</div>
				<div class="header_right floatright">
					<div class="social_share">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/feed.png" alt="" />
					</div>
					
					<div class="news_search">
						<input type="text" />
						<input type="submit" value="Search"/>
					</div>
				</div>
			</div>
<!-----------------------------mainmenu-------------------------------------->		
		
			<div class="mainmenu">
				<ul id="nav">
					<li><a href="">world news</a></li>
					<li><a href="">sports</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>
					</li>
					<li><a href="">tech</a></li>
					<li><a href="">business</a></li>
					<li><a href="">Movies</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>					
					</li>
					<li><a href="">entertainment</a></li>
					<li><a href="">culture</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>					
					</li>
					<li><a href="">Books</a></li>
					<li><a href="">classifieds</a></li>
					<li><a href="">blogs</a></li>
				</ul>
				<div class="mobile_menu_area">
				<nav>
				<ul id="mobile_menu">
					<li><a href="">world news</a></li>
					<li><a href="">sports</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>
					</li>
					<li><a href="">tech</a></li>
					<li><a href="">business</a></li>
					<li><a href="">Movies</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>					
					</li>
					<li><a href="">entertainment</a></li>
					<li><a href="">culture</a>
						<ul>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
							<li><a href="">Dropdown Item</a></li>
						</ul>					
					</li>
					<li><a href="">Books</a></li>
					<li><a href="">classifieds</a></li>
					<li><a href="">blogs</a></li>
				</ul>
				</nav>
				</div>
			</div>
			<div style="clear:both"></div>
<!---------------------------newstickr-------------------------------------->
		
			<div class="news_tickr">
				<ul id="js-news" class="js-hidden">
					<li class="news-item"><a href="#">This is a news website by group zend</a></li>
					<li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
					<li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
					<li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
				</ul>			
			</div>
			
			
<!----------------------------slider---------------------------------------->			
			<div class="slider">
				<div class="left_slider floatleft">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
							<img src="<?php echo get_template_directory_uri(); ?>/img/toystory.jpg" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/up.jpg" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/walle.jpg" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/nemo.jpg" title="#htmlcaption" alt="" />
						</div>
						<div id="htmlcaption" class="nivo-html-caption">
							<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
						</div>
					</div>				
				</div>
				<div class="right_video floatright">
					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single_video.png" alt="" />
						<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a></h3>
					</div>
					
					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single_video.png" alt="" />
						<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a></h3>
					</div>

					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single_video.png" alt="" />
						<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a></h3>
					</div>

					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single_video.png" alt="" />
						<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a></h3>
					</div>					
					<a href="" class="video_more">More</a>
				</div>
			</div>
			<div class="maincontent">
				<div class="left_content floatleft">
					<div class="latest_from_category">
						<h2 class="latest_frm_cat_title">from around the world</h2>
						<a href="" class="latest_more_link">more</a>
						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>
						
						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>

						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>						
					</div>
					
					<div class="latest_from_category">
						<h2 class="latest_frm_cat_title">from around the world</h2>
						<a href="" class="latest_more_link">more</a>
						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>
						
						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>

						<div class="single_cate_post floatleft">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category_post.png" alt="" />
							<h3>Lorem ipsum dolor sit amet, consectetur</h3> 
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
							<a href="" class="readmore">Read More</a>
						</div>						
					</div>	
					
					<div class="gallery_left">
						<h2 class="gallery_title">from around the world</h2>
						<a href="" class="gallery_more_link">more</a>
						<div class="gallery_content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/single_gallery.png" alt="" />
						</div>
					</div>	

					<div class="tech_news_cat">
						<h2 class="tech_cat_title">from around the world</h2>
						<a href="" class="tech_cat_more_link">more</a>
						<div class="single_tech_category floatleft">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta">by <a href="">John Doe</a> | 29 comments</p>
						</div>
						
						<div class="single_tech_category floatleft">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta">by <a href="">John Doe</a> | 29 comments</p>
						</div>

						<div class="single_tech_category floatleft">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta">by <a href="">John Doe</a> | 29 comments</p>
						</div>

						<div class="single_tech_category floatleft">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta">by <a href="">John Doe</a> | 29 comments</p>
						</div>						
					</div>
					
					<div class="blank_line_space"></div>
				</div>
				<div class="middle_content floatleft">
					<div class="from_the_desk">
						<h2 class="from_the_desk_title">from the desk</h2>
						<div class="single_from_the_desk">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta"><a href="">Read More</a> 3 Hours ago</p>						
						</div>

						<div class="single_from_the_desk">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta"><a href="">Read More</a> 3 Hours ago</p>						
						</div>

						<div class="single_from_the_desk">
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>
							<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...</p>
							<p class="post_meta"><a href="">Read More</a> 3 Hours ago</p>						
						</div>						
					</div>
					
					<div class="editorial_section">
						<h2 class="editorial_section_title">Editorial Section</h2>
						<div class="single_editorial_section">
							<img src="<?php echo get_template_directory_uri(); ?>/img/editorial_section.png" alt="" />
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>				
						</div>	

						<div class="single_editorial_section">
							<img src="<?php echo get_template_directory_uri(); ?>/img/editorial_section.png" alt="" />
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>				
						</div>

						<div class="single_editorial_section">
							<img src="<?php echo get_template_directory_uri(); ?>/img/editorial_section.png" alt="" />
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>				
						</div>

						<div class="single_editorial_section">
							<img src="<?php echo get_template_directory_uri(); ?>/img/editorial_section.png" alt="" />
							<h3><a href="">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a></h3>				
						</div>						
					</div>					
				</div>
				<div class="right_sidebar">
					<div class="single_sidebar">
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/right_promo.png" alt="" /></a>
					</div>
					
					<div class="single_sidebar newsletter_sidebar">
						<h3>Sign  Up  for    Newsletter</h3>
						<p>Sign up to receive our free newsletters!</p>
						<div class="subscription_box">
							<input type="text" />
							<input type="text" />
							<input type="submit" value="submit" />
							<p class="we_do_not_span">We do not spam. We value your privacy!</p>
						</div>
					</div>
					
					<div class="single_sidebar populat_text">
						<h2>popular</h2>
						<div class="single_popular">
							<p class="post_date">December 2015</p> 
							<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="">Read More</a></p>
						</div>
						
						<div class="single_popular">
							<p class="post_date">December 2015</p> 
							<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="">Read More</a></p>
						</div>

						<div class="single_popular">
							<p class="post_date">December 2015</p> 
							<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="">Read More</a></p>
						</div>

						<div class="single_popular">
							<p class="post_date">December 2015</p> 
							<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="">Read More</a></p>
						</div>

						<a href="" class="popular_more">more</a>
					</div>
					
					<div class="single_sidebar">
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/subscribe.png" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="maincontent_bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bottom_promo.png" alt="" />
			</div>
			<div class="footer">
				<ul class="footermenu">
					<li><a href="">world news</a></li>
					<li><a href="">sports</a></li>
					<li><a href="">tech</a></li>
					<li><a href="">business</a></li>
					<li><a href="">Movies</a></li>
					<li><a href="">entertainment</a></li>
					<li><a href="">culture</a></li>
					<li><a href="">Books</a></li>
					<li><a href="">classifieds</a></li>
					<li><a href="">blogs</a></li>
				</ul>
				<p class="copyright_text">Copyright 2015 The News Reporter.Design by group Zend</p>
			</div>
		</div>
		</div>
		<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			controlNav: false
		});
    });
    </script>	
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#js-news').ticker();
    });
</script>		
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fs.naver.min.js"></script>
		<script type="text/javascript">
$("nav").naver({
    animated: true
});		
		</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<?php wp_footer()?>
	</body>
</html>