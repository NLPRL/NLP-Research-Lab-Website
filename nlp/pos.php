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
                 <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
             </ul>
          </div>
        </nav>
  
        <marquee id="marquee"><a href="register.html"><span class="spanmarq"><i class="fa fa-home"></i> HOME / PoS Tagger</span></a></marquee>
        <div class="row" id="pos">
            
            <div class="main" style="width:80%;text-align: center;text-align: justify;">

                <div class="container-fluid" id="pos1" >
                     
                     <h2>PoS Tagger:-</h2>
                     <p>
                        As far as traditional grammar is concerned, words can be classified into their respective eight categories are called parts of speech (PoS); the verb, the noun, the pronoun, the adjective, the adverb, the adposition(preposition/post-position), the conjunction, and the interjection. It is well defined in traditional grammar that how the word is used in terms of lexical or syntactic category. Applied form of PoS categories in computational Linguistics is done through PoS-tagging especially by using algorithms which associate discrete terms, as well as hidden parts of speech, in accordance with a set of descriptive tags. In fact, the same word can be a noun in one sentence and a verb or adjective in another context. Tag is a context based PoS category marker assigned to a word or word form in the tagged training data in various syntactic context. Hence, assigning compatible PoS tag to a single word which is based on the fixed grammar specific definition as per its respective lexical function in traditional grammar, and syntactic context as per relationship with adjacent and related words in a phrase, sentence, or paragraph, is known as Part of Speech Tagging.
                        <br>
                        <h5 class="postag">pos tag set for indian Language</h5>
                <table class="table1">
                <tr>
                        <td>
                            SI No.
                        </td>
                        <td>
                            Category
                        </td>
                        <td>
                            Tag Name
                        </td>
                        <td>
                            Example
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.1
                        </td>
                        <td>
                            Noun
                        </td>
                        <td>
                            NN
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.2
                        </td>
                        <td>
                            NLoc
                        </td>
                        <td>
                            NST
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        Proper Noun
                    </td>
                    <td>
                        NNP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        3.1
                    </td>
                    <td>
                        Pronoun
                    </td>
                    <td>
                        PRP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        3.2
                    </td>
                    <td>
                        Demonstrative
                    </td>
                    <td>
                        DEM
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        4
                    </td>
                    <td>
                        Verb-finite
                    </td>
                    <td>
                        VM
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        5
                    </td>
                    <td>
                        Verb Aux
                    </td>
                    <td>
                        VAUX
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        6
                    </td>
                    <td>
                        Adjective
                    </td>
                    <td>
                        JJ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td>
                        Adverb
                    </td>
                    <td>
                        RB
                    </td>
                    <td>
                        *Only manner adverb
                    </td>
                </tr>
                <tr>
                    <td>
                        8
                    </td>
                    <td>
                        Post position
                    </td>
                    <td>
                        PSP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        9
                    </td>
                    <td>
                        Particles
                    </td>
                    <td>
                        RP
                    </td>
                    <td>
                        bhl, to, hl, jl, hA.N, na
                    </td>
                </tr>
                <tr>
                    <td>
                        10
                    </td>
                    <td>
                        Conjuncts
                    </td>
                    <td>
                        CC
                    </td>
                    <td>
                        bole (Bangla)
                    </td>
                </tr>
                <tr>
                    <td>
                        11
                    </td>
                    <td>
                        Question Words
                    </td>
                    <td>
                        WQ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.1
                    </td>
                    <td>
                        Quantifiers
                    </td>
                    <td>
                        QF
                    </td>
                    <td>
                        bahut, tho.DA, kam (Hindi)
                    </td>
                </tr>
                <tr>
                    <td>
                        12.2
                    </td>
                    <td>
                        Cardinal
                    </td>
                    <td>
                        QC
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.3
                    </td>
                    <td>
                        Ordinal
                    </td>
                    <td>
                        QO
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.4
                    </td>
                    <td>
                        Classifier
                    </td>
                    <td>
                        CL
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        13
                    </td>
                    <td>
                        Intensifier
                    </td>
                    <td>
                        INTF
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        14
                    </td>
                    <td>
                        Interjection
                    </td>
                    <td>
                        INJ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        15
                    </td>
                    <td>
                        Negation
                    </td>
                    <td>
                        NEG
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        16
                    </td>
                    <td>
                        Quotative
                    </td>
                    <td>
                        UT
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        17
                    </td>
                    <td>
                        Sym
                    </td>
                    <td>
                        SYM
                    </td>
                    <td>
                        ani (Telugu), endru (Tamil), bole/mAne (Bangla), mhaNaje (Marathi), mAne(Hindi)
                    </td>
                </tr>
                <tr>
                    <td>
                        18
                    </td>
                    <td>
                        Compounds
                    </td>
                    <td>
                        *C
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        19
                    </td>
                    <td>
                        Reduplicative
                    </td>
                    <td>
                        RDP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        20
                    </td>
                    <td>
                        Echo
                    </td>
                    <td>
                        ECH
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        21
                    </td>
                    <td>
                        Unknown
                    </td>
                    <td>
                        UNK
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
                        
            <button style="width:350px; margin-left:40%;"><a href="http://nlprl.iitbhu.ac.in/bmmpostagger/" style="color:white; font-weight:bold; font-size:22px; ">POS Tagger</a></button>
            <p>Presently, CSE, IIT (BHU) has developed PoS Tagger for less resource languages like Magahi, Maithili and Bhojpuri.</p>     
                     
                        
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
