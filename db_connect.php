<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "admindashboard";

$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli -> connect_error){
    die("Connection Failed");
}

?>