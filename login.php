<?php
session_start();
echo "hi";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus travelers";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
echo "hi";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['s1']))
{ echo "ji";
	$user1=$_POST['h11'];
$pass1=$_POST['h12'];
echo "".$user1;
 /*encryption*/
 function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'Saikiran0074$';
    $secret_iv = 'gjrtravels';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;

 }
/*encryption*/
$pass1 = encrypt_decrypt('encrypt', $pass1);
echo "hi";

$sql = "select * from  csignup where email='$user1' and password='$pass1'";
$rec=mysqli_query($conn,$sql);
echo "hi";
if (mysqli_num_rows($rec) > 0 && mysqli_num_rows($rec)<2)
{while($row = mysqli_fetch_assoc($rec))
	{
		 
 $cookie_name = "user";
$cookie_value = $row['id'];
setcookie($cookie_name, $cookie_value);
if(isset($_COOKIE['USER']))
	 echo "<script> $cookie_value</script>";
header('Location:index.php');}}
else
{echo "u enter detail is incorretd";}}
if(isset($_POST['s2']))
{
	$user2=$_POST['h21'];
$pass2=$_POST['h22'];
 /*encryption*/
 function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'Saikiran0074$';
    $secret_iv = 'gjrtravels';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;

 }
/*encryption*/
$pass2= encrypt_decrypt('encrypt', $pass2);
echo ' '.$pass2;
$sql1= "select * from  comsignup where email='$user2' and pass='$pass2'";
echo "hid";
$rec=mysqli_query($conn,$sql1);
if (mysqli_num_rows($rec) > 0 && mysqli_num_rows($rec)<2)
{if($row = mysqli_fetch_assoc($rec))
	{$cookie_name = "user";
$cookie_value = $row['id'];
setcookie($cookie_name, $cookie_value);
 echo "<script> $cookie_value</script>";
 if($row['id']==2020772726){header('Location:admin.php');}else{
 header('Location:index1.php');} }}
else
{echo "u enter detail is incorretss";} }


mysqli_close($conn);
?>