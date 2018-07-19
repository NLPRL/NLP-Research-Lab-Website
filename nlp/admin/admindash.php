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
	<h4><a href="logout.php" style="float: right; color: white; margin-right: 30px; text-decoration: none; ">Logout</a></h4>
	<div style="width:400px; height:300px;"><button style="background:#0099ff;"><a href="../atm/index.php" style="color:white;">Attendance System</a></button></div>
</div>
<div class="dashboard">
	<table  style="width: 50%" align="center">
		<tr>
			<td>1.</td><td><a href="addstudent.php"><button>Insert Student</button></a></td>

		</tr>
		<tr>
			<td>1.</td><td><a href="updatestudent.php"><button>Update Student</button></a></td>

		</tr>
		<tr>
			<td>1.</td><td><a href="deletestudent.php"><button>Delete Student</button></a></td>

		</tr>
		<button><a href="../index3.php"style="color:black;">home</a></button>
	</table>
</div>
</body>
