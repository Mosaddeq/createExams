<?php
$servername ="localhost";
$username 	="root";
$password 	="";
$dbname 	="quiz";
$conn = mysqli_connect($servername, $username, $password, $dbname);

 

if(!$conn){
    //echo "asd";
    die("Connection Error!".mysqli_connect_error());
}
    

?>