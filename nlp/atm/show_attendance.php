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
 				<tr><th>Serial No</th><th>Student Name</th><th>Roll no</th><th>Attendance</th></tr>
 				<?php
 				$serialnumber=0;
 				$counter=0;
 				$sql=" SELECT * FROM attendance_records WHERE date='" . $_POST['date'] ."' ";
 				$result = mysqli_query($con,$sql);
 				while($row = mysqli_fetch_array($result)){
 					$serialnumber++;
 				
 			?><tr>
 				<td> <?php echo $serialnumber; ?></td>
 				<td> <?php echo $row['student_name']; ?></td>
 				
 				<td> <?php echo $row['roll_number']; ?></td>
 				<td> <input type="radio" name="attendance_status[<?php echo $counter; ?>]"

                    <?php if ($row['attendance_status'] ==="Present") {
                        echo "checked=checked";
                    } ?>
                 value="present">Present
 				<td> <input type="radio" name="attendance_status[<?php echo $counter; ?>]" 
                      <?php if ($row['attendance_status'] ==="Absent") {
                        echo "checked=checked";
                    } ?>

                    value="absent">Absent
 			</tr>
 				<?php $counter++;  } ?>

         <tr>
         	<td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td>

         </tr>
 			</table>
 		
 	</div>
 </div>