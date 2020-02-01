<?php include 'ctravels.php'?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GJR TRAVELS</title>
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
 <script>
 $(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',5);
    });
});
</script>
<style>

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
}
</style>
 
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
	

</head>
<body>
<div class="se-pre-con"></div>
<script>
 function f3()
 {if(!confirm('It To next step in the booking'))
 }
 </script>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="home.php">GJR TRAVELS</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home.php">Home</a></li>
							<?php if(isset($_COOKIE['user']))
							{?>
							<li><a href="bookforlater.php">book</a></li>
							<?php } ?>
							<li><a href="services.php">Services</a></li>
							<li><a href="contact.php">Contact</a></li>
							<?php if(isset($_COOKIE['user']))
							      { $value=$_COOKIE['user'];
								  $sql="select * from csignup where id='$value'";
								  $result=mysqli_query($conn1,$sql);
								  $row = mysqli_fetch_assoc($result);
								  if(mysqli_num_rows($result)==1)
								  { 
								  ?>
								  <li><a href="logout.php">logout</a></li>
								  
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
$sql6="select count(from1) as r from grand  where from1='$from1'and to1='$to1' and type='$t'";
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
							<a href="noti2.php">
<img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>
</li>
 <?php }else
 {	 ?>
					<li >
					<a href="noti2.php" class="notification">
  <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>

  <span class="badge" style="background-color:red;margin-top:-162px;margin-left:70px;"><?php echo "$count";?></span>
</a>
</li> 
 <?php }?>
							<?php } ?>

								  <?php }
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
								<?php  }
								   else{?>
							<li>
								<a  href="#" class="fh5co-sub-ddown">login</a>
								<ul class="fh5co-sub-ddown">
								 	
								 	<li><a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">company login</a></li>
									
									<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">customer login</a></li> 
								</ul>
							</li>
							<li><a href="signup.html">signup</a></li>
							<?php } ?>
							
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
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

	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
					<h1 class="rev-block hi text-center">
          <span>Choose Our travels</span>
     </h1>
     <p class="rev-block " id="onemore" style="margin-top:-40px;margin-left:-270px;">
          <span>make it simply to travel any where</span>
     </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="par" style="background-image:url(images/slider1.jpg); color:white;padding:20px;margin-top:20px;">
	<h1 id="h1" style="color:white;"> we  offer multi national travels</h1>
	<p id="h2" style="color:white;">this is the travels which show all the trending offer which make traveling so easy
	</p>
	</div>


	<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
			<marquee  onmouseover="this.stop();" onmouseout="this.start();">
			<?php if(isset($_COOKIE['user']))
							       $value=$_COOKIE['user'];
								  $sql19="select * from postbygjr";
								  $sql16="select * from postbycomp";
								  $result19=mysqli_query($conn1,$sql19);
								  $result16=mysqli_query($conn1,$sql16);
								  
								  while($row19 = mysqli_fetch_assoc($result19))
								  { 
								  ?>
								 
				<div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(images/image-1.jpg);">
							<div class="price"><small>For as low as</small><span>$<?php echo $row19['cost'] ?></span></div>
							<form action="predata.php" method="post">
 <INPUT TYPE="hidden" name="w1" id="w1" value=<?php echo $row19['from1'] ?>> 
 <INPUT TYPE="hidden" name="w2" id="w2" value=<?php echo $row19['to1'] ?>> 
 <INPUT TYPE="hidden" name="w3" id="w3" value=<?php echo $row19['date'] ?>> 
 <INPUT TYPE="hidden" name="w4" id="w4" value=<?php echo $row19['time'] ?>> 
 <INPUT TYPE="hidden" name="w5" id="w5" value=<?php echo $row19['cost'] ?>>

					</div>
					</div>
						<div class="desc">
							<h3><a href="#"></a></h3>
							<p>travel from <?php echo $row19['from1'];?> to <?php echo $row19['to1']?> <br>time is <?php echo $row19['time']?> <br> date:-<?php echo $row19['date']?><br>
							<?php if(isset($_COOKIE['user'])){?>
 
 <INPUT TYPE="submit" name="w6" id="w6" onClick=" return confirm('It To next step in the booking')" value="booknow">
<?php }else{?>
<INPUT TYPE="button" name="w00" id="w6"  onClick="alert('your should login for booking')" value="booknow">
<?php }?></p>
						</div>
					</div>
				</div>
								  <?php } ?>
								  <?php while($row16 = mysqli_fetch_assoc($result16))
								  { 
								  ?>
								  
				<div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(images/image-1.jpg);">
							<div class="price"><small>For as low as</small><span>$<?php echo $row16['cost'] ?></span></div>
							<form action="predata.php" method="post">
 <INPUT TYPE="hidden" name="w21" id="w21" value=<?php echo $row16['from1'] ?>> 
 <INPUT TYPE="hidden" name="w22" id="w22" value=<?php echo $row16['to1'] ?>> 
 <INPUT TYPE="hidden" name="w23" id="w23" value=<?php echo $row16['date'] ?>> 
 <INPUT TYPE="hidden" name="w24" id="w24" value=<?php echo $row16['time'] ?>> 
 <INPUT TYPE="hidden" name="w25" id="w25" value=<?php echo $row16['cost'] ?>>


								</div>
						<div class="desc">
							<h3><a href="#"></a></h3>
							<p>travel from <?php echo $row16['from1'];?> to <?php echo $row16['to1']?> <br>time is <?php echo $row16['time']?> <br> date:-<?php echo $row16['date']?><br><?php if(isset($_COOKIE['user'])){?>
 
 <INPUT TYPE="submit" name="w26" id="w26" onClick=" return confirm('It To is next step in the booking')" value="booknow">
<?php }else{?>
<INPUT TYPE="button" name="w00" id="w6"  onClick="alert('your should login for booking')" value="booknow">
<?php }?></p>

						</div>
					</div> 
				</div>
								  <?php } ?>
								 
				
				</marquee>

			</div>
		</div>
	</div>
	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; gjrtravels <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">saikiranreddy</a> <br></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="services.php">servies</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="airways.php">airways</a></li>
								<li><a href="#">railways</a></li>
								<li><a href="#">roadways</a></li>
								<li><a href="bookforlater.php">booking for later</a></li>

							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>our travels is famous through out the country  </p>
							<form action="subscribe" id="form-subscribe">
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script src="js/custom.js"></script>
	<script>

	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});
	</script>
<?php include 'viewers.php';?>
</body>
</html>