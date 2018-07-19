<?php
// define variables and set to empty values
$nameErr = $emailErr = $pswErr = $phoneErr = "";
$name = $email = $psw = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr ="Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr ="Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["psw"])) {
    $pswErr = "";
  } else {
    $psw= test_input($_POST["psw"]);
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr= "re enter password";
  } else {
    $phone= test_input($_POST["psw"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>