<?php

// connet to the database

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'mmstores_db';


// Establish a connection
$conn = new mysqli($host, $user, $password, $database);

// check for error after connection

if ($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}


?>