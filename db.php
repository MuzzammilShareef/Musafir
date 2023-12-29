<?php

 echo "hello";

// servername => localhost

// username => root1

// password => root

// database name => staff

$conn = mysqli_connect("localhost", "Musafir", "musafir", "musafir");

 

// Check connection

if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

?>