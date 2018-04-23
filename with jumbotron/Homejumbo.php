<!DOCTYPE html>
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
          <a class="navbar-brand" href="#">Channel Centre</a>
        </div>
        <div class = "navbar-collapse collapse">
          <ul class = "nav navbar-nav navbar-right">
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
          <li><a href="#">Contact US</a></li>
          </ul>         
        </div>
      </div>
    </div> 

    <div class = "navbar navbar-default navbar-fixed-bottom" role="navigation">
      <div class = "container">
        <div class="navbar-text pull-left">
          <p>Damitha Senevirathne @2018</p>
        </div>
        <div class="navbar-text pull-right">
          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
        </div>
      </div>   
    </div>

    <div class="container">
      
      <div class="jumbotron text-center">
        <h1>Medical Centre</h1>
        <p>User friendly medical centre web based application</p>
        <!--primary for blue-->
        <a href="Loginweb.php" class="btn btn-primary">Sign Up</a>
        <!--sucess for green-->
        <a href="#" class="btn btn-success">Log in</a>

      </div>
      <div class="row">
        <!-- col for coloumn md for medium 4 cloumns-->
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img src="img/thumb1.jpg">
          </a>
          <h3>E-Channeling Service</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>
          <!--danger for red-->
          <a href="#" class="btn btn-danger">View</a>
        </div>
        
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img src="img/thumb2.jpg">
          </a>
          <h3>View Lab reports Online</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>
          <!--danger for red-->
          <a href="#" class="btn btn-danger">View</a>
        </div>


        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img src="img/thumb3.jpg">
          </a>
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
            eu pede mollis pretium. Integer tincidunt.</p>
          <!--danger for red-->
          <a href="#" class="btn btn-danger">View</a>
        </div>


      </div>
    </div>
               
    <?php         
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>