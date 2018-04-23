<!DOCTYPE html>
<?php
    session_start();
    include 'dbh.php';

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medical Centre</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome link-->
    <link href="css\web-fonts-with-css\css\fontawesome-all.css" rel="stylesheet" >
    <!--to remove blue colour on icons-->
    <link href="css\custom.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <!--creating a navigation bar-->

      


      <div class = "navbar navbar-default navbar-fixed-top" role="navigation">
        
        <img class="navbar-brand" src="img/med.jpg" alt="logo">        
     
        <div class "container">
          <div class = "navbar-header">
            <!--show button when the size reduced-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
              data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--adding statement in the bar-->
            <a class="navbar-brand" href="#"><b>MediCare Channel Centre</b></a>
          </div>
          <div class = "navbar-collapse collapse">
            <ul class = "nav navbar-nav navbar-right">
              <li><a href="doctors.php">Our Doctors</a></li>
              <li><a href="aboutUs.php">About</a></li>
              <li class ="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services
                <b class = "caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">CARDIAC UNIT</a></li>
                <li class="divider"></li>
                <li><a href="#">DIABETES SCREENING</a></li>
                <li class="divider"></li>
                <li><a href="#">ENDOSCOPY</a></li>
                <li class="divider"></li>
                <li><a href="#">LOBORATORY</a></li>
                <li class="divider"></li>
                <li><a href="#">M.R.I. SCANNING</a></li>
                <li class="divider"></li>
                <li><a href="#">O.P.D.SERVICES</a></li>
                <li class="divider"></li>
                <li><a href="#">PHARMACY</a></li>
                <li class="divider"></li>
                <li><a href="#">PHYSIOTHERAPY & REHABILOTATION</a></li>
                <li class="divider"></li>
                <li><a href="#">ROOMS</a></li>
                <li class="divider"></li>
                <li><a href="#">ULTRA SOUND SCANNING</a></li>
                <li class="divider"></li>
                <li><a href="#">X-RAY FACILITIES</a></li>                                 
            </ul>
            
            </li>
            <li>
            
            
            <?php if(isset($_SESSION['ID'])) : ?>

              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> View account</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
              
            <?php else : ?>

              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><p>  s  a </p></li>
              
              </div>
        
            <?php endif; ?>

          </li>
                    
          </div>
        </div>
      </div>
      
      <div class="background">
        <img src = "img/background.jpg">
      </div>
      
      
      <div class="container">

      <div class="jumbotron">
        <div class="jumbotron text-center">
          <h1>Medicare Channel Centre</h1>
        <p>We always Care about you</p>
        </div>
      </div>
        
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carosel1.jpg_large" alt="...">
            <div class="carousel-caption">
            <div class="carouseltest">
              <h3><i>We are like no other with our friendly staff</i></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/caro2.jpg" alt="...">
            <div class="carousel-caption">
              <div class="carouseltest">
              <h3><i>Family is not an important thing It's Everything!</i></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/caro3.jpg" alt="...">
            <div class="carousel-caption">
              <div class="carouseltest">
              <h3><i>We have provided best facilities in Sri Lanka</i></h3>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div> <!-- Carousel -->


            
        <!--primary for blue-->
                  
        <?php if(isset($_SESSION['ID'])) : ?>
        <div class="jumbotron">
            <div class="jumbotron text-center">
              <h3>You are logged in</h3>
              <a href="patientlogout.php" class="btn btn-primary">Log Out</a>
              <a href="patientaccount.php" class="btn btn-danger">View my account</a>
            </div>
        </div>
        <?php else : ?>
          <div class="jumbotron">
            <div class="jumbotron text-center">
              <p>Join our community to access vast number of facilities</p>
              <p>And it's totally free</p>
              <!--primary for blue-->
              <a href="patientsignup.php" class="btn btn-primary">Sign Up</a>
              <!--sucess for green-->
              <a href="patientlogin.php" class="btn btn-success">Log in</a>

            </div>
          </div>
        
        <?php endif; ?>

           

      <div class="row">
        <!-- col for coloumn md for medium 4 cloumns-->
        <center>
          <div class="col-md-4">
            <a href="#" class="thumbnail">
              <img src="img/thumb1.jpg">
            </a>
            <h3>E-Channeling Service</h3>
            <p>Experince our online e-channeling service. Get an appointment online.</p>
            <!--danger for red-->
            <center><a href="getAnAppointment.php" class="btn btn-danger">Get an appointment</a></center>
          </div>
        </center>
        
        <center>
          <div class="col-md-4">
            <a href="#" class="thumbnail">
              <img src="img/thumb2.jpg">
            </a>
            <h3>View Lab reports Online</h3>
            <p>Now you can view your lab reports using any device which has an internet access</p>
            <!--danger for red-->
            <a href="viewLabReports.php" class="btn btn-danger">View Lab reports</a>
          </div>
        </center>

        <center>
          <div class="col-md-4">
            <a href="#" class="thumbnail">
              <img src="img/thumb3.jpg">
            </a>
            <h3>About Us</h3>
            <p>We are Medicare health services. If you want to know more about us click on the link below</p>
            <!--danger for red-->
            <a href="aboutUs.php" class="btn btn-danger">More info</a>
          </div>
        </center>


      </div>
    </div>
               
    <?php         
    ?>

    <br>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

      

      $(".carousel").carousel({
          interval: 3000
      })

    </script>
  </body>
</html>