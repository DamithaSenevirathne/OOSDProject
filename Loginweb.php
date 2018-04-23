<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medical Centre Login Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome link-->
    <link href="css\web-fonts-with-css\css\fontawesome-all.css" rel="stylesheet" >
    <!--to remove blue colour on icons-->
    <link href="css\custom.css" rel="stylesheet">

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
            <li><a href="Home.php">Home</a></li>
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

                
    <?php
    


    if(isset($_POST['add'])) {
        $dbhost = 'localhost:3306';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
    die('Could not connect: ' . mysql_error());
    }
    if(! get_magic_quotes_gpc() ) {
        $emp_id = addslashes ($_POST['emp_id']);
        $emp_name = addslashes ($_POST['emp_name']);
        $emp_address = addslashes ($_POST['emp_address']);
    }else {
        $emp_id = addslashes ($_POST['emp_id']);  
        $emp_name = $_POST['emp_name'];
        $emp_address = $_POST['emp_address'];
    }

    
    $sql = "INSERT INTO patient ". "(emp id,emp_name,emp_address)". "VALUES('$emp_id','$emp_name','$emp_address')";
    mysql_select_db('patient123');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysql_close($conn);
    }else {
    ?>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
    <table width = "400" border = "0" cellspacing = "1"
    cellpadding = "2">

    <tr>
    <td width = "100">Employee NIC</td>
    <td><input name = "emp_id" type = "text"
    id = "emp_id"></td>
    </tr>

    <tr>
    <td width = "100">Employee Name</td>
    <td><input name = "emp_name" type = "text"
    id = "emp_name"></td>
    </tr>
    <tr>
    <td width = "100">Employee Address</td>
    <td><input name = "emp_address" type = "text"
    id = "emp_address"></td>
    </tr>
    <tr>
    <td width = "100"> </td>
    <td> </td>
    </tr>
    <tr>
    <td width = "100"> </td>
    <td>
    <input name = "add" type = "submit" id = "add"
    value = "Add Employee">
    </td>
    </tr>
    </table>
    </form>
    <?php
    }
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
