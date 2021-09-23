<?php

$servername = 'sql110.epizy.com';
$username = 'epiz_29146646';
$password='DLHlKYE3RkQXA';
$database ='epiz_29146646_yt';

// Connecting to the database
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>
