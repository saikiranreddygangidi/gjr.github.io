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

th, td {color:black;
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
					<h1 id="fh5co-logo"><a href="hotel.php">GJR TRAVELS<?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";}?> </a></h1>
				<?php	if(!isset($_COOKIE['user'])){?>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="hotel.php">Home</a></li>
							<li>
								<a  href="#" class="fh5co-sub-ddown">transporttype</a>
								<ul class="fh5co-sub-ddown" style="background-color:rgb(255, 143, 30);">
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
				<?php } ?>
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
<table class="table1" style="margin-left:200px;background-color:rgb(207, 212, 246);width:400px;">
<tr>
<td>
TYPE</td>
<td>
<select name="type">
<option value="auto">auto</option>
<option value="lore">lore</option>
<option value="jcb">jcb</option>
<option value="car">car</option>
<option value="bike">bike</option>
</select>
</td>
</tr>
<tr>
<td>
FROM</td>
<td>
<INPUT TYPE="TEXT" NAME="f1"PLACEHOLDER="" style="color:black;font-size:20px;height:30px;">
</td>
</tr>
<tr>
<td>
TO</td>
<td>
<INPUT TYPE="TEXT" NAME="t1"PLACEHOLDER="" style="color:black;font-size:20px;height:30px;">
</TD>
</TR>
<tr>
<td>
 BOOKING DATE</td>
<td>
<INPUT TYPE="DATE" NAME="d1" style="color:black;font-size:20px;height:30px;">
</TD>
</TR>
<tr>
<td>
PHONE NUMBER</td>
<td>
<INPUT TYPE="text" NAME="p1"  placeholder="" style="color:black;font-size:20px;height:30px;">
</TD>
</TR>
<tr>
<td>
TIME</td>
<td>
<INPUT TYPE="text" NAME="p2" placeholder="" style="color:black;font-size:20px;height:30px;">
</TD>
</TR>
<tr>
<td>

<INPUT TYPE="SUBMIT"NAME="s1" VALUE="register" style="padding:0px;width:100px;background-color:green;font-size:20px;height:30px;COLOR:white;border-radius:50px;margin-left:170px;;"> 
</TD>
</TR>
</TABLE >
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
 {$email=$row['email'];
$type=$_POST['type'];
$from=$_POST['f1'];
$to=$_POST['t1'];
$date=$_POST['d1'];
$phone=$_POST['p1'];	 
$time=$_POST['p2'];	
$n=rand();
 }
  ?>
<?php if(isset($_POST['s1']))
        {
    if($from==""||$to=="")
     echo "<script>alert('invaild')</script>";
else
{
  
		   $sql="insert into bookforlater values('$email','$type','$from','$to','$date','$time','$phone','$n')";							
  $result2=mysqli_query($conn1, $sql);
echo	 "<script> alert('your are successfully booked');</script>";
  
$sql="select * from bookforlater	where ran='$n'   ";
$result3=mysqli_query($conn1, $sql);
$row2 = mysqli_fetch_assoc($result3 );  } }?>
<div class="w3-card" style="margin-left:250px;padding-left:80px;display:none;background-image:url(images/slider1.jpg);width:500px;padding-top:30px;">
					   <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:400px;border-radius: 50%;">
						<h2 class="text-center" id="from"><?php echo "row2[from]"; ?><</h2>
						<h2 class="text-center" id="to"><?php echo "row2[to]"; ?></h2>
						<h3 class="text-center" id="time"><?php echo "row2[time]"; ?></h3>
						<h3 class="text-center" id="date"><?php echo "row2[date]"; ?></h3>
						<h3 class="text-center" id="type"><?php echo "row2[type]"; ?></h3>
                                           <p style="color:white;padding-left:80px;"> thanks for booking</p>
					</div>
 
</form>
</body>
</html>

