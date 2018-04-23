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

      <div class="background">
        <img src = "img/background.jpg">
      </div>


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
              <li><a href="Home.php">Home</a></li>
              <li><a href="#">Our Doctors</a></li>
              <li><a href="#">About</a></li>
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
            <li><a href="#">Contact US </a></li>
            
            
            <?php if(isset($_SESSION['ID'])) : ?>

              <a href="patientlogout.php" class="btn btn-primary">Log Out</a>
              <a href="patientaccount.php" class="btn btn-danger">View my account</a>
              
            <?php else : ?>

              <li><a href="patientlogin.php" class="btn btn-primary">Log in</a></li>
              <li><a href="patientsignup.php" class="btn btn-primary">Sign Up</a></li>
              
              </div>
        
            <?php endif; ?>


            </ul>         
          </div>
        </div>
      </div>


    <br><br><br><br>
      
      
    <div class="container">
      
        <div class="row">
            <!-- col for coloumn md for medium 4 cloumns-->
            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>
            
            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>


            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>

            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>

            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>

            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>
            
            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>

            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
                </center>
            </div>
            
            <div class="col-md-2">
                <a href="#" class="thumbnail">
                <img src="img/thumb2.jpg">
                </a>
                <center>
                    <h3>Dr.Kuranarathne</h3>
                    <h5>(MBBS)</h5>
                    <h6>SLMC-21564</h6>
                    <h4>Cardioligist</h4>
                    <p>Week days - 4 p.m to 9 p.m </p>
                    <p>Week-End days - 8 a.m to 3 p.m </p>

                    <!--danger for red-->
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