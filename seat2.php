<?php include 'ctravels.php';?>
<?php if(isset($_COOKIE['user'])){echo "hi";  $sql="select * from csignup where id='$_COOKIE[user]'";  $result=mysqli_query($conn1, $sql);
					$row = mysqli_fetch_assoc($result);
					echo "$row[username]";}?> 
<html>
<head>
<style>
label{display: block;}
.cust-checkbox {
display: none;
}
.cust-checkbox + span{
background-image:url(https://demo.techbrij.com/780/images/available_seat_img.gif);
/*background: #999;*/
height: 30px;
width: 30px;
display:block;
padding: 0 0 0 0px;
}
.reserved .cust-checkbox + span{
background-image:url(https://demo.techbrij.com/780/images/booked_seat_img.gif);
}
.selected .cust-checkbox + span{
background-image:url(https://demo.techbrij.com/780/images/selected_seat_img.gif);
}
.cust-checkbox:checked + span{
height: 30px;
width: 30px;
display:block;
padding: 0 0 0 0px;
}
.cust-checkbox:disabled + span{
/*background: red;*/
height: 30px;
width: 30px;
display:block;

}
.seats{
border: 1px solid #ccc;
padding: 0 15px;
width: 550px;
margin:250px;
display:inline;
float:left; }
.info{     padding: 0 15px;
max-width: 530px;
margin: 50px auto 0
}
#first{display:inline;float:left;margin:10px;}
</style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".reserved input").prop('checked', true);
            $(".reserved input").prop('disabled', true);
            $("label").click(function(){
                if(!$(this).hasClass("reserved")){
                    if($(this).find("input").is(":checked")){
                    $(this).addClass("selected");
                    }else{
                        console.log("selected");
                        $(this).removeClass("selected");
                    }
                }
                else{
                    alert("Already booked");
                }
            });
        });
    </script>
<?php
if(isset($_POST['hh']))
	 {
		 $checkbox1=$_POST['temp'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
$user=$row['username'];
	 $from=$_POST['w1'];
	  $to=$_POST['w2'];
	   $date=$_POST['w3'];
	    $time=$_POST['w4'];
		 $cost=$_POST['w5'];
		 $rr=$row['email'];
		 $n=rand();
		 $sql3 = "INSERT INTO booked(username,from1,to1,date,time,ran,email) values('$user','$from','$to','$date','$time','$n','$rr')";
mysqli_query($conn1, $sql3);
$focus2=array();
			$sql9 = "SELECT * FROM booked from1='$from' and to1='$to1'and date='$date' and time='$time' ";
$result9 = mysqli_query($conn1, $sql9);
if (mysqli_num_rows($result9) > 0) {
while($row9 = mysqli_fetch_assoc($result9))
{ $focus9 = explode(",", $row9['seat']);
$focus2=array_merge($focus2,$focus9);}}
$len=count($focus2);?>
<div class="seats" >
        <div class="row">
           <form action="" method="post">
			<?php 
			$k=1;
			 for($i=1;$i<=10;$i++){ ?>
			  <div class="col-sm-4" id="first">
			<?php  for($j=1;$j<=5;$j++){ ?>
	<label <?php if(in_array($k,$focus2)) { echo "class=reserved >";}else {echo ">";}?> 
	 
<input type="checkbox" name="temp[]" class="cust-checkbox" value=<?php echo $k;?> > <span><?php echo $k;$k=$k+1; ?></span>
				</label>
            <?php }?></div><?php }?>
		  <input type="submit" name="hh1">
	      </form>
        
        </div>
    </div>
	

   
  <div class="hh" style="display:inline;float:left;">
        <div class="col-sm-4" ><label class="reserved"><input type="checkbox" class="cust-checkbox" disabled><span></span>Reserve Seat </label></div>
        <div class="col-sm-4"><label class="selected"><input type="checkbox" class="cust-checkbox" disabled><span></span>Selected Seat </label></div>
        <div class="col-sm-4"><label ><input type="checkbox" class="cust-checkbox" disabled><span></span>Empty Seat </label></div>
 </div>
<?php
if(isset($_POST['hh1']))
{
$sql4="select * from booked where ran='$n'";
		 $result=mysqli_query($conn1, $sql4);
		 if (mysqli_num_rows($result) ==1) {
     // output data of each row
     while($row1 = mysqli_fetch_assoc($result)) {
    


		 ?>
	  <div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell ">
					<div class="w3-card" style="margin-top:20px;margin-left:300px;width:500px;padding-top:30px;color:white;" >
					   <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:400px;border-radius: 50%;">
		<h4 class="text-center" id="to"style="color:white;">name:-<?php echo "$row1[name]"?></h4>
						<h2 class="text-center" id="from" style="color:white;">from:-<?php echo "$row1[from1]"?></h2>
						<h2 class="text-center" id="to" style="color:white;">to:-<?php echo "$row1[to1]"?></h2>
						<h3 class="text-center" id="time" style="color:white;">date:-<?php echo "$row1[date]"?></h3>
					<h4 class="text-center" id="date" style="color:white;">time:-<?php echo "$row1[time]"?></h4>
					<h5 class="text-center" id="cost" style="color:white;">cost:-<?php $w=(int)$cost; $w1=$w*$len; echo "$w1";?></h5>
					<p style="color:white;"> thanks for booking</p>
					</div>
					
					</div>
				</div>
			</div>
		 <?php } }
	 else { echo "invaild";}
 ?>
		</div>
	</div>
<?php
$sql11="update booked set cost='$w' seat='$chk' where ran=$n";
	
if (mysqli_query($conn1, $sql11)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn1); }?>
</body>
</html>













