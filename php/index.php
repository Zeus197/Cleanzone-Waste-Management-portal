<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Waste Management</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/gogreen/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<section class="page_topline cs two_color section_padding_top_5 section_padding_bottom_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 text-center text-sm-left">
							<p class="divided-content">
					<span class="medium black">
						Welcome to Waste Management
					</span>
					<a href="#">How to Find Us</a>
					<a href="#">Give Feedback</a>
					<a href="web/signin.php">Login</a>
				</p>
						</div>
						<div class="col-sm-6 text-center text-sm-right">

							<div class="widget widget_search">
								<form method="get" class="searchform form-inline" action="http://webdesign-finder.com/html/gogreen/">
									<div class="form-group-wrap">
										<div class="form-group margin_0">
											<label class="sr-only" for="topline-search">Search for:</label>
											<input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
										</div>
										<button type="submit" class="theme_button">Search</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</section>

			<header class="page_header header_white toggler_xs_right section_padding_20">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="index.php" class="logo top_logo">
									<img src="images/logo.png" alt="">
									<span class="logo_text">
										<span class="big">Waste Management</span>
										<span class="small-text">Recycling</span>
									</span>
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index.php">Home</a>
											<ul>
												<li>
													<a href="web/main-page.php">Admin Dashboard</a>
												</li>
											</ul>
										</li>
										
										<!--<li>
											<a href="login.php">Login</a>
											<ul>

												<li>
													<a href="login.php">Login</a>
													</li>
													</ul>
												</li>
										<li>-->

										<li>
											<a href="about.php">About Us</a>
											<ul>

												<li>
													<a href="about.php">About</a>
													</li>
													</ul>
												</li>

										
												<!-- eof shop -->

												
												<!-- events -->
											
												<!-- eof events -->


												

										
										<!-- eof pages -->

										<li>
											<a href="#">Feedback</a>
											<ul>
												
												<li>
													<a href="feedback1.php">Feedback Form</a>
												</li>
												
											</ul>
												
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->


										<!-- gallery -->
										<li>
											<a href="#">Gallery</a>
											<ul>
												<!-

												<!-- Gallery carousel -->
												<li>
													<a href="gallery-carousel.php">Gallery Carousel</a>
													
												</li>
											
											</ul>
										</li>
										<!-- eof Gallery -->

										<!-- blog -->
										<li>
											<a href="#">Services </a>
											<ul>

												<li>
													<a href="#">Dry</a>
													<ul>
														<li>
															<a href="dry_form.php">Dry Wastage</a>
														</li></ul>
												</li>
												<li>
													<a href="#">Wet</a>
													<ul>
														<li>
															<a href="wet_form.php">Wet Wastage</a>
														</li></ul>
												</li>
												<li>
													<a href="#">Recycle System</a>
													
												       <ul>
														<li>
															<a href="service_dry.php">Recycle Dry Waste</a>
														</li>
														
														<li>
															<a href="service_wet.php">Recycle Wet Waste</a>
														</li></ul>
												</li>
											
											</ul>
										</li>
										<!-- eof blog -->

										<!-- contacts -->
										<li>
											<a href="contact.html">Contact</a>
											</li>
										<!-- eof contacts -->
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>

							<div class="header_right_buttons display_table_cell text-right hidden-xs">
								<div class="darklinks">
									<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section class="ds section_padding_top_15 section_padding_bottom_15 table_section section_bottom_overlap">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9 col-sm-8 text-center text-sm-left">
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium grey">+91 7889413686</span>
									<br>
									<span class="small-text small-spacing">2/5A,Mini Market,Trikuta Nagar,Jammu-180012</span>
								</div>
							</div>
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-clock-o"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium grey">Open Hours</span>
									<br>
									<span class="small-text small-spacing">Weekdays 8.00-18.00, Sat: closed</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 text-center text-sm-right">
							<a href="#pickup" class="theme_button color2 margin_0">Schedule pickup</a>
						</div>
					</div>
				</div>
			</section>

			<section class="intro_section page_mainslider ds">
				<div class="flexslider" data-dots="false">
					<ul class="slides">

						<li>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight">
														Electronics
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h2>
														Recycling
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">About us</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h2 class="small">
														Save Your Planet
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight text-uppercase bottommargin">
														Save Your community
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">Our services</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight text-uppercase">
														Circular
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h2 class="text-uppercase">
														Economy
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">contact us</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->

				<div class="scroll_button_wrap">
					<a href="#about" class="scroll_button">
						<span class="sr-only">scroll down</span>
					</a>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_100 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
							<h2 class="section_header with_icon">
								Welcome to Waste Management
							</h2>
							<p class="small-text grey">More About Us</p>
							<p class="bottommargin_30">
				Waste Management is devoted to the presentation and discussion of information on solid waste generation, characterization, minimization, collection, separation, treatment and disposal, as well as manuscripts that address waste management policy, education and economic and environmental assessments.
				</p>
							<img src="images/signature.png" alt="" />
						</div>
					</div>
					<div class="row topmargin_40 columns_margin_top_60">
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color2 round size_small offset_icon">
									<i class="fa fa-leaf"></i>
								</div>
								<h4 class="poppins hover-color2">
									<a href="#">Corporate Services</a>
								</h4>
								<p>
						Guaranteed that all of your universal waste management is performed safely and responsibly.
					</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color3 round size_small offset_icon">
									<i class="fa fa-inbox"></i>
								</div>
								<h4 class="poppins hover-color3">
									<a href="#">Convenient Pickup</a>
								</h4>
								<p>
						We offer business pickup services to safely recycle your electronics in a safe manner.
					</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color round size_small offset_icon">
									<i class="fa fa-calendar"></i>
								</div>
								<h4 class="poppins">
									<a href="#">E-waste Events</a>
								</h4>
								<p>
						We work with non-profits, businesses, and other organizations to host community e-waste events.
					</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="pickup" class="ds page_contact parallax section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon">
								Schedule Pickup
							</h2>
							<p class="small-text">For old equipment</p>

							<form class="contact-form row columns_margin_bottom_20" method="post" action="http://webdesign-finder.com/html/gogreen/">


								<div class="col-md-4">
									<div class="form-group">
										<label for="pickup-name">Full Name
											<span class="required">*</span>
										</label>
										<i class="fa fa-user highlight2" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="name" id="pickup-name" class="form-control" placeholder="Full Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="pickup-phone">Phone Number
											<span class="required">*</span>
										</label>
										<i class="fa fa-phone highlight2" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="pickup-phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group select-group">
										<label for="pickup-date">Date
											<span class="required">*</span>
										</label>
										<i class="fa fa-calendar highlight2" aria-hidden="true"></i>
										<select aria-required="true" id="pickup-date" name="date" class="choice empty form-control">
											<option value="" disabled selected data-default>Date</option>
											<option value="1306">13.06</option>
											<option value="1406">14.06</option>
											<option value="1506">15.06</option>
											<option value="1606">16.06</option>
											<option value="1706">17.06</option>
											<option value="1806">18.06</option>
											<option value="1906">19.06</option>
											<option value="2006">20.06</option>
										</select>
										<i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group select-group">
										<label for="pickup-time">Time
											<span class="required">*</span>
										</label>
										<i class="fa fa-clock-o highlight2" aria-hidden="true"></i>
										<select aria-required="true" id="pickup-time" name="time" class="choice empty form-control">
											<option value="" disabled selected data-default>Time</option>
											<option value="08am">8:00 AM</option>
											<option value="09am">9:00 AM</option>
											<option value="10am">10:00 AM</option>
											<option value="11am">11:00 AM</option>
											<option value="12am">12:00 PM</option>
											<option value="13pm">13:00 PM</option>
											<option value="14pm">14:00 PM</option>
											<option value="15pm">15:00 PM</option>
											<option value="16pm">16:00 PM</option>
											<option value="17pm">17:00 PM</option>
										</select>
										<i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-sm-12">

									<div class="form-group">
										<label for="pickup-message">Message</label>
										<i class="fa fa-comment-o highlight2" aria-hidden="true"></i>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="pickup-message" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="contact-form-submit topmargin_20">
										<button type="submit" id="pickup-_submit" name="contact_submit" class="theme_button color1">Order pickup</button>
									</div>
								</div>


							</form>

						</div>
					</div>
				</div>
			</section>

			<section id="services" class="ls ms section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon">
								Our Services
							</h2>
							<p class="small-text grey">What we do</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_20">
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/gallery/09.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Dry Wastage</a>
									</h4>
									<p class="margin_0">
							Clients can simply schedule their hard drive destruction online and through our website.
						</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/gallery/10.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Wet Wastage</a>
									</h4>
									<p class="margin_0">
							Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
						</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/gallery/03.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Recycling</a>
									</h4>
									<p class="margin_0">
							Buyers are welcome to leave their best offer on available electronic products.
						</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-sm-12 text-center">
							<a href="services.html" class="theme_button wide_button color1">All services</a>
						</div>
					</div>
				</div>
			</section>

			<section class="ls overflow_hidden half_section section_padding_top_100 section_padding_bottom_150 columns_padding_80">
				<div class="image_cover image_cover_left">
					<!-- you can put your image here instead of puting it in column-->
					<!-- <img src="img/parallax/half_image.jpg" alt=""> -->
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<img src="img/parallax/half_image.jpg" alt="">
						</div>
						<!-- .col-* -->
						<div class="col-md-6">

							<h2 class="section_header with_icon">
								Our Mission
							</h2>
							<p class="small-text grey">About us</p>

							<p>
					Our mission is to  ensure the delivery of an integrated,cost effective,and environmentally sound solid waste management system as we can
				</p>

							<div class="panel-group" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
												<i class="fa fa-envelope"></i>
												Reducing waste
											</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
										Reducing what you waste is a great way to reduce your impact on the environment.Unless you live a zero-waste lifestyle, thier is always room for improvement when it comes to take care of the planet.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
												<i class="fa fa-envelope"></i>
												Reduce program
											</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
										Waste is a form of inefficiency.Developing a waste reduction program provides an opportunity to redesign processes to create less waste and thier by increase efficiency
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
												<i class="fa fa-envelope"></i>
												recycle more
											</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											Recycling is the process of converting waste materials into new materials and objects.It is an alternative to "conventional" based disposal that can save material and help lower green house gas emissions.
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->


					</div>
				</div>

			</section>

			<section id="reviews" class="ls section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h2 class="section_header with_icon">
								Testimonials
							</h2>
							<p class="small-text grey">what clients say</p>

							<div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true">

								<blockquote class="with_quotes text-center">
									<img src="images/team/02.jpg" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
									<div class="item-meta">
										<h4 class="poppins margin_0">Gregory Rondeau</h4>
										<p class="small-text">Director</p>
									</div>
								</blockquote>

								<blockquote class="with_quotes text-center">
									<img src="images/team/05.jpg" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
									<div class="item-meta">
										<h4 class="poppins margin_0">Lamar Owens</h4>
										<p class="small-text">CEO</p>
									</div>
								</blockquote>

								<blockquote class="with_quotes text-center">
									<img src="images/team/07.jpg" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
									<div class="item-meta">
										<h4 class="poppins margin_0">Robert Wade</h4>
										<p class="small-text">Designer</p>
									</div>
								</blockquote>

							</div>

						</div>
					</div>
				</div>
			</section>

		
					<div class="row topmargin_30">
						<div class="col-sm-12 text-center">
							<a href="blog-left.html" class="theme_button wide_button color1">Our blog</a>
						</div>
					</div>
				</div>
			</section>

			<section class="cs main_color2 section_padding_top_30 section_padding_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium black">7889413686</span>
									<br>
									<span class="small-text small-spacing lightgrey">2/5A,Mini Market,Trikuta Nagar,Jammu-180012</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-clock-o"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium black">Open Hours</span>
									<br>
									<span class="small-text small-spacing lightgrey">Weekdays 8.00-18.00, Sat: closed</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<div class="widget widget_mailchimp">
								<form class="signup topmargin_10" action="http://webdesign-finder.com/html/gogreen/" method="get">
									<!-- <div class="form-group-wrap"> -->
									<div class="form-group margin_0">
										<input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address">
									</div>
									<button type="submit" class="theme_button">Sign Up!</button>
									<!-- </div> -->
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls page_map" data-address="Western Union, 393 Front St, Hempstead, NY 11550, USA">
				<!-- marker description and marker icon goes here -->
				<div class="map_marker_description">
					<h3>Map Title</h3>
					<p>Map description text</p>
					<img class="map_marker_icon" src="images/map_marker_icon.png" alt="">
				</div>
			</section>

			<section class="ls">
				<div class="owl-carousel" data-responsive-xlg="8" data-responsive-lg="8" data-responsive-md="5" data-responsive-sm="3" data-responsive-xs="2" data-loop="true" data-margin="0" data-nav="true">

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/01.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/01.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/02.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/03.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/04.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/05.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/05.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/06.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/06.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/07.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/07.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/08.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/08.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/09.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/09.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/10.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/10.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/11.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/11.jpg"></a>
							</div>
						</div>
					</div>

					<div class="vertical-item content-absolute corporate consulting">
						<div class="item-media">
							<img src="images/gallery_square/12.jpg" alt="">
							<div class="media-links">
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/12.jpg"></a>
							</div>
						</div>
					</div>

				</div>
			</section>
<?php include("footer.php");
?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>


<!-- Mirrored from webdesign-finder.com/html/gogreen/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 May 2018 04:40:46 GMT -->
</html>