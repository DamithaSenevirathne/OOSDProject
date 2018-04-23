<?php
    session_start();

?>

<html>
<body>


<form action = "login.php" method="POST">
    <input type = "text" name='uid' placeholder='User Name'></br>
    <input type = "password" name='pwd' placeholder='Password'></br>
    <button type='submit'>LOG IN</button>
</form>

    <?php
    
        if(isset($_SESSION['ID'])){
            echo $_SESSION['ID'];
        }else{
            echo "you are not logged in";
        }
    
    ?>

<br><br><br>

<form action = "signup.php" method="POST">
    <input type = "text" name='first' placeholder='First Name'></br>
    <input type = "text" name='last' placeholder='Last Name'></br>
    <input type = "text" name='uid' placeholder='User Name'></br>
    <input type = "password" name='pwd' placeholder='Password'></br>
    <button type='submit'>SIGN UP</button>
</form>

<br><br><br>

<form action ="logout.php">
    <button>LOG OUT</button>
</form>

<br><br>

<form action ="Home.php">
    <button>Home</button>
</form>

</body>
</html>
