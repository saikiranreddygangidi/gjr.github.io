 <?php
$conn=mysqli_connect('localhost','root','','bus travelers');
$from=$_POST["f12"];
 $to=$_POST["t1"];
 $cost=$_POST["c2"];
 $travels=$_POST["tr1"];
$date=$_POST["dt1"];
$time=$_POST["ti1"]; 

$sql="insert into postbycomp values('$from','$to','$cost','$travels','$time','$date')";


$rec=mysqli_query($conn,$sql);
header('Location:index1.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  
  </body>
  </html>