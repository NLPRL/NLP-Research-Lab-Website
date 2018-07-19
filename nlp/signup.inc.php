<?php 

 include ('test.php') ;  
if(isset($_POST["SUBMIT"])) {
 
   $name=mySqli_real_escape_string($conn, $_POST['name']);
   $email=mySqli_real_escape_string($conn, $_POST['email']);
   $psw=mySqli_real_escape_string($conn, $_POST['psw']);
   $phone=mySqli_real_escape_string($conn, $_POST['phone']);
   //errorhandlers
   //empltycheck
   if (empty($name)||empty($email)||empty($psw)||empty($phone) ) {
       header("Location: signup1.php?signup1=empty");
    
       exit();
   } else {
       if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",$name)) {
          header("Location: signup1.php?signup1=invalid");
          $nameErr = "Only letters and white space allowed"; 
          exit();
       }else{
        // email verifiation
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: signup1.php?signup=email");
            $emailErr="email is not valid";
            
            exit();
        }else{
            $hashedpwd=password_hash($psw,PASSWORD_DEFAULT);
            //insert the user to the data base
            $sql="INSERT INTO user ( username, email, password,phone) VALUES ( '$name', '$email', '$psw', '$phone')";
           if(mysqli_query($conn,$sql)==true)
           { 
               ?>
             <script>
             alert('signup Done');
             </script>
               <?php
                header("Location: signup1.php?signup=success");
            exit();
           }
           else {
               echo "not inserted";
           }
        }
       }
   }
}else {
    header("Location:signup1.php");
   
    exit();
}
?>