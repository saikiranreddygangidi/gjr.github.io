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
	 
	 $from=0;
	 $to=0;$time=0;$date=0;
if(isset($_POST['hh'])){ if( isset($_POST['temp']))
{
	
$checkbox1=$_POST['temp'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }	
   $focus3=array();
   $focus4=array();
   $focus3 = explode(",", $chk);
$focus4=array_merge($focus4,$focus3);
$len1 =count($focus4);
 $d=$_COOKIE['user2']; 
$w=(int)$d; $w1=$w*($len1-1);
$n1=$_COOKIE['user1'];
echo "$n1";
	$sql11="update booked set cost='$w1',seat='$chk' where ran=$n1";
	
if (mysqli_query($conn1, $sql11)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " ;
}
		 $sql4="select * from booked where ran='$n1'";
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
					<div class="w3-card" style="margin-top:20px;margin-left:300px;width:500px;padding-top:30px;color:white;">
					   <img src=<?php echo "$row[image]";?> alt="Avatar" style="width:400px;border-radius: 50%;">
		<h4 class="text-center" id="to"style="color:white;">name:-<?php echo "$row1[name]"?></h4>
						<h2 class="text-center" id="from" style="color:white;">from:-<?php echo "$row1[from1]"?></h2>
						<h2 class="text-center" id="to" style="color:white;">to:-<?php echo "$row1[to1]"?></h2>
						<h3 class="text-center" id="time" style="color:white;">date:-<?php echo "$row1[date]"?></h3>
					<h4 class="text-center" id="date" style="color:white;">time:-<?php echo "$row1[time]"?></h4>
					<h5 class="text-center" id="cost" style="color:white;">cost:-<?php  echo "$w1";?></h5>
					<h5 class="text-center" id="seat" style="color:white;">seat:-<?php  echo "$row1[seat]";?></h5>
					
					<p style="color:white;"> thanks for booking</p>
					</div>
					
					</div>
				</div>
			</div>
		 <?php } }
else { echo "invaild";} } else{ echo "<script type='text/javascript'>alert('u should select seats');</script>";
 } }?>
		</div>
	</div>
	

<?php
$n1=$_COOKIE['user1'];
$sql5="select * from booked where ran='$n1'";
		 $result=mysqli_query($conn1, $sql5);
		 if (mysqli_num_rows($result) ==1) {
     // output data of each row
     while($row1 = mysqli_fetch_assoc($result)) {
    echo $row1['from1']."".$row1['to1']."".$row1['date']."".$row1['time'];
$GLOBALS['from']=$row1['from1'];
$GLOBALS['to']=$row1['to1'];
$GLOBALS['time']=$row1['time'];
		 $GLOBALS['date']=$row1['date'];}}
		 echo $from."".$to."".$date."".$time;
if(!isset($_POST['hh']))
{
				$focus=array();
			$sql = "SELECT * FROM `booked` where from1='$from' and to1='$to' and time='$time' and date='$date'";
$result = mysqli_query($conn1, $sql);
if (mysqli_num_rows($result) > 0 ){
while($row = mysqli_fetch_assoc($result))
{ $focus1 = explode(",", $row['seat']);
$focus=array_merge($focus,$focus1);}}
else{}

  ?>
 
    <div class="seats" >
        <div class="row">
           <form action="" method="post">
			<?php 
			$k=1;
			 for($i=1;$i<=10;$i++){?>
			  <div class="col-sm-4" id="first">
			<?php  for($j=1;$j<=5;$j++){ ?>
	<label <?php if(in_array($k,$focus)) {?> class="reserved"<?php } ?> > <input type="checkbox" name="temp[]" class="cust-checkbox" value=<?php echo $k;?> > <span><?php echo $k;$k=$k+1; ?></span>
				</label>
            <?php }?></div><?php }?>
		  <input type="submit" name="hh">
	      </form>
        
        </div>
    </div>
	

   
  <div class="hh" style="display:inline;float:left;">
        <div class="col-sm-4" ><label class="reserved"><input type="checkbox" class="cust-checkbox" disabled><span></span>Reserve Seat </label></div>
        <div class="col-sm-4"><label class="selected"><input type="checkbox" class="cust-checkbox" disabled><span></span>Selected Seat </label></div>
        <div class="col-sm-4"><label ><input type="checkbox" class="cust-checkbox" disabled><span></span>Empty Seat </label></div>
 </div>
<?php } ?>
</body>
</html>
