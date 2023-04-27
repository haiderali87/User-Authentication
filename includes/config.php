<?php
$servar_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "user-authentication";

$connection = new mysqli($servar_name,$user_name,$password,$db_name);
if($connection->connect_error){
    die("connection failed" . $connection->connect_error);
}else{
    // echo "connection successfully";
}
// $connection->close();   
?>