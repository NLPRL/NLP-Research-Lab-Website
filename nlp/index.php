<!DOCTYPE HTML>
<html lang="en_US">
 
  <head>
	<title>student management system</title>
    <meta charset="UTF-8">
    <style>
	body{
		background-color:hsl(0, 0%, 75%);
	}
	</style>
  </head>
  <body>
	<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
    <h1 align="center">Welcome to student management system</h1>
    <form method="post" action="index.php">
    <table style="width :30%;" align="center" border=" 1">
    	<tr>
    		<td colspan="2" align="center">Student Information</td>
    	</tr>
    	<tr>
    		<td align="left">Choose Semester</td>
    		<td >
    			<select name="std">
    				<option value="1">1st</option>
    				<option value="2">2nd</option>
    				<option value="3">3rd</option>
    				<option value="4">4th</option>
    				<option value="5">5th</option>
    				<option value="1">6th</option>
    				<option value="1">7th</option>
    				<option value="1">8th</option>
    			</select>
    	    </td>
    	</tr>
    	<tr>
    		<td align="left">Enter RollNo</td>
    		<td><input type="text" name="rollno"> </td>
    	</tr>
    	<tr>
    		<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
        </tr>
        <button><a href="index3.php"style="color:black;">home</a></button>
    </table>
    </form>
		<div style=" background:#615656; color:white; width:40%;padding:10%;margin-top:5%; margin-left:20%;">
<h2>IMPORTANT Points for students :</h2>
<p>1. This is to get information of student his details</p>
<br>
<p>2. Details can be obtained by entering the semester and roll no</p>
<p>3. The details is filled by Sir or Admin so contact and submit detail to sir,Admin</p>
	</div>
  </body>
</html>
<?php

if (isset($_POST['submit'])) {
	   
	   $standered= $_POST['std'];
	   $rollno=  $_POST['rollno'];

	   include('dbcon.php');
	   include('function.php');



	showdetails($standered,$rollno);

	  



}
?>