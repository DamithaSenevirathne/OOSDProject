<html>
<head>
</head>
<body>
    <?php
        $dbhost = 'localhost:3306';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);


        if(! $conn ) {
            die('Could not connect: ' . mysql_error());
            }
        
        echo "Connected successfully\n";

        

        $sql = 'CREATE TABLE patient( '.
        'emp_id VARCHAR(20) NOT NULL , '.
        'emp_name VARCHAR(20) NOT NULL, '.
        'emp_address VARCHAR(20) NOT NULL, '.
        'primary key ( emp_id ))';

        mysql_select_db('patient123');
        $retval = mysql_query($sql,$conn);
        
        if(!$retval){
            die('Could not create table:'.mysql_error());
        }

        echo "success";

        mysql_close($conn)

    ?>

</body>
</html>

