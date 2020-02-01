<?php include 'ctravels.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- FOR IE9 below -->
<script src="jquery.js"></script>
<script src="jquery1.js"></script>
</head>
<body>


	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="hotel.php">GJR TRAVELS<?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";}?> </a></h1>
				<?php	if(!isset($_COOKIE['user'])){?>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="hotel.php">Home</a></li>
							<li>
								<a  href="#" class="fh5co-sub-ddown">transporttype</a>
								<ul class="fh5co-sub-ddown">
								 	<li><a href="#">road way</a><ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">bus</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">lari</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">others</a></li>
			
										</ul>
									</li>
								 	<li><a href="#">rail way</a></li>
									<li>
										<a href="#" >air ways</a>
										
								   </li>
									<li><a href="#">water way</a></li> 
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<?php if(isset($_COOKIE['user']))
							   { ?>
							<li><a href="rtf.php">RFT</a></li>
							<?php } ?>
							<?php if(isset($_COOKIE['user']))
							      { $value=$_COOKIE['user'];
								  $sql="select * from csignup where id='$value'";
								  $result=mysqli_query($conn1,$sql);
								  if(mysqli_num_rows($result)==1)
								  { 
								  ?>
								  <li><a href="logout.php">logout</a></li>
								  <?php }
								  else{?>
								  <li><a href="ww.html">login</a></li>
							<li><a href="signup.html">signup</a></li>
							<?php } ?>
								<?php  }
								   else{?>
							<li><a href="ww.html">login</a></li>
							<li><a href="signup.html">signup</a></li>
							<?php } ?>
							
							<li><a href="contact.php">Contact</a></li>
							<?php if(isset($_COOKIE['user']))
							{?>
							<li >
							<a href="hotel.php">
<img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>
</li>
							<?php } ?>
						
						</ul>
					</nav>
				<?php } ?>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	 <?php 
	 $user=$row['username'];
	 $from=$_POST['w1'];
	  $to=$_POST['w2'];
	   $date=$_POST['w3'];
	    $time=$_POST['w4'];
		 $cost=$_POST['w5'];
		 
		 $n=rand();
		 $sql3 = "INSERT INTO booked values ('$user','$from','$to','$date','$time','$cost','$n')";
		  mysqli_query($conn1, $sql3);
		 $sql4="select * from booked where ran='$n'";
		 $result=mysqli_query($conn1, $sql4);
		 if (mysqli_num_rows($result) ==1) {
     // output data of each row
     while($row1 = mysqli_fetch_assoc($result)) {
    


		 ?>
	  <div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell ">
					<div class="w3-card" style="margin-top:20px;margin-left:300px;width:500px;padding-top:30px;color:white;">
					   <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:400px;border-radius: 50%;">
		<h4 class="text-center" id="to"style="color:white;">name:-<?php echo "$row1[name]"?></h4>
						<h2 class="text-center" id="from" style="color:white;">from:-<?php echo "$row1[from1]"?></h2>
						<h2 class="text-center" id="to" style="color:white;">to:-<?php echo "$row1[to1]"?></h2>
						<h3 class="text-center" id="time" style="color:white;">date:-<?php echo "$row1[date]"?></h3>
					<h4 class="text-center" id="date" style="color:white;">time:-<?php echo "$row1[time]"?></h4>
					<h5 class="text-center" id="cost" style="color:white;">cost:-<?php echo "$row1[cost]"?></h5>
					<p style="color:white;"> thanks for booking</p>
					</div>
					
					</div>
				</div>
			</div>
		 <?php } }
		 else { echo "invaild";}?>
		</div>
	</div>


	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-location-pin"></i></span>
						<div class="desc">
							<h3>Accessible Location</h3>
							<p>In hyderabad champeptet </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-alarm-clock"></i></span>
						<div class="desc">
							<h3>Open 24/7</h3>
						<p>we provide services hole world in 24*7 </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-calendar"></i></span>
						<div class="desc">
							<h3>Reservation</h3>
						<p>ticket can be option through online we just we have reserved it</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-user"></i></span>
						<div class="desc">
							<h3>Friendly Staff</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-signal"></i></span>
						<div class="desc">
							<h3>Free Wifi</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; gangidi <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								

							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>