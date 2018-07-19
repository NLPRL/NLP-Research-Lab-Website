<?php
	session_start();
	include('header.php');
	if($_SESSION['uid'])
	{
		
	}else{
		header('location:../login.php');
	}
?>
  <div class="container-fluid" style="width:90%">
        <div class="container" id="welcome"><h3>Welcome to Natural Language Processing Lab <a href="signup1.php" style="text-decoration: line-through; color:red;">register</a> or  <a href="Login1.php" style=" color:red;">Log in</a></h3></div>
        <div class="jumbotron text-center">
            <div  id="logo" style=" width: 200px; height: 220px;"><a href="index3.html"><img src="1.jpg" alt="BHU:Banaras Hindu University" class="img-fluid" style="width:200px;height:220px; background-size:100%;"></a></div>
                <div class="header">
                    <h1 style="color:rgb(26, 24, 24);text-shadow:2px 4px 2px rgb(224, 231, 231) ;">NLPL:Natural Language Processing Lab</h1>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ; font-size: 24px;">Department Of Computer Science & Engg.</p>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ;font-size: 24px;">Indian Institute of Technology (BHU), Varanasi.</p>
                </div>
                <div class="flex1-container">
                     <div><a href="#"><i class="fa fa-map-marker"></i> ContactUs </a></div>
                     <div><a href="#"><i class="fa fa-user-circle"></i> Admin </a></div>
                </div>
        </div>
    </div>
   
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top" id="navbar">
            <a href="#" class="navbar-brand">NLPL:</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
             
             <ul class="navbar-nav" id="navbar-links">
                 <li class="nav-item active" style="padding-left: 20px;"><a class="nav-link" href="index3.html">HOME</a></li>
                 <li class="nav-item"><a class="nav-link" href="signup1.html">REGISTER</a></li>
                 <li class="nav-item"><a class="nav-link" href="projectss.html">project</a></li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="lexical.html">Tools<span class="caret"></span></a>
                    <div id="dropdown">
                        <ul class="dropdown-menu" id="navbardrop">
                           <li class="dropdown-item"><a href="machine.php">Pos Tagger</a></li>
                           <li class="dropdown-item"><a href="chunker.php">chunker</a></li>
                           <li class="dropdown-item"><a href="morph.php">Morph Tools</a></li>
                           <li class="dropdown-item"><a href="mt.php">MT sysytems</a></li>
                        </ul>
                    </div>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="lexical.html">LEXICAL RESOURCE<span class="caret"></span></a>
                    <div id="dropdown">
                        <ul class="dropdown-menu" id="navbardrop">
                           <li class="dropdown-item"><a href="machine.html">Macined Readable Dictionary</a></li>
                           <li class="dropdown-item"><a href="corpus.html">Corpus</a></li>
                           <li class="dropdown-item"><a href="Chunked.html">Chunked Corus</a></li>
                        </ul>
                    </div>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="team.html">TEAM</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
             </ul>
          </div>
        </nav>
  
<marquee id="marquee"><a href="register.html">Register</a></marquee>

<div class="container-fluid" id="admintitle">
	<h1>Welcome to Admin Dashboard</h1>
	<h3><a href="admindash.php" style="float :left;color: white; text-decoration: none;margin-left: 30px;">Back to Admindash</a></h3>
	<h3><a href="logout.php" style="float: right; color: white; margin-right: 30px; text-decoration: none; ">Logout</a></h3>
</div>
<table align="center" width>
<form action="updatestudent.php" method="post">
	
		<tr>
	    <td>Enter standerd</td>
	    <td><input type="number" name="standerd" placeholder="Enter Standered" /></td>
	    </tr>
	    <tr>
	    <td>Enter student name</td>
	    <td><input type="text" name="stuname" placeholder="Enter Standered"></td>
	    </tr>
	    <td colspan="2"><input type="submit" name="submit" value="search"/></td>
	    </form>
    </table>

<table align="center" border="1" style="width:50%;">
	<tr style="background: #000; color:#fff;">
		<td>no</td>
		<td>img</td>
		<td>Name</td>
		<td>Roll No</td>
		<td>Edit</td>
	</tr>
	<?php

if (isset($_POST['submit'])) {
	include('../dbcon.php');

	$standerd = $_POST['standerd'];
	$name = $_POST['stuname'];

	$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
	$run = mysqli_query($con,$sql);

    if (mysqli_num_rows($run)<1 
) {
    	echo "<tr><td colspan='3'></td>no records found</td></tr>";
    }
    else{
    	$count=0;
    	while ($data=mysqli_fetch_assoc($run)) 
    	{ 
    		$count++;
    		?>  
    		<tr>
    			    <td><?php echo $count; ?></td>
		            <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
		            <td><?php echo $data['name']; ?></td>
		            <td><?php echo $data['roll no']; ?></td>
		            <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
    	        </tr>
    	        <?php
    	}
    }
}

?>

</table>
  <footer id="myFooter">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-3">
                      <h2><a href="index3.html">NLPL</a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h4>get started</h4>
                        <ul>
                          <li><a href="index3.html">HOME</a></li>
                          <li><a href="signup1.html">Sign Up</a></li>
                          <li><a href="projects.html">Projects</a></li>
                         
                        </ul>
                    </div>
                  <div class="col-sm-2">
                      <h4>About us</h4>
                      <ul>
                          <li><a href="aboutus.html">Information</a></li>
                          <li><a href="addres.html">Adress of us</a></li>
                          <li><a href="Comments">Comments</a></li>
                      </ul>
                  </div>
             
                   <div class="col-sm-2">
                         <div class="third">
                           <h2>Welcome to Karachi</h2>
                        </div>
                  </div>
                <div class="col-sm-3">
                  
                    <div class="social-networks">
                      <ul>
                         <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                         <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                         <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                      </ul>
                    </div>
                      <button type="button" class="btn btn-default"><a href="#">Contact Us</a></button>
                </div>
            </div>
              
        </div>
          <div class="footer-copyright">
               <p>@2018 copyright Rajnish Mishra</p>
          </div>
    </footer>
