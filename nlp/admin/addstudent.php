<?php
	session_start();
	if($_SESSION['uid'])
	{
		
	}else{
		header('location:../login.php');
	}
?>
<?php
include('header.php');

?>
<div class="container-fluid" id="admintitle">
	<h1>Welcome to Admin Dashboard</h1>
	<h3><a href="admindash.php" style="float :left;color: white; text-decoration: none;margin-left: 30px;">Back To Admindash</a></h3>
	<h3><a href="logout.php" style="float: right; color: white; margin-right: 30px; text-decoration: none; ">Logout</a></h3>
</div>

  <form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>Rollno</td>
			<td><input type="text" name="rollno" placeholder="enter rollno" required></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" placeholder=" Enter Full Name" required></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder=" Enter your city" required></td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="text" name="pcont" placeholder=" Enter parents contact no" required></td>
		</tr>
		<tr>
			<td>stenderd</td>
			<td><input type="number" name="standerd" placeholder=" Enter standerd" required></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="submit"></td>
			<button><a href="../index3.php"style="color:black;">home</a></button>
		</tr>
	</table>
  </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
    	
    	
    	include('../dbcon.php');
    	$rolno=$_POST['rollno'];
    	$name=$_POST['name'];
    	$city=$_POST['city'];
    	$pcon=$_POST['pcont'];
    	$std=$_POST['standerd'];
    	$imagename= $_FILES['simg']['name'];
    	$tempname= $_FILES['simg']['tmp_name'];


    	move_uploaded_file($tempname,"../dataimg/$imagename");

    	$qry="INSERT INTO `student`(`roll no`, `name`,`city`, `pcont`, `standerd`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
    	$run= mysqli_query($con,$qry);

    		if($run==true){
    			?>
    			<script>
    				alert('Data inserted succesfully.');
    			</script>

    			<?php
    		}
    }
?>