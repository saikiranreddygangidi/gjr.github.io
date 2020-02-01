<?php
if(isset($_POST['go']))
{$result=$_POST['mail'];
 $output=shell_exec("python confmail.py $result");
echo "$output";
echo "<script> alert('confirmation mail as been send to u mail')</script>";
header('Location:hotel.php');
}
?>