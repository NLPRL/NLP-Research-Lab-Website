<html>
    <head>
        <title>IIT(BHU):NLLP(Natural Language Processing Lab</title> 
        

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
         <link rel="stylesheet" href="style3.css"  media="all"/>
          
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
       <style>
       
      .container-fluid{
           display:flex;
           flex-wrap: wrap;
           border:2px solid black;
           
           align-items:center;
           

       }
       .card{
           border:1px solid blue;
           margin-left:30px;
           
           display:inline-block;
           display:justify;
           height:600px;
           width:30% !important;
       }
       .card img{
          margin-left:10px;
          margin:5%;
       }
       </style>
    </head>
<body>
    <div class="flex-container" style="width:90%">
        <div class="container" id="welcome"><h3>Welcome to Natural Language Processing Lab <a href="signup1.php" style="text-decoration: line-through; color:red;">register</a> or  <a href="Login1.php" style=" color:red;">Log in</a></h3></div>
        <div class="jumbotron text-center" style="width:100%; margin-left:60px;">
            <div  id="logo" style=" width: 200px; height: 220px;"><a href="index3.php"><img src="1.jpg" alt="BHU:Banaras Hindu University" class="img-fluid" style="width:200px;height:220px; background-size:100%;"></a></div>
                <div class="header">
                    <h1 style="color:rgb(26, 24, 24);text-shadow:2px 4px 2px rgb(224, 231, 231) ; display:bold;">NLPL:Natural Language Processing Lab</h1>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ; font-size: 24px;">Department Of Computer Science & Engg.</p>
                    <p style="color:rgb(26, 24, 24);text-shadow:2px 2px rgb(224, 231, 231) ;font-size: 24px;">Indian Institute of Technology (BHU), Varanasi.</p>
                </div>
                <div class="flex1-container">
                     <div><a href="contactus.php"><i class="fa fa-map-marker"></i> ContactUs </a></div>
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
                 <li class="nav-item active" style="padding-left: 20px;"><a class="nav-link" href="index3.php">HOME</a></li>
                 <li class="nav-item"><a class="nav-link" href="signup1.php">REGISTER</a></li>
                 <li class="nav-item"><a class="nav-link" href="projectss.php">project</a></li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="lexical.php">Tools<span class="caret"></span></a>
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
                           <li class="dropdown-item"><a href="machine.php">Macined Readable Dictionary</a></li>
                           <li class="dropdown-item"><a href="corpus.php">Corpus</a></li>
                           <li class="dropdown-item"><a href="Chunked.php">Chunked Corus</a></li>
                        </ul>
                    </div>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="team.php">TEAM</a></li>
                 <li class="nav-item"><a class="nav-link" href="contactus.php">ABOUT</a></li>
             </ul>
          </div>
        </nav>
        <marquee id="marquee"><a href="register.html">Register</a></marquee>

            
  

     <div class="container-fluid" id="team">
        
        <h2>Faculties</h2>
        <br>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="no photo available" />
            <h4>Dr. Anil Kumar Singh</h4>
            <h4>Associate Professor,  PI</h4>
            <h4><a href="mailto:aksingh.cse@iitbhu.ac.in" target="_blank">aksingh.cse@iitbhu.ac.in</a></h4>
            <h4>+91-542-230-7056</h4>
            <h4><strong>Qualification:</strong> M.Tech, PhD</h4>
            <h4><strong>Area of Interest:</strong> Natural Language Processing, Computational Linguistics, Information Retrieval</h4>
        </div>
        <div class="card" style="width:20%;">
            <div class="card-body">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Swasti Mishra</h4>
            <h4>Co - PI</h4>
            <h4><a href="mailto:swasti.linguist@iitbhu.ac.in" target="_blank">swasti.linguist@iitbhu.ac.in</a></h4>
            <h4>+91-8173071130</h4>
            <h4><strong>Qualification:</strong> M.A.(Linguistics), PhD</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Project Development</h4>
         </div>
        </div>
        <div class="card" style="width:20%;">
            <div class="card-body">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Sanket Kuamr Pathak</h4>
            <h4>NLP Consultant</h4>
            <h4><a href="mailto:sanketlck@gmail.com " target="_blank">sanketlck@gmail.com </a></h4>
            <h4>+91-9014513830</h4>
            <h4><strong>Qualification: </strong> M.A.(Linguistics), PhD</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Machine Translation Development and Linguist Data Analysis</h4>
          </div>
        </div>
        <div class="card" style="width:20%; border:1px solid blue;">
            <img src="nav.png" alt="Image not available"/>
            <h4>Mr. Manish Mishra</h4>
            <h4>Sr. Language Engineer</h4>
            <h4><a href="mailto:manishmnlp@gmail.com" target="_blank">manishmnlp@gmail.com</a></h4>
            <h4>+91-9999558938</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Coordinating overall MT modules’ Development</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Nagaraju Vuppala</h4>
            <h4>Sr. Software Engineer</h4>
            <h4><a href="mailto:vpp.nagaraju1234@gmail.com" target="_blank">vpp.nagaraju1234@gmail.com</a></h4>
            <h4>+91-8106939370</h4>
            <h4><strong>Qualification: </strong> B.Tech (CSE)</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Software Development and Data processing</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rashid Ahmad</h4>
            <h4>Sr. Software Engineer</h4>
            <h4><a href="mailto:rashid101b@gmail.com" target="_blank">rashid101b@gmail.com</a></h4>
            <h4>+91-9966443729</h4>
            <h4><strong>Qualification: </strong> MCA, M.S (CSE), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Software Development and Deployment</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Manish Kumar Singh</h4>
            <h4>Project Associate</h4>
            <h4><a href="mailto:maneeshhsingh100@gmail.com" target="_blank">maneeshhsingh100@gmail.com</a></h4>
            <h4>+91-9696048981</h4>
            <h4><strong>Qualification: </strong> M.A.(Linguistics), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Project Co-ordination and Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Gouri Sahoo</h4>
            <h4>Software Consultant</h4>
            <h4><a href="mailto:gourisahoo.cs@gmail.com" target="_blank">gourisahoo.cs@gmail.com</a></h4>
            <h4>+91-7989756683</h4>
            <h4><strong>Qualification: </strong> M.Sc (Computer Science)</h4>
            <h4><strong>Remarks:</strong> Software Installation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rajesh Kumar Mundotiya</h4>
            <h4>Research Scholar</h4>
            <h4><a href="mailto:rajeshkm.mundotiya@gmail.com" target="_blank">rajeshkm.mundotiya@gmail.com</a></h4>
            <h4>+91-8009567114</h4>
            <h4><strong>Qualification: </strong> M.Tech (CSE), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> NLP Software Installation,Integration and POS Development</h4>
        </div><br>
        <h1>Bhojpuri Language Group</h1>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Ashok Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:ashoklinguistics@gmail.com" target="_blank">ashoklinguistics@gmail.com</a></h4>
            <h4>+91-9415874763</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics), Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation , Grammar Analysis and Overall Data Management of Bhojpuri</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Archna Kumari</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:archnaisarchi@gmail.com" target="_blank">archnaisarchi@gmail.com</a></h4>
            <h4>+91-8090828703</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation , Grammar Analysis and Overall Data Management of Bhojpuri</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ajeet Singh</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:ajeet2910@gmail.com" target="_blank">ajeet2910@gmail.com</a></h4>
            <h4>+91-8604420107</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ravi Ranjan</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rranjan219@gmail.com" target="_blank">rranjan219@gmail.com</a></h4>
            <h4>+91-8318929662</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Anubhav Tripathi</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:anubhavbhu@gmail.com" target="_blank">anubhavbhu@gmail.com</a></h4>
            <h4>+91-7518230784</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <h1>Magahi Language Group</h1>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Shishir kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:shishir2594@gmail.com" target="_blank">shishir2594@gmail.com</a></h4>
            <h4>+91-9793787534</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation, Grammar Analysis and Overall Data Management of Magahi</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Rashmi Rani</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rashmi.ranitiwari@gmail.com" target="_blank">rashmi.ranitiwari@gmail.com</a></h4>
            <h4>+91-7631654281</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Anjali Rai</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:anjalirai2001@gmail.com" target="_blank">anjalirai2001@gmail.com</a></h4>
            <h4>+91-7800983995</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ritesh Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:riteshkumarsingh990@gmail.com" target="_blank">riteshkumarsingh990@gmail.com</a></h4>
            <h4>+91-8544239961</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Manu Mashani</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:manu.mashani@gmail.com" target="_blank">manu.mashani@gmail.com</a></h4>
            <h4>+91-9695029644</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics) Pursuing</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <br>
        <h1>Maithili Language Group</h1>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Vineet Kumar Lal Das</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:vin.pin.lal.das@gmail.com" target="_blank">vin.pin.lal.das@gmail.com</a></h4>
            <h4>+91-8877443570</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation, Grammar Analysis and Overall Data Management of Maithili</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Pankaj Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:pankajpriyanshu2020@gmail.com" target="_blank">pankajpriyanshu2020@gmail.com</a></h4>
            <h4>+91-8825149938</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili), Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Shrawan Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:shrawan.bgp@gmail.com" target="_blank">shrawan.bgp@gmail.com</a></h4>
            <h4>+91-9852310860</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rahul Kumar Mishra</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rahulmishra9938@gmail.com" target="_blank">rahulmishra9938@gmail.com</a></h4>
            <h4>+91-9470401159</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card" style="width:20%;">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Sunny Prakash</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:prakashsunny666@gmail.com" target="_blank">prakashsunny666@gmail.com</a></h4>
            <h4>+91-7388122666</h4>
            <h4><strong>Qualification: </strong> B.A.</h4>
            <h4><strong>Remarks:</strong> Project related Assistance</h4>
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