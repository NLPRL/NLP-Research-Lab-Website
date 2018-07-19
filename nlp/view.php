<?php

$con = mysqli_connect('localhost','root','','file');
if($con == false){
	echo "connection not done";
} else{
	echo "connection ok";
}
  $id = isset($_GET['id'])? $_GET['id'] :"";
   $sql = "SELECT * FROM `myblob` where id=$id ";
   if (	$run = mysqli_query($con,$sql)) {
//    $stmt->bind_param(1,$id);
    $row=mysqli_fetch_assoc($run);
    header('Content-Type: '.$row['mime']);
        echo ".row['data']";
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
  
?>