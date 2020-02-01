<?php include 'ctravels.php'; ?>
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
<style>
 .badge {
  position: absolute;
  top: 25px;
  right: 0px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
 <style>
 html, body {
     margin: 0;
     padding: 0;
}
 


.hi {
     font-family: Poppins;
     font-weight: bold;
     color: black;
     font-size: 42px;
     
     padding: 0.4em 1em;
     position: absolute;
     top: 40%;
     left: 46%;
     transform: translate(-50%, -50%);
}
 
.rev-block {
     position: absolute;
}
 
.rev-block span {
     opacity: 0;
     animation: appear-text 0.0001s linear forwards;
     animation-delay: 1.4s;
}
 
.rev-block:after {
     content: '';
     top: 0;
     left: 0;
     position: absolute;
     width: 0%;
     height: 100%;
     background: #00f0b5;
     animation: rev-block 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 1s;
}
 
@keyframes rev-block {
 
     0% {
          left: 0;
          width: 0%;
     }
     50% {
          left: 0;
          width: 100%;
     }
     100% {
          left: 100%;
          width: 0%;
     }
 
}
 
@keyframes appear-text {
 
     0% {
          opacity: 0;
     }
     100% {
          opacity: 1;
     }
 
}
 
#onemore {
     top: 51%;
     left: 58%;
}
 
#onemore span {
     animation-delay: 2s;
}
 
#onemore.rev-block:after {
     background: #5e239d;
     animation-delay: 1.4s;
}
 
@media only screen and (max-width: 900px) {
     .hi {
          font-size: 20px;
          padding: 0.4em;
     }
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 80%;
    padding: 12px 20px;
	padding-left:40px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
	
    padding: 1px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
 </style>
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">GJR TRAVELS <?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";} ?></a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="home.php">Home</a></li>
							<?php if(isset($_COOKIE['user']))
							{?>
							<li><a href="bookforlater.php">bookforlater</a></li>
							<?php } ?>
							<?php if(isset($_COOKIE['user']))
							{?>
							<li>
								<a  href="#" class="fh5co-sub-ddown">transporttype</a>
								<ul class="fh5co-sub-ddown">
								 	<li><a href="booknow.php">road way</a><ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">bus</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">lari</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">others</a></li>
			
										</ul>
									</li>
								 	<li><a href="booknow.php">rail way</a></li>
									<li>
										<a href="booknow.php" >air ways</a>
										
								   </li>
									<li><a href="booknow.php">water way</a></li> 
								</ul>
							</li>
							<?php }?>
							<li><a href="services.php">Services</a></li>
							
							<?php if(isset($_COOKIE['user']))
							      { $value=$_COOKIE['user'];
								  $sql="select * from csignup where id='$value'";
								  $result=mysqli_query($conn1,$sql);
								  if(mysqli_num_rows($result)==1)
								  { 
								  ?>
								  <li><a href="bookforlater.php">BOOKFORLATER</a></li>
								  <li><a href="logout.php">logout</a></li>
								  
								  <?php }
								  else{?>
								  <li><a href="ww.html">login</a></li>
							<li><a href="signup.html">signup</a></li>
							<?php } ?>
								<?php  }
								   else{?>
							<li>
								<a  href="#" class="fh5co-sub-ddown">login</a>
								<ul class="fh5co-sub-ddown">
								 	
								 	<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">company login</a></li>
									
									<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">customer login</a></li> 
								</ul>
							</li>
							<li><a href="signup.html">signup</a></li>
							<?php } ?>
							
							<li><a class="active" href="contact.php">Contact</a></li>
													<?php if(isset($_COOKIE['user']))
							{?>
						<?php 
$count=0;
$id=$row['id'];
$sql5="select * from rtf where id='$id'";
$result5=mysqli_query($conn1, $sql5);
while($row5 = mysqli_fetch_assoc($result5))
{$from1=$row5['from1'];
 $to1=$row5['to1'];
 $t=0;
 $sql6="select count(from1) as r from grand where from1='$from1'and to1='$to1' and type='$t'";
$result6=mysqli_query($conn1, $sql6);
if($row6 = mysqli_fetch_assoc($result6))
 $count=$count+$row6['r'];
}
?>
<?php
$id=$row['id'];
$sql5="select * from rtf where id='$id'";
$result5=mysqli_query($conn1, $sql5);
while($row5 = mysqli_fetch_assoc($result5))
{$from1=$row5['from1'];
 $to1=$row5['to1'];
 $t=0;
 $sql6="select count(from1) as r from notgrand where from1='$from1'and to1='$to1' and type='$t'";
$result6=mysqli_query($conn1, $sql6);
if(mysqli_num_rows($result6) > 0)
if($row6 = mysqli_fetch_assoc($result6))
 $count=$count+$row6['r'];
}
?>
<?php 
 if($count==0)
 {?>
							<li >
							<a href="hotel.php">
<img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>
</li>
 <?php }else
 {	 ?>
					<li >
					<a href="noti2.php" class="notification">
  <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>

  <span class="badge"><?php echo "$count";?></span>
</a>
</li> 
 <?php }?>
							<?php } ?>
 
						</ul>
					</nav>
				</div>
			</div>
		</header>

		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/slide.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>
						<p> information about us <a href="http://freehtml5.co">click here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="h11" required>
<br>
      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="h12" required>
        <br>
      <button type="submit" name="s1">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1;width:98%">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="h21" required>
<br>
      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="h22" required>
        <br>
      <button type="submit" name="s2">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1;width:98%">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
	<div id="fh5co-contact-section">
		<div class="row">
			<div class="col-md-6">
				<div id="map" class="fh5co-map"></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<h3>Our Address</h3>
					<p>hyderbad</p>
					<ul class="contact-info">
						<li><i class="ti-map"></i>vijay nagar colony</li>
						<li><i class="ti-mobile"></i>9835688464</li>
						<li><i class="ti-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="ti-home"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
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
						<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
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
								<li><a href="#">Contact Us</a></li>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>