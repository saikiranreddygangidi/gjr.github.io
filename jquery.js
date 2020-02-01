
$(document).ready(function(){

    // code to read selected table row cell data (values).
    $("#myTable").on('click','#btnSelect',function(){
         // get the current row
		 alert("hi");
         var currentRow=$(this).closest("tr"); 
         
         col1=currentRow.find("td:eq(1)").text(); // get current row 1st TD value
         col2=currentRow.find("td:eq(2)").text(); // get current row 2nd TD
          col3=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
		  col4=currentRow.find("td:eq(4)").text(); // get current row 3rd TD
		  col5=currentRow.find("td:eq(5)").text(); // get current row 3rd TD
          data=col1+"\n"+col2+"\n"+col3;
         //$(".ffff").text(data).css("color","black");
        // window.open("booked.php","_self");
		$("#myTable").hide();
		$(".w3-card").show();
		$("#w6").show();
		   $("#from").text(col1).css("color","white");
	 $("#to").text(col2).css("color","white");
	 $("#time").text(col3).css("color","white");
	 $("#date").text(col4).css("color","white");
	 
	 $("#cost").text(col5).css("color","white");
   $("#w1").val(col1);
   $("#w2").val(col2);
$("#w4").val(col3);
$("#w3").val(col4);
$("#w5").val(col5);   
$("#w7").val("gjr travels"); 
    });
})
