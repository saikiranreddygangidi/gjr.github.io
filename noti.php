<?php include 'ctravels.php';?>
<script>

 if(!confirm("u want change your thing"))
 {alert("u r not granded");
 window.open("admin.php","_self");}
 else
 {
  alert("u granded the travel");}
</script>
<?php
if(isset($_POST['w6']))
{$a=$_POST['w1'];
$b=$_POST['w2'];
$c=$_POST['w3'];
$d=$_POST['w4'];
$sql5="insert into grand values ('$a','$b','$c','$d')";
$result=mysqli_query($conn1, $sql5);
 echo "<div class=j>
         <h1 style=color:black;>granded the  request  by $d</h1>";
  echo "<h2 style=color:black> this start from </h2>";
echo "</div>";
}
if(isset($_POST['rr1']))
{
 echo "<div class=j>
         <h1 style=color:black;>sorry we dont have this route selection</h1>";
  echo "<h2 style=color:black>we will try it again within today we will give u update</h2>";
echo "</div>";}
?>
