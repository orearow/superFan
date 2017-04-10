<html>
<body>
 
 
<?php

            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "user";                 //same here
            $password = "password";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
                echo "Connected<br>";
            }
            
            
 
 $username = $_POST['username'];
 $password = $_POST['password'];

$sql = "SELECT username, password"
        . "FROM login WHERE username = '$username' AND password='$password'";
 
 
            echo "<br><br> checking db: ";
            if($conn->query($sql)==TRUE){       //try executing the query 
                echo "Query executed<br>";
            }
            else{
                echo "Query did not execute<br>";
            }
 
            $conn-> close();            //close the connection to database

?>
</body>
</html>