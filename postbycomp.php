<?php include 'ctravels.php'; ?>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
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

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="home.php">GJR TRAVELS <?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from comsignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";}
							      
							   ?></a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="hotel.php">Home</a></li>
							<li>
								<a class="active" href="#" class="fh5co-sub-ddown">transporttype</a>
								<ul class="fh5co-sub-ddown">
								 	<li><a href="#">road way</a><ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">bus</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">lari</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">others</a></li>
			
										</ul>
									</li>
								 	<li><a href="#">rail way</a></li>
									<li>
										<a href="airways.php" >air ways</a>
										
								   </li>
									<li><a href="#">water way</a></li> 
								</ul>
							</li>
							<li>
							<a href="https://form.jotform.me/81932611351451">book</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a class="active" href="rtf.php">RFT</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="logout.php">logout</a></li>
							<?php if(isset($_COOKIE['user']))
							{?>
							<li >
							<a href="hotel.php">
<img src=<?php echo "$row[image]";?> alt="Avatar" style="width:60px;border-radius: 50%;"></a>
</li>
							<?php } ?>
						</ul>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);height:700px<input type="file"  style="margin-left:450px;background-color:green;color:white;"name="f1"><br><br>;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
                      <div class="h1" style="margin-top:85px;">
					  <b style="color:white;">post the bus travels detail</b><br>
               <FORM ACTION="image1.php" method="post">
                <INPUT TYPE="TEXT" NAME="f12"PLACEHOLDER="FROM" style="color:black;font-size:20px;height:25px;"><br><br>
<INPUT TYPE="TEXT" NAME="t1"PLACEHOLDER="TO" style="color:black;font-size:20px;height:25px;"><br><br>
<INPUT TYPE="TEXT" NAME="c2"PLACEHOLDER="cost" style="color:black;font-size:20px;height:25px;"><br><br>
<INPUT TYPE="TEXT" NAME="tr1"PLACEHOLDER="travels" style="color:black;font-size:20px;height:25px;" ><br><br>


<INPUT TYPE="date" NAME="dt1" style="color:black;font-size:20px;height:25px;"><br><br>
<INPUT TYPE="TEXT" NAME="ti1"PLACEHOLDER="time" style="color:black;font-size:20px;height:25px;"><br>
<INPUT TYPE="SUBMIT"NAME="s1" VALUE="post" style="color:black;font-size:20px;height:25px;"> <br><br>
</form>
</div>
			</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>

