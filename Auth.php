<?php
session_start();
include'database.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // prepare and bind
    $stmt = $conn->prepare("SELECT  Id,  FirstName, LastName FROM works WHERE Email = ? ");
    $stmt -> bind_param("s", $username);
    $stmt -> execute();
    $stmt -> store_result();

    if($stmt->rows>0){}

}