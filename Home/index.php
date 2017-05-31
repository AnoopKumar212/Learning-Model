<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>Learning-Model</title>

		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

		<!-- google fonts -->
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>

		<!-- css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css" media="screen"/>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.js"></script>
		<![endif]-->

		<!--[if IE 8]>
	    	<script src="assets/js/selectivizr.js"></script>
	    <![endif]-->
	</head>

	<body>
		<div id="drawer-right">
			<div class="cross text-right">
				<a class="toggleDrawer" href="#"><i class="fa fa-times-circle fa-2x"></i></a>
			</div>
			<h2><a href="logout.php">Log Out</a></h2>
			<h2>Navigate</h2>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="#wrapper"><i class="fa fa-home"></i> Home</a>
					</li>
					<li>
						<a href="#portfolio"><i class="fa fa-bookmark"></i> Portfolio</a>
					</li>
					<li>
						<a href="#services"><i class="fa fa-tasks"></i> Services</a>
					</li>
					<li>
						<a href="#blog"><i class="fa fa-wordpress"></i> Work for us</a>
					</li>
					<li>
						<a href="#parallax"><i class="fa fa-heart"></i> Brief</a>
					</li>
					<li>
						<a href="#testimonials"><i class="fa fa-thumbs-up"></i> Top Contributors</a>
					</li>
					<li>
						<a href="#contact"><i class="fa fa-phone-square"></i> Contact</a>
					</li>
				</ul>
			</nav>
			<div class="social">
				<h2>Stay Connected</h2>
				<ul>
					<li><a href=""><i class="fa fa-facebook-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-tumblr-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
				</ul>
			</div>
		</div><!-- #drawer-right -->

		<div id="wrapper">

			<div id="header" class="content-block header-wrapper">
				<div class="header-wrapper-inner">
					<section class="top clearfix">
						<div class="pull-left">
							<h1 style="color:white;">
								<?php session_start();
								if(isset($_SESSION["username"]))
								{
								    $word = $_SESSION["username"];
								    echo($word);
								}
								else
								{
									header('Location:../index.php');
								}
								?></h1>
						</div>
						<div class="pull-right">
							<a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
						</div>
					</section>
					<section class="center">
						<div class="slogan">
							Learning-Model
						</div>
						<div class="secondary-slogan">
							Diving into the ocean of knowledge
						</div>
					</section>
					<section class="bottom">
						<a id="scrollToContent" href="#">
							<img src="assets/images/arrow_down.png">
						</a>
					</section>
				</div>
			</div><!-- header -->


			<div class="content-block" id="portfolio">
				<div class="container">
					<header class="block-heading cleafix">
						<a href="" class="btn btn-o btn-lg pull-right">View All</a>
						<h1>Our Latest Works</h1>
						<p>Take a look at some of our recent works</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/rain_1-320x240.jpg)">
									<span class="btn btn-o-white">Computer Quiz</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/min_icons_thumb1-320x240.jpg)">
									<span class="btn btn-o-white">Guess The Person</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/flat_icons_thumb.jpg)">
									<span class="btn btn-o-white">GAME 2048</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/wood-320x240.jpg)">
									<span class="btn btn-o-white">Maths Test</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/bike-320x240.jpg)">
									<span class="btn btn-o-white">Comming Soon</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/six_1-320x240.jpg)">
									<span class="btn btn-o-white">Comming Soon</span>
								</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #portfolio -->

			<div class="content-block parallax" id="services">
				<div class="container text-center">
					<header class="block-heading cleafix">
						<h1>Our Services</h1>
						<p>A little about what we do</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-4">
								<div class="service">
									<i class="fa fa-send-o"></i>
									<h2>Designers</h2>
									<p>We have the best deginers to build the project right as you wish. They will bring to you the best possible look and feel which you might have ever experienced.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<i class="fa fa-heart-o"></i>
									<h2>Developers</h2>
									<p>The budding developers will bring you the background code with which you may never go wrong. Their motive is to work with fun.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<i class="fa fa-camera-retro"></i>
									<h2>Hosting</h2>
									<p>You have an idea we welcome you to contribute your idea on our website. We will host it for you FREE of cost. Get a chance to be a designer or a developer.</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #services -->


			<div class="content-block" id="blog">
				<div class="container">
					<header class="block-heading cleafix">
						<a href="#" class="btn btn-o btn-lg pull-right">View All</a>
						<h1>Works to be done</h1>
						<p>If you are intrested you can do the job for us.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4 blog-post">
								<img src="assets/images/bike_water1-1000x600.jpg">
								<a href="../Administrator/administrative.php"><h2>Upload Quiz Questions</h2></a>
								<div class="date"></div>
								<p>If you have got some questions with you and you are intrested to ask the audience just upload here</p>
								<a href="../Administrator/administrative.php">Click Here</a>
							</div>
							<div class="col-sm-4 blog-post">
								<img src="assets/images/mac_glasses1-1000x600.jpg">
								<a href="#"><h2>Comming Soon</h2></a>
								<div class="date"></div>
								<p>The work is still awaited.</p>
								<a href="">Read More</a>
							</div>
							<div class="col-sm-4 blog-post">
								<img src="assets/images/road-1000x600.jpg">
								<a href="#"><h2>Comming Soon</h2></a>
								<div class="date"></div>
								<p>The work is still awaited.</p>
								<a href="">Read More</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #blog -->


			<div class="content-block parallax" id="parallax">
				<div class="container text-center">
					<h1>This site is built for learning purpose, you are free to share the PHP codes anywhere you want.<br/> NOTE : YOU MAY NOT SHARE THE TEMPLATES.</h1>
					<a href="" class="btn btn-o-white btn-lg">Get This Website Code Here</a>
				</div>
			</div><!-- #parallax -->

			<div class="content-block" id="testimonials">
				<div class="container">
					<header class="block-heading cleafix">
						<h1>Top Contributors</h1>
						<p>Some happy contributors have to say.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-4">
								<div class="testimonial">
									<img src="assets/images/testimonial_31-190x190.jpg">
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
									<strong>Jhon Doe</strong><br/>
									<span>Head of Ideas, Technext</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="testimonial">
									<img src="assets/images/testimonial_11-190x190.jpg">
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
									<strong>Jane Doe</strong><br/>
									<span>CEO, Apple Inc</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="testimonial">
									<img src="assets/images/testimonial_22-190x190.jpg">
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
									<strong>Albert Doe</strong><br/>
									<span>Team Lead, Design Studio</span>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div><!-- /#testimonials -->


			<div class="content-block" id="contact">
				<div class="container text-center">
					<header class="block-heading cleafix">
						<h1>Contact Us</h1>
						<p>Feel free to drop us a line.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<form class="" role="form">
									<div class="form-group">
								    	<input type="email" class="form-control form-control-white" id="subject" placeholder="Your Name" required>
								  	</div>
								    <div class="form-group">
								    	<input type="email" class="form-control form-control-white" id="exampleInputEmail2" placeholder="Enter email" required>
								    </div>
								    <div class="form-group">
								    	<textarea class="form-control form-control-white" placeholder="Write Something" required></textarea>
								    </div>
								  <input type="submit" class="btn btn-o-white" value="Say Hello">
								</form>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #contact -->

			<div class="content-block" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">&copy; Copyright Learning Model</div>
					</div>
				</div>
			</div><!-- #footer -->


		</div><!--/#wrapper-->




		<script src="assets/js/jquery-2.1.3.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.actual.min.js"></script>
		<script src="assets/js/jquery.scrollTo.min.js"></script>
		<script src="assets/js/script.js"></script>

	</body>
</html>
