<?php 
// parameters for Database connection
$username = 'nwaachi';
$hostname = 'localhost';
$password = '135790';
$database = 'scoups_db';

// Database connection
$connection = mysqli_connect($hostname,$username,$password,$database);

// check if there is a connection error
if(!$connection){
    echo "could not connect". mysqli_connect_error();
}

?>