<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "trackit";

$conn = new mysqli($host, $username, $password, $database);
if(!$conn){
    echo "Database connection failed. Error:".$conn->error;
    exit;
}
?>