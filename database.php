<?php
$servername = "localhost";
$username = "root";
$password ="";
$databasename = "php_test";

$conn = new mysqli($servername, $username, $password, $databasename);
if($conn->connect_error){
    die("Didn't connect".$conn->connect_error);
}else{
    echo("connected sucessfully");
}



