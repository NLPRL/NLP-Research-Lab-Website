<?php 

include('../dbcon.php');
    	$rolno= $_POST['rollno'];
    	$name= $_POST['name'];
    	$city= $_POST['city'];
    	$pcont= $_POST['pcont'];
    	$std= $_POST['standerd'];
    	$id= $_POST['sid'];
    	$imagename= $_FILES['simg']['name'];
    	$tempname= $_FILES['simg']['tmp_name'];


    	move_uploaded_file($tempname,"../dataimg/$imagename");

    	$qry="UPDATE `student` SET `roll no` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standerd` = '$std', `image` = '$img' WHERE `student`.`id` = '$id';";
    	$run= mysqli_query($con,$qry);

    		if($run==true){
    			?>
    			<script>
    				alert('Data updated succesfully.');
    				window.open('updateform.php?sid=<?php echo $id; ?>','_self');
    			</script>

    			<?php
    		}
    
?>
