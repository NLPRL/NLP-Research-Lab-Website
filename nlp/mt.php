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
  
        <marquee id="marquee"><a href="register.html"><span class="spanmarq"><i class="fa fa-home"></i> HOME / Machine Translation Systems</span></a></marquee>
        <div class="row" id="mt">
            
            <div class="main" style="width:80%;text-align: center;text-align: justify;">

                <div class="container-fluid" id="mt1" >
                     <h2 style="color: blue;" >Machine Translation Systems:</h2>
                     <p style="font-size: 22px;">Translation Process</p>
                     <p>
                            Machine translation is a subfield of Artificial Intelligence. It is an application of computers which does the task of translating texts from one natural (human) language to another, without human involvement.<br><br>
                        <br>
                      
                            To process any translation (whether human or automated), objective is that the meaning of a source language must be fully restored in the target language after translation. 
                             It can simply be described in terms of human translation:
                            I- Decoding the meaning of the source text; and
                            II- Re-encoding this meaning in the target language
                             Behind this process a complex cognitive process lies. To decode the meaning of the source text translator must interpret and analyze all the linguistic features of the source text and same complex knowledge he repeats to re-encode the meaning in the target language.
                            Natural languages are highly complex for MT because words and sentence may have multiple meanings and readings respectively. The most remarkable thing is that certain grammatical features and cultural aspects might not exist in another language.
                        <h4>Types of Machine Translation Approach</h4>
                        <ol>
                            <p>MT systems can be classified according to their core methodology in to two types:</p>
                            <li>Corpus-based approach/Data driven approach</li>
                            <li> Rule-based machine translation approach/Knowledge-Based Machine approach/Classical Approach</li>
                                     Under the corpus-based approach the knowledge is automatically extracted by analysing translation examples from a parallel corpus built by human experts. Statistical Machine Translation and Example-based Machine Translation Approach are sub types of this approach.
                                     In the rule-based approach, human experts specify a set of rules to describe the translation process, because an enormous amount of input from human experts is required. It is remarkable that, combination of the features of these two MT approaches resulting in to the Hybrid Machine Translation Approach.
                                     Rules based machine approach in general describes-machine translation systems based on linguistic information about source and target languages basically retrieved from bilingual dictionaries and grammars covering the main semantic, morphological, and syntactic regularities of each language respectively.

                                     Presently, CSE, IIT (BHU) has developed three Machine Translation Systems viz. Magahi-Hindi, Maithili-Hindi and Bhojpuri-Hindi. These MT systems are based on transfer based approach.
                        </ol>
                    </p>
                       
                    <button style="width:350px; margin-left:40%;"><a href="http://nlprl.iitbhu.ac.in/bmmmorph/" style="color:white; font-weight:bold; font-size:22px; ">Bhojpuri, Maithili and Magahi → Hindi</a></button>
                    <br>  <button style="width:350px; margin-left:40%;"><a href="http://nlprl.iitbhu.ac.in/sampark-hpu/" style="color:white; font-weight:bold; font-size:22px; ">Hindi ↔ Punjabi, Hindi ↔ Urdu</a></button>
                    <br> <button style="width:350px; margin-left:40%; "><a href="http://nlprl.iitbhu.ac.in/anusaaraka/" style="color:white; font-weight:bold; font-size:22px; ">English → Hindi</a></button>
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