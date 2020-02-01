
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
	<title>GJR TRAVELS</title>
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
#w61{display:none;}
#w6{display:none;}
</style>
<script src="jquery2.js"></script>
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
							<li>
							<a href="bookforlater.php">book</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="rtf.php">RFT</a></li>
							<li><a href="contact.html">Contact</a></li>
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
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);height:800px;; data-stellar-background-ratio=0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
                      <div class="h1" style="margin-top:185px;">
					  <b style="color:white;">ADMIN PAGE</b><br>
               <FORM ACTION="postbygjr.php" method="post">
			   <table class="table1" style="margin-left:400px;background-color:rgb(207, 212, 246);width:400px;">

			   <tr>
<td>
FROM</td>
<td>
                <INPUT TYPE="TEXT" NAME="f1"PLACEHOLDER="" style="color:black;font-size:20px;height:25px;"><br><br>
</TD>
</TR>
<tr>
<td>
TO</td>
<td>
				<INPUT TYPE="TEXT" NAME="t1"PLACEHOLDER="" style="color:black;font-size:20px;height:25px;"><br><br>
</TD>
</TR>
<tr>
<td>
COST</td>
<td>
				<INPUT TYPE="TEXT" NAME="c2"PLACEHOLDER="" style="color:black;font-size:20px;height:25px;"><br><br>
</TD>
</TR>
<tr>
<td>
DATE</td>
<td>

<INPUT TYPE="date" NAME="dt1" style="color:black;font-size:20px;height:25px;"><br><br>
</TD>
</TR>
<tr>
<td>
TIME</td>
<td>
<INPUT TYPE="TEXT" NAME="ti1"PLACEHOLDER="" style="color:black;font-size:20px;height:25px;"><br>
</TD>
</TR>
<tr>

<td colspan="2">
<INPUT TYPE="SUBMIT"NAME="s1" VALUE="post" style="color:black;font-size:20px;height:25px;margin-left:125px;"> <br><br>
</TD>
</TR>
</TABLE>
</form>
<?php $sql2="select * from viewers ";
 $result2=mysqli_query($conn1, $sql2);
$s=mysqli_num_rows($result2);
echo "<div style=margin-left:460px;><P style='color:white;width:200px;padding:10px;border:1px solid white';>TOTAL NO OF VIEWER <br/>$s</p></div>";?>
</div>

			</div>
				</div>
			</div>
		</div>
	</div>

<?php
$sql2="select count(from1) as r,from1,to1 from rtf group by from1,to1 order by count(from1) desc";
        $result2=mysqli_query($conn1, $sql2);
		
		echo "<div class=p>";
        echo "<table id=myTable>";
        echo  "<tr>";
		echo  "<th> NO</th>";
        echo   "<th>";
        echo    "total register no  </th>";
		echo   "<th>";
        echo    "FROM  </th>";
        echo   "<th>";
        echo    "TO   </th>";
		 echo   "<th>";
        echo    "GRAND   </th>";
		 echo   "<th>";
        echo    "NOT GRAND   </th>";
      $i=0;
	  
      while($row2 = mysqli_fetch_assoc($result2))
       {$i=$i+1;
   echo "
      <tr>
      <td>$i</td>
	  <td>$row2[r]   </td>
       <td>$row2[from1]   </td>
        <td>$row2[to1]   </td>
		
		<td><input type=submit name=rr id=btnSelect value=grand >  </td>
		<td><input type=submit name=rr1 id=btnSelect1 value=notgrand >  </button>   </td>
		
		";?>
		
		<?php
   echo    "</tr>";
}
 
		echo "</table>";
		echo "</div>";
?>

<form action="noti1.php" method="post">
 <INPUT TYPE="hidden" name="w1" id="w1"> 
 <INPUT TYPE="hidden" name="w2" id="w2"> 
 <INPUT TYPE="hidden" name="w3" id="w3"> 
 <INPUT TYPE="hidden" name="w4" id="w4" value="gjr travels"> 
 <INPUT TYPE="submit" name="w6" id="w6" value="accept">
 
</form>
<form action="noti1.php" method="post">
 <INPUT TYPE="hidden" name="w11" id="w1"> 
 <INPUT TYPE="hidden" name="w21" id="w2"> 
 <INPUT TYPE="hidden" name="w31" id="w3"> 
 <INPUT TYPE="hidden" name="w41" id="w4" value="gjr travels"> 
 <INPUT TYPE="submit" name="w61" id="w61" value="accept">
 
</form>
<hr>
<P style="text-align:center;"> BOOK FOR LATER LIST</P>
<hr style="color:black;">
<?php
$sql2="select *  from bookforlater ";
        $result2=mysqli_query($conn1, $sql2);
		
		echo "<div class=p>";
        echo "<table id=myTable>";
        echo  "<tr>";
		echo  "<th> NO</th>";
        
		echo   "<th>";
        echo    "FROM  </th>";
        echo   "<th>";
        echo    "TO   </th>";
		 echo   "<th>";
        echo    "TYPE  </th>";
 echo   "<th>";
        echo    "DATE  </th>";
		 echo   "<th>";
        echo    " TIME  </th>";
		 echo   "<th>";
        echo    " PHONE NUMBER </th>";
     		 echo   "<th>";
        echo    " EMAIL </th>";
 echo   "<th>";
        echo    "GRAND   </th>";

      $i=0;
	  
      while($row2 = mysqli_fetch_assoc($result2))
       {$i=$i+1;
   echo "
      <tr>
      <td>$i</td>
	 
       <td>$row2[from1]   </td>
        <td>$row2[to1]   </td>
<td>$row2[type]   </td>
  <td>$row2[date]   </td>
	<td>$row2[time]   </td>	
<td>$row2[phonenumber]   </td>
<td>$row2[email]   </td>
		
		";?>
		
		<?php
   echo    "</tr>";
}
 
		echo "</table>";
		echo "</div>";
?>
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
							<p>our travels is famous through out  the country  </p>
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
	</footer

	</div>
</body>
</html>
