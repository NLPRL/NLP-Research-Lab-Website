<?php
session_start();
if (isset($_SESSION['uid'])) {
	header('location:admin/admindash.php');
}
?>
<html>
<head>
	<title>Admin login</title>
	<style>
	body{
		background-color:hsl(0, 0%, 75%);
	}
	</style>
</head>
<body>
	<h1 align="center">Admin Login</h1>
	
	
    <form action="login.php" method="post">
    	<table align="center">
    		<tr>
    			<td>usernames</td><td><input type="text" name="uname" required></td>
    		</tr>
    		<tr>
    			<td>Password</td><td><input type="Password" name="pass" required></td>
    		</tr>
    		<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"required></td>
				<button><a href="index3.php"style="color:black;">home</a></button>
    		</tr>
    	</table>
	</form>
	<div style=" background:#615656; color:white; width:40%;padding:10%;margin-top:5%; margin-left:20%;">
<h2>IMPORTANT Points</h2>
<p>1. Admin can UPDATE, DELETE, ENTER the student information in database provided to him.</p>
<br>
<p> 2. Image is also uploaded of student .</p>
<p>3 . The details is filled by Sir or Admin so contact and submit detail to sir,Admin</p>
<p>4 . TO view student detail go to student section and type roll no and their standered or semester</p>
	</div>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login'])){

	$username= $_POST['uname'];
	$password= $_POST['pass'];

	$qry ="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$run= mysqli_query($con,$qry);
	$row = mysqli_num_rows ($run);
	if ($row <1) 
	{
		?>
		<script>alert('username or password not match !!');
		window.open('login.php','_self'); 
	    </script>
		<?php

	}
	else{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		
		session_start();
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}
?>