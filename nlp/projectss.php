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
        <div class="row">
            
            <div class="main" style="width:80%; margin:2% 2% 2% 2%;">

                <div class="container-fluid" id="projects">
                     <h2>Projects</h2>
                     <p>Projects:
                        Although, in the area of language and linguistics, there have been great attention of research work on some major New Indo Aryan and Dravidian languages like Hindi, Bengali, Marathi, Punjabi,Tamil, Telugu etc., yet scantly any comprehensive research work is available on resource poor languages like Bhojpuri, Maithili, Magahi, Awadhi, Bundeli etc. So far as, complete region of Bihar and eastern part of Uttar Pradesh is concerned, several projects have been initiated at Department of Computer Science and Engineering (IIT BHU, Varansi) which are aimed to create language resources and tools for some major languages like; Bhojpuri, Maithili and Magahi. Following are some projects:
                        Resource Creation and Language Technology Tools Development for Bhojpuri, Magahi and Maithili
                    <ul>
                        <li>Development of Anusaraka Support Modules</li>
                        <li> Machine Readable Dictionary of Bhojpuri, Magahi and Maithili</li>
                        <li> Resources and Tools for Bhojpuri, Maithili and Magahi Machine Translation System</li>
                        <li> Resources and Tools for Bhojpuri, Maithili and Magahi Machine Translation</li>
                        <li> System-Phase II & Phase III</li>
                        <li> Assembly of Machine Translation Systems for Bhojpuri and Maithili</li>
                    </ul>
                        
                        Each one of these projects has its own place and utility, but in addition, they are an integral part of a larger aim to build machine translation system for Bhojpuri, Maithili and Magahi to Hindi language and vice versa. These projects under Project Varanasi have achieved significant progress in preparing the groundwork to build the machine translation systems. The necessary data and resources have almost been prepared and the tools required for the machine translation system have also been tried out. The first version of these machine translation systems is likely to be demonstrated very soon. In future, these systems can be connected with other Indian languages and English in order to make information access possible across all these languages. This work is being carried out as collaboration between various research institutes in India.
                        Some of these institutes are:
                        
                        Dept. of CSE, IIT (BHU), Varanasi
                        Dept. of Linguistics, BHU, Varanasi
                        LTRC, IIIT, Hyderabad Consortium
                        
                        It is note worthy to ackowledge the remarkable contribution of 'eBhasha Setu Language Services Private Limited' (a startup at IIIT incubication centre at IIIT Hyderabad, India) for software engineering support in various NLP tool building and deployment.
                        Eventhough, machine translation system was the main aim, there will be many resources and tools created in the process -<br>
                    <ul>
                        <li> Dictionary
                            <li> POS tagged data and POS tagger</li>
                                <li> Chunked data and Chunker tool</li>
                                    <li>Morph data and morphological analyzer/generator</li>
                                        <li>Parallel corpus</li>
                                            <li>English-Hindi</li>
                                                <li> Bhojpuri-Hindi</li>
                                                    <li>Maithili-Hindi</li>
                    </ul>
                         
                        
                        All these are valuable resources for Linguistics and NLP studies and experiments.</p>
                </div>
            </div>
               
        </div>
        

    <div class="content"></div>
 
    <footer id="myFooter">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-3">
                      <h2><a href="index3.html">NLPL</a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h4>get started</h4>
                        <ul>
                          <li><a href="index3.php">HOME</a></li>
                          <li><a href="signup1.php">Sign Up</a></li>
                          <li><a href="projects.php">Projects</a></li>
                         
                        </ul>
                    </div>
                  <div class="col-sm-2">
                      <h4>About us</h4>
                      <ul>
                          <li><a href="contactus.php">Information</a></li>
                          <li><a href="contactus.php">Adress of us</a></li>
                          <li><a href="contactus.php">Comments</a></li>
                      </ul>
                  </div>
             
                   <div class="col-sm-2">
                         <div class="third">
                           <h2>Welcome TO NLLP Lab</h2>
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
</body>
</html>