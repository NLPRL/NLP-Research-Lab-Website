<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo 'succesful';
}


if(isset($_POST['submit']))
{
	$file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
	
$fp      = fopen($tmp_name, 'r');

$content = fread($fp, filesize($tmp_name));

$content = addslashes($content);
    $file1=explode(".",$file);
    $fileActualExt = strtolower(end($file1));

	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{ if ($fileError === 0) {
        if ($fileSize < 5000000) {
           $fileNameNew = uniqid('', true).".".$fileActualExt;
           $path="uploads/".$fileNameNew ;
           move_uploaded_file($tmp_name,$path);
           $sql = "INSERT INTO myblob (name,mime,data)
VALUES ('$file', ' $fileSize', ' $content')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
     
        mysqli_close($conn);
            
           header('location:index4.php?upload success');
        }else{
            echo "your file is to big";
        }
    }else {
        echo "there was an error";
    }	
}else{
    echo "no allowed to upload file of this type.";
}
}

?>