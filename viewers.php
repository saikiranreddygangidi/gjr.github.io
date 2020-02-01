<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus travelers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ip=$_SERVER['REMOTE_ADDR'];
$sql = "SELECT ip from viewers where ip='$ip'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
	$e=NULL;
$sql1="insert into viewers values('$e','$ip')";
mysqli_query($conn, $sql1);}
 $sql2="select * from viewers ";
 $result2=mysqli_query($conn, $sql2);
$s=mysqli_num_rows($result2);
echo "$s";


mysqli_close($conn);
?>