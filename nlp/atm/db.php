<?php

$con = mysqli_connect('localhost','root','','attendance');
if($con == false){
	echo "connection not done";
} else{
	echo "connection ok";
}
?>
