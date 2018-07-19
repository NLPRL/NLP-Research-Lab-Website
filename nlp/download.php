
<?php

$con = mysqli_connect('localhost','root','','file');
if($con == false){
	echo "connection not done";
} else{
	echo "connection ok";
}

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT *  FROM myblob WHERE id = $id";

$result = mysqli_query($con,$query) or die('Error, query failed');

list($id,$name,$mime,$data) =

mysqli_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>

Download File From MySQL

<?php

$query = "SELECT id, name FROM myblob";

$result = mysqli_query($con,$query) or die('Error, query failed');

if(mysqli_num_rows($result) == 0)

{

echo "Database is empty";

}

else

{

while(list($id, $name) = mysqli_fetch_array($result))

{

?>

<a href="download.php?id=<?php echo $id;?>"><?php echo $name; ?></a>

<?php

}

}

?>