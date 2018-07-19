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
        <marquee id="marquee"><a href="signup1.php"><i class="fa fa-home" style="font-size:20px"></i>   HOME / Chunker</a></marquee>
        <div class="row" id="corpus">
            
            <div class="main" style="width:80%; height:800px;text-align: center;text-align: justify;">

                <div class="container-fluid" id="corpus1" >
                     
                     <h2>Chunker:</h2>
                     <p>
                       Corpus Linguistics is a relatively new approach, emerged in 1960s
                        and that was a right time to apply corpus theory in to language sciences. Presently, it is seen as 
                        the study of linguistic phenomena through large collections of machine readable texts i.e. corpora.
                        Computer corpora are widely used to study grammar, lexicons, discourses, language variations, etc.
                        Corpus study addresses a great variety of linguistic issues ranging from monolingual research of
                        one language to contrastive studies involving many different languages of the world.
                        <br>
                        
                       Collection of linguistic data from different genres come under the study of corpora. Languages' corpora collected from various
                        regions and genres may be in compiled form or written texts or transcribed texts or in recorded speech. The primary purpose of
                       a corpus collection is to verify existing and novel hypothesis about languages. For instance, to reach out at the decision that
                         how particular sound, word and constructions vary within a language and among the languages. Apart from such practical usage, 
                       it deals with the principles and practice of corpora usage in terms of language study.
                        <h4>Classification of Corpus</h4>
                        <ol>
                            <li>Annotated corpus: It is a kind of linguistic information repository because through concrete grammar annotation explicit information about text can be retrieved.</li>
                            <li>Comparable corpus: It is aimed to compare corpora from languages.</li>
                            <li>Monitor corpus: It is continuous collection of texts, used for lexicography purpose and primarily it is used to examine language changes and constant growth rate in new vocabularies.</li>
                            <li>Monolingual corpus: It is small collections of individual text from single language.</li>
                            <li>Parallel corpus: It is a collection of multilingual corpus where texts of one language and their corresponding translations of other languages are given as per grammar unit like phrase by phrase and sentence by sentence.</li>
                            <li>Reference corpus: It is a collection of relevant information’s or facts in the form of spoken, written, formal and informal languages especially to represent various social and situational strata.</li>
                            <li>Spoken corpus: It is a type of corpus that contains texts of spoken languages in the recorded or written forms.</li>
                            <li>Raw corpus: It is a collection of unannotated/raw text.</li>
                            <li>Speech corpus: It is a collection of audio recordings of spoken languages. Usually, to avoid pronunciation related confusions, all speech corpora may have supportive files containing transcriptions of the spoken words during recording.
                                It can be of two types
                            <ul class="corpus-list">
                                <li >Read Speech (i.e. broadcast news, number sequences or words, readings of books etc.)</li>
                                <li >Spontaneous Speech (i.e. conversations or dialogs between two or more people, incidents or story narration by someone, guidance like explaining a route on a map, appointment/ Meeting related fixed conversation style)</li>
                                
                            </ul>
                        </li>
                            
                        </ol>
             
                    </p>
                    
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
                          <li><a href="aboutus.php">Information</a></li>
                          <li><a href="addres.php">Adress of us</a></li>
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