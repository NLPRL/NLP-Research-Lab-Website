<?php
include('db.php');
include('header.php');

?>
<div class="jumbotron jumbotron-fluid">
 	<h2><div class="card-heading">
 		<a class="btn btn-success pull-left" href="add.php">Add Student</a>
 		<a class="btn btn-primary pull-right" href="index.php">Back</a>
 	</h2>


 	<div class="jumbotron jumbotron-body">
 		
 			<table class="table table-striped">
 				<tr><th>serial no.</th><th>Dates</th><th>Show Atendance</th>
 				<?php
 				
 			
 				$sql="SELECT distinct date FROM attendance_records";


 				$result = mysqli_query($con,$sql);
 				$serialnumber=0;
 				while($row = mysqli_fetch_array($result)){
 					$serialnumber++;
 				
 			?>
 			<tr>
 				<td> <?php echo $serialnumber; ?></td>
 				<td> <?php echo $row['date']; ?></td>

 			<td>
 				<form  method="post" action="show_attendance.php">

 					<input type="hidden"  name="date" value="<?php echo $row['date'] ?>">
 					<input type="submit" value="show Attendance"class="btn btn-primary">
 				</form>
 			</td>
 			
 				<?php   } ?>

         <tr>
         	<td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td>
         	<td  style="float: left;"><a href="admindash.php"><input type="submit" name="submit" value="home" class="btn btn-primary"></a></td>
         </tr>
 			</table>
 		
 	</div>
 </div>