<?php
session_start();

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
$query = "SELECT * FROM `upload`";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
//     // output data of each row
    while($row= mysqli_fetch_array($result)) {
        $id = $row['id'];
       
        $file=$row['file'];
        $path='http://localhost/nlp/uploads';
    
        echo "<a href='download.php?file=".$file."&path=".$path." '>Download File</a> ";
     
    }
} else {
    echo "0 results";
}

?> 



<html>
    <head>
        <title>IIT(BHU):NLLP(Natural Language Processing Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="style3.css" media="all"/>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
       
    </head>
<body>
    <div class="container-fluid" style="width:90%">
        <div class="container" id="welcome"><h3>Welcome to Natural Language Processing Lab <a href="signup1.php" style="text-decoration: line-through; color:red;">register</a> or  <a href="Login1.php" style=" color:red;">Log in</a></h3></div>
        <div class="jumbotron text-center">
            <div  id="logo" style=" width: 200px; height: 220px;"><a href="index3.php"><img src="1.jpg" alt="BHU:Banaras Hindu University" class="img-fluid" style="width:200px;height:220px; background-size:100%;"></a></div>
                <div class="header">
                    <h1 style="color:rgb(26, 24, 24);text-shadow:2px 4px 2px rgb(224, 231, 231) ; display:bold;">NLPL:Natural Language Processing Lab</h1>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ; font-size: 24px;">Department Of Computer Science & Engg.</p>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ;font-size: 24px;">Indian Institute of Technology (BHU), Varanasi.</p>
                </div>
                <div class="flex1-container">
                     <div><a href="index.php"style="font-size:18px;"><i class="fa fa-map-marker"></i> Student </a></div>
                     <div><a href="login.php" style="font-size:18px;"><i class="fa fa-user-circle"></i> Admin </a></div>
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
                 <li class="nav-item active" style="padding-left: 20px;"><a class="nav-link" href="index3.php">HOME</a></li>
                 <li class="nav-item"><a class="nav-link" href="signup1.php">REGISTER</a></li>
                 <li class="nav-item"><a class="nav-link" href="projectss.php">project</a></li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="lexical.php">Tools<span class="caret"></span></a>
                    <div id="dropdown">
                        <ul class="dropdown-menu" id="navbardrop">
                           <li class="dropdown-item"><a href="pos.php">Pos Tagger</a></li>
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
                           <li class="dropdown-item"><a href="machine.php">Macined Readable Dictionary</a></li>
                           <li class="dropdown-item"><a href="corpus.php">Corpus</a></li>
                           <li class="dropdown-item"><a href="#">Chunked Corus</a></li>
                        </ul>
                    </div>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="team.php">TEAM</a></li>
                 <li class="nav-item"><a class="nav-link" href="contactus.php">ABOUT</a></li>
             </ul>
          </div>
        </nav>
  
<marquee id="marquee"><a href="register.html">Register</a></marquee>
        <div class="container-fluid">
            
            <div class="main" id="downloads" style="width:80%; margin:2% 2% 2% 2%;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>file</td>
                            <td>action</td>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                    <tr>
                   <td><?php echo $data['id']; ?></td>
                   <td><a href="download.php?file=<?php echo urlencode( $data['filepath']);?>">Download</a></td>
                   <td><button><?php echo "<a href='download2.php?file=banner.jpg'>Download File</a> ";?></button></td>
                   <a href="download.php?file=">Dowload File</a>
                   </tr> 
                   <a href="download.php?file=banner.jpg">Download file</a>
                   </tbody>
                </table>
                



               
            </div>
               
        </div>
        

    <div class="content">
    <a href="index4.php">add new document</a>
		<?php
		while ($row= mysqli_fetch_array($result)) {
		$id = $row['id'];
		$name = $row['file'];
		$path = $row['path'];
      echo $id."".$file."<a href='download.php?dow=$path'>Download</a>";

		}
        ?>
        <a href="logout.php" " ><button style="width:300px; margin-left:70%;">logout</button></a>
    </div>
 
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
  </div>
</body>
</html>