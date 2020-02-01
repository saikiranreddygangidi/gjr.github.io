<?php include 'ctravels.php';?>
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
				$focus=array();
			$sql = "SELECT * FROM seatbook";
$result = mysqli_query($conn1, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{ $focus1 = explode(",", $row['seat']);
$focus=array_merge($focus,$focus1);}}

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
	
	<?php 
	if(isset($_POST['hh'])){
	$checkbox1=$_POST['temp'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
$sql = "INSERT INTO seatbook values('gjr','$chk')";

if (mysqli_query($conn1, $sql))
	{echo "<script>alert('seat booked thank you')</script>";
}  }	?>
   
  <div class="hh" style="display:inline;float:left;">
        <div class="col-sm-4" ><label class="reserved"><input type="checkbox" class="cust-checkbox" disabled><span></span>Reserve Seat </label></div>
        <div class="col-sm-4"><label class="selected"><input type="checkbox" class="cust-checkbox" disabled><span></span>Selected Seat </label></div>
        <div class="col-sm-4"><label ><input type="checkbox" class="cust-checkbox" disabled><span></span>Empty Seat </label></div>
 </div>
</body>
</html>
