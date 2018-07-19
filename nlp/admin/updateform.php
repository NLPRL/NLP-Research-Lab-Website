<?php
	session_start();
	
	if($_SESSION['uid'])
	{
		
	}else{
		header('location:../login.php');


	} ?>
	<?php 
	    include('header.php');
		include('../dbcon.php');

		
		$sid = $_GET['sid'];
	$sql = "SELECT * FROM `student` WHERE `id`='$sid'";
	$run= mysqli_query($con,$sql);

	$data= mysqli_fetch_assoc($run);
?>
<div class="container-fluid" id="admintitle">
	<h1>Welcome to Admin Dashboard</h1>
	<h3><a href="admindash.php" style="float :left;color: white; text-decoration: none;margin-left: 30px;">Back to Admindash</a></h3>
	<h3><a href="logout.php" style="float: right; color: white; margin-right: 30px; text-decoration: none; ">Logout</a></h3>
</div>
 <form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>Rollno</td>
			<td><input type="text" name="rollno" value=<?php echo $data['roll no'];  ?>></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" value=<?php echo $data['name'];  ?>required></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value=<?php echo $data['city'];  ?> required></td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="text" name="pcont" value=<?php echo $data['pcont'];  ?> required></td>
		</tr>
		<tr>
			<td>stenderd</td>
			<td><input type="number" name="standerd" value=<?php echo $data['standerd'];  ?> required></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>

				<input type="submit" name="submit" /></td>
				<button><a href="../index3.php"style="color:black;">home</a></button>
		</tr>
	</table>
  </form>
</body>
</html>