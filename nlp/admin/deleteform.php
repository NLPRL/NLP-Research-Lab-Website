<?php



include('../dbcon.php');
    
		$id= $_REQUEST['sid'];
    	$qry="DELETE FROM `student` WHERE `id`='$id';";
    	$run= mysqli_query($con,$qry);

    		if($run==true){
    			?>
    			<script>
    				alert('Data deleted succesfully.');
    				window.open('deletestudet.php');
    			</script>

    			<?php
    		}
    
?>

?>