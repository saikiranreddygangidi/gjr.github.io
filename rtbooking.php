<?php include 'ctravels.php';?>
<html>
<head>
</head>
<body>


<form action="rtbooking.php" method="post">
<select name="ttt">
<option value="auto">auto</option>
<option value="auto">car</option>
<option value="auto">bus</option>
<option value="auto">jcb</option>
<option value="auto">bike</option>
  </select>
<input type="text" name="tfrom" placeholder="from">
<input type="text" name="tto" placeholder="to">
<input type="text" name="tdate" placeholder="date">
<input type="text" name="ttime" placeholder="time">
<input type="text" name="taddr" placeholder="your address">
<input type="submit" name="tsubmit" value="request">

</form>
<?php
if(isset($_POST['tsubmit']))
{
$type=$_POST['ttt'];
$from=$_POST['tfrom'];
$to=$_POST['tto'];
$date=$_POST['tdate'];
$time=$_POST['ttime'];
$addr=$_POST['taddr'];
$sql = "INSERT INTO rtbooking (type,from1,to1,date,time,add)
VALUES ('$type','$from','$to','$date','$time','$addr')";

 (mysqli_query($conn, $sql);
}?>
</body>
</html>

