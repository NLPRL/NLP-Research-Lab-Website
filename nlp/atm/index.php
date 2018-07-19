<?php 
include('db.php');
include('header.php');
$flag=0;
if(isset($_POST['submit'])) {
    foreach($_POST['attendance_status'] as $id=>$attendance_status) {
    	$student_name=$_POST['student_name'][$id];
    		$roll_number=$_POST['roll_number'][$id];
    		$date=date('Y-m-d H:i:s');
    		$sql="INSERT INTO attendance_records( `student_name`, `roll_number`, `attendance_status`, `date`) VALUES ('$student_name','$roll_number','$attendance_status','$date')";
    		$result= mysqli_query($con,$sql);
    		if ($result) {
	    $flag=1;
    echo "New record created successfully";
   
} else {
    echo "no";
}
    }
}

 ?>
 <div class="jumbotron jumbotron-fluid">
 	<h2><div class="card-heading">
 		<a class="btn btn-success pull-left" href="add.php">Add Student</a>
 		<a class="btn btn-primary pull-right" href="viewall.php">view all</a>
 	</h2>
 		<?php if ($flag) { ?>
<div class="alert alert-success" style="width:300px; margin-left: 36%;">
	<strong>!sucess</strong>  Attendance inserted;
</div>
<?php } ?>
 	<h3><div class="class text-centered" style="background:grey; width:200px; margin-left:40%;" align="center"><?php echo date("y-m-d");  ?></div></h3>
 	<div class="jumbotron jumbotron-body">
 		<form action="index.php" method="post">
 			<table class="table table-striped">
 				<tr><th>Serial No</th><th>Student Name</th><th>Roll no</th><th>Attendance</th></tr>
 				<?php
 				$serialnumber=0;
 				$counter=0;
 				$sql="SELECT * FROM attendance";
 				$result = mysqli_query($con,$sql);
 				while($row = mysqli_fetch_array($result)){
 					$serialnumber++;
 				
 			?><tr>
 				<td> <?php echo $serialnumber; ?></td>
 				<td> <?php echo $row['student_name']; ?>
 				<input type="hidden" value=" <?php echo $row['student_name']; ?>" name="student_name[]"></td>
 				<td> <?php echo $row['roll_number']; ?><input type="hidden" value=" <?php echo $row['roll_number']; ?>" name="roll_number[]"></td>
 				<td> <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="present" cheked>Present</td>
 				<td> <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="absent">Absent</td>
 			</tr>
 				<?php $counter++;  } ?>

         <tr>
         	<td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td>
         	<td><input type="submit" name="submit" value="home" class="btn btn-primary"></td>
         </tr>
 			</table>
 		</form>
 	</div>
 </div>