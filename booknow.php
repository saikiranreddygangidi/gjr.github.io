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
<Style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even) {background-color: #f2f2f2;}
.p{width:800px;
margin-top:40px;
margin-left:250px;
margin-right:60px;}
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="jquery.js"></script>
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="hotel.html">GJR TRAVELS<?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";
					$fff=$row["image"];} ?></a></h1>
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
										<a class="active" href="airways.php" >air ways</a>
										
								   </li>
									<li><a href="#">water way</a></li> 
								</ul>
							</li>
							<li><a  href="services.php">Services</a></li>
							<?php if(isset($_COOKIE['user']))
							   { ?>
							<li><a href="rtf.php">RFT</a></li>
							<li><a href="bookforlater.php">BOOKFORLATER</a></li>
							<?php } ?>
							<?php if(isset($_COOKIE['user']))
							      { $value=$_COOKIE['user'];
								  $sql="select * from csignup where id='$value'";
								  
								  $result=mysqli_query($conn1,$sql);
								  if(mysqli_num_rows($result)==1)
								  { 
								  ?>
								  <li>
							<a href="bookforlater.php">book</a></li>
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
						<?php 
$count=0;
$id=$row['id'];
$sql5="select * from rtf where id='$id'";
$result5=mysqli_query($conn1, $sql5);
while($row5 = mysqli_fetch_assoc($result5))
{$from1=$row5['from1'];
 $to1=$row5['to1'];
 $sql6="select count(from1) as r from grand group by from1,to1 having from1='$from1'and to1='$to1'";
$result6=mysqli_query($conn1, $sql6);
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
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
                      <div class="h1" style="margin-top:85px;">
					  
<FORM ACTION="" method="post">
<INPUT TYPE="TEXT" NAME="f1"PLACEHOLDER="FROM" style="color:black;font-size:20px;height:30px;">
<INPUT TYPE="TEXT" NAME="t1"PLACEHOLDER="TO" style="color:black;font-size:20px;height:30px;">
<INPUT TYPE="DATE" NAME="d1" style="color:black;font-size:20px;height:30px;">

<INPUT TYPE="SUBMIT"NAME="s1" VALUE="CHECK" style="color:black;font-size:20px;height:30px;COLOR:GREEN;"> 
</form>


</div>
			</div>
				</div>
			</div>
		</div>
	</div>
<div>

<?php 
 


 if(isset($_POST['s1']))
 {
$from=$_POST['f1'];
$to=$_POST['t1'];
$date=$_POST['d1'];
	 
 }
  ?>
<?php if(isset($_POST['s1']))
        {
    if($from==""||$to=="")
     echo "invalid";
else
{
$sql="select * from postbygjr where from1='$from' and to1='$to'and date='$date'";
$sql1="select * from cbuilding where from1='$from' and to1='$to'and date='$date'";
        $result=mysqli_query($conn1, $sql);
		$result1=mysqli_query($conn1, $sql1);
		if (mysqli_num_rows($result) > 0 or mysqli_num_rows($result1) > 0)
		{echo "<div class=p>";
        echo "<table id=myTable>";
        echo  "<tr>";
		echo  "<th> NO</th>";
        echo   "<th>";
        echo    "FROM  </th>";
        echo   "<th>";
        echo    "TO   </th>";
		echo   "<th>";
        echo    " TIME </th>";
		echo   "<th>";
        echo    "DATE  </th>";
		echo   "<th>";
        echo    "COST   </th>";
		
		echo   "<th>";
        echo    " BOOK </th></tr>";
      $i=0;
      while($row = mysqli_fetch_assoc($result))
       {$i=$i+1;
   echo "
      <tr>
      <td>$i</td>
       <td>$row[from1]   </td>
        <td>$row[to1]   </td>
		<td>$row[time]   </td>
		<td>$row[date]   </td>
		<td>$row[cost]   </td>
		<td><button id=btnSelect> book now </button>   </td>";?>
		<?php
   echo    "</tr>";
}
 while($row1 = mysqli_fetch_assoc($result1))
       {$i=$i+1;
   echo "
      <tr>
      <td>$i</td>
       <td>$row1[from1]   </td>
        <td>$row1[to1]   </td>
		<td>$row1[time]   </td>
		<td>$row1[date]   </td>
		<td>$row1[cost]   </td>
		<td><button id=btnSelect> book now </button>   </td>
       
       </tr>";
}
		echo "</table>";
		echo "</div>";}
else{echo "<script>alert('there is no services that day')</script>";}		}}
?>

<div class="w3-card" style="margin-left:250px;padding-left:80px;display:none;background-image:url(images/slider1.jpg);width:500px;padding-top:30px;">
					   <img src=<?php echo "$fff";?> alt="Avatar" style="width:400px;border-radius: 50%;">
						<h1 class="text-center" id="from"></h1>
						<h2 class="text-center" id="to"></h2>
						<h3 class="text-center" id="time"></h3>
						<h4 class="text-center" id="date"></h4>
						<h5 class="text-center" id="cost"></h5>
						<form action="predata.php" method="post">
 <INPUT TYPE="hidden" name="w1" id="w1"> 
 <INPUT TYPE="hidden" name="w2" id="w2"> 
 <INPUT TYPE="hidden" name="w3" id="w3"> 
 <INPUT TYPE="hidden" name="w4" id="w4"> 
 <INPUT TYPE="hidden" name="w5" id="w5">


 
 <INPUT TYPE="submit" name="w6" id="w6" value="accept">
 
</form>
					<p style="color:white;padding-left:80px;"> thanks for booking</p>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					
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

	<script src="js/custom.js"></script>
<?php include 'viewers.php';?>
</body>
</html>

