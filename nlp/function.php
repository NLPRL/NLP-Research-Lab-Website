<?php
  
  function 	showdetails($standered,$rollno){
  	    include('dbcon.php');

  	    $sql= "SELECT * FROM `student` WHERE `roll no`='$rollno' AND `standerd`='$standered'";

  	    $run= mysqli_query($con,$sql);

  	    if (mysqli_num_rows($run)>0){

  	    	$data=mysqli_fetch_assoc($run);

  	    	?>
  	       <table style="width :30%; margin-top:40px;" align="center" border=" 1">
  	    		<tr>
  	    			<th colspan="3">Student Details</th>
  	    		</tr>
  	    		<tr>
  	    			<td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>"  style="max-height: 150px; max-width: 120px" /></td>
  	    			<th>Roll NO:</th>
  	    			<td><?php echo $data['roll no'];?></td>
  	    		</tr>
  	    		<tr>
  	    			
  	    			<th>Name:</th>
  	    			<td><?php echo $data['name'];?></td>
  	    		</tr>
  	    		<tr>
  	    			
  	    			<th>standerd:</th>
  	    			<td><?php echo $data['standerd'];?></td>
  	    		</tr>
  	    		<tr>
  	    			
  	    			<th>Parrents Contact Number</th>
  	    			<td><?php echo $data['pcont'];?></td>
  	    		</tr>
  	    		<tr>
  	    			
  	    			<th>city</th>
  	    			<td><?php echo $data['city'];?></td>
  	    		</tr>
  	    		<button><a href="index.php" style:"float:right;> refresh</a></button>
  	    	

  	    	</table>
    
      <?php
  	    }else {
  	    	echo "<script>alert('No Student Found');</script>";
  	    }

	   }
?>