<?php
include('header.php');
include('db.php');
$flag=0;
if (isset($_POST['submit'])) {
	$sql="INSERT INTO attendance( student_name, roll_number) VALUES ('$_POST[name]','$_POST[roll]')";
if (mysqli_query($con, $sql)) {
	$flag=1;
    echo "New record created successfully";
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
<div class="jumbotron jumbotron-fluid">
	<?php if ($flag) { ?>
<div class="alert alert-success">
	<strong>!sucess</strong>ateendamce data succesfully inserted;
</div>
<?php } ?>
	<div class="card-heading">
		<h2>
			<a class="btn btn-success pull-left"  href="add.php">Add Student</a>
			<a class="btn btn-info pull-right"  href="index.php">back</a>
		<h2>
	</div>
	<div class="card-body">
		<form action="add.php" method="post">
			<div class="form-group">
				<label for="name">Student Name</label>
				<input type="text" name="name" id="name" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="roll">Roll No</label>
				<input type="text" name="roll" id="roll" class="form-control" required>
			</div>

			<div class="form-group">
				
				<input type="submit" name="submit"value="submit"class="btn btn-primary" required>
			</div>
		</form>
	</div>
	


</div>