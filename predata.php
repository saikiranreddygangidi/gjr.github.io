<?php include 'ctravels.php';?>
<script>
 alert("hi");
 </script>
<?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";}?> 
					<?php 
	 $n=0;
	 $cost=0;
	 $len=0;
	 if(isset($_POST['w6']))
	 {
		 
	 $user=$row['username'];
	 $from=$_POST['w1'];
	  $to=$_POST['w2'];
	   $date=$_POST['w3'];
	    $time=$_POST['w4'];
	$cost=$_POST['w5'];
		 $rr=$row['email'];
		 $n=rand();
		 $h=0;
		 $h1=NULL;
		 $sql3 = "insert into booked values('$user','$from','$to','$date','$time','$h','$n','$h1','$rr')";
		 if(mysqli_query($conn1, $sql3))
		 {echo "done";}
	 else
	 {echo "notdone";}
$cookie_name = "user1";
$cookie_value = $n;
setcookie($cookie_name, $cookie_value); 
$cookie_name = "user2";
$cookie_value = $cost;
setcookie($cookie_name, $cookie_value); 
}
if(isset($_POST['w26']))
	 {
		 
	 $user=$row['username'];
	 $from=$_POST['w21'];
	  $to=$_POST['w22'];
	   $date=$_POST['w23'];
	    $time=$_POST['w24'];
	$cost=$_POST['w25'];
		 $rr=$row['email'];
		 $n=rand();
		 $h=0;
		 $h1=NULL;
		 $sql3 = "insert into booked values('$user','$from','$to','$date','$time','$h','$n','$h1','$rr')";
		 if(mysqli_query($conn1, $sql3))
		 {echo "done";}
	 else
	 {echo "notdone";}
$cookie_name = "user1";
$cookie_value = $n;
setcookie($cookie_name, $cookie_value); 
$cookie_name = "user2";
$cookie_value = $cost;
setcookie($cookie_name, $cookie_value); 
}
header('Location:seat1.php');
?>