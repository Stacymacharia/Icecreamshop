<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ice cream shop";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection ->connect_error){
    die("connection failed " ."$connection ->connect.error");

}
echo "connected succesfully";



?>