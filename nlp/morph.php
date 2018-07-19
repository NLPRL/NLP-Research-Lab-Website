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
        <marquee id="marquee"><a href="register.html"><span class="spanmarq"><i class="fa fa-home"></i> HOME / Morphological Analyser</span></a></marquee>
        <div class="row" id="morph1">
            
            <div class="main" style="width:80%;text-align: center;text-align: justify;">

                <div class="container-fluid" id="morph" >
                     
                     <h2 style="color:blue; text-shadow :2px 2px grey;">Morphological Analyser</h2>
                     <p>
                        Morphology is the linguistic study of words, their internal structure and partially the meaning of the contained morphemes. Morphological analysis involves identification of a word's stem/root from a word-form and providing grammatical information of a word along with its suffixes. A morphological analyzer is a program that analyzes the morphology of an input word. It uses rules to identify the root and grammatical features of given words. It splits a given word into it's root, lexical category, gender, number, person, case, case marker or tense aspect modality(TAM), suffix and other required grammatical features.
                        <br>
                        <br>
                        Thus, to provide grammatical information of a word or word form in terms of root and affixes, there are three principal approaches for morphological analyser are being used. First, is "Item and Arranage Approach", also known as "Morpheme Based Morphological Analyser", second, "Item-and-Process Approach", basically known as "Lexeme-Based Morphological Analyser", and finally third, currently very famous approach among NLP/MT group is "Word-and-Paradigm Approach", primerily known as "Word-Based Morphological Analyser".
                        <h4>Note : Features explanation of a word</h4>
                        <ol>
                            <li> root : Root of the word (e.g. ladZake word has root ladZakA)</li>
                            <li> cat : Category of the word (e.g. Noun=n, Pronoun=pn, Adjective=adj, verb=v, adverb=adv post-position=psp and avvya=avy).</li>
                            <li>gen : Gender of the word (e.g. Masculine=m, Feminine=f, Neuter=n, mf , mn , fn, and any)</li>
                            <li>num : Number of the word (e.g. Singular=sg, Plural=pl, dual, and any )</li>
                            <li>per : Person of the word (e.g. 1st Person=1, 2nd Person=2, 3rd Person=3, and any)</li>
                            <li>case : Case of the word (e.g. direct=d, oblique=o and any)</li>
                            <li>tam : Case marker for noun or Tense Aspect Mood(TAM) for verb of the word </li>
                            <li>suff : Suffix of the word</li>
                        </ol>
                                    agr_gen: Agreeing gender of the following noun<br>
                                agr_num: Agreeing number of the following noun<br>
                                    agr_cas: Agreeing case of the following noun<br>
                                    emph: Emphatic "hI"feature of the word<br>
                                    emph1: Emphatic "BI"feature of the word<br>
                                    hon: Honorofic feature of the word<br>
                                       derive_root: Derived root<br>
                                    derive_lcat: Derived lexical category<br>
                                    derive_gen: Derived gender<br>
                                    derive_suff: Derived suffix<br>
                                    rednt: Redunt suffix of a noun<br>
                                       Asp= Aspectual property of a verb<br>
                                     Presently, CSE, IIT (BHU) has developed Morphological Analyzer for less resource languages like Magahi, Maithili and Bhojpuri.
                            
                        
                    </p>
                          <button style="width:350px; margin-left:40%;"><a href="http://nlprl.iitbhu.ac.in/bmmmorph/" style="color:white; font-weight:bold; font-size:22px; ">use morphological analyser</a></button>
                    
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