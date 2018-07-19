<?php
	session_start();
	include('header.php');
	if($_SESSION['uid'])
	{
		
	}else{
		header('location:../login.php');
	}
?>
 

<div class="container-fluid" id="admintitle">
	<h1>Welcome to Admin Dashboard</h1>
	<h3><a href="admindash.php" style="float :left;color: white; text-decoration: none;margin-left: 30px;">Back to Admindash</a></h3>
	<h3><a href="logout.php" style="float: right; color: white; margin-right: 30px; text-decoration: none; ">Logout</a></h3>
</div>
<table align="center" width>
<form action="deletestudent.php" method="post">
	
		<tr>
	    <td>Enter standerd</td>
	    <td><input type="number" name="standerd" placeholder="Enter Standered" /></td>
	    </tr>
	    <tr>
	    <td>Enter student name</td>
	    <td><input type="text" name="stuname" placeholder="Enter Standered"></td>
	    </tr>
	    <td colspan="2"><input type="submit" name="submit" value="search"/></td>
		</form>
		<button><a href="../index3.php"style="color:black;">home</a></button>
    </table>

<table align="center" border="1" style="width:50%;">
	<tr style="background: #000; color:#fff;">
		<td>no</td>
		<td>img</td>
		<td>Name</td>
		<td>Roll No</td>
		<td>Edit</td>
	</tr>
	<?php

if (isset($_POST['submit'])) {
	include('../dbcon.php');

	$standerd = $_POST['standerd'];
	$name = $_POST['stuname'];

	$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
	$run = mysqli_query($con,$sql);

    if (mysqli_num_rows($run)<1 
) {
    	echo "<tr><td colspan='3'></td>no records found</td></tr>";
    }
    else{
    	$count=0;
    	while ($data=mysqli_fetch_assoc($run)) 
    	{ 
    		$count++;
    		?>  
    		<tr>
    			    <td><?php echo $count; ?></td>
		            <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
		            <td><?php echo $data['name']; ?></td>
		            <td><?php echo $data['roll no']; ?></td>
		            <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
    	        </tr>
    	        <?php
    	}
    }
}

?>

</table>

