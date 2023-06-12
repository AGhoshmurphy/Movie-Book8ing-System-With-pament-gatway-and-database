<?php
    $host = "localhost:3307";
    $user = "root";                     
    $pass = "";                                  
    $db = "movietheatredb";
    $port = 3307;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
?>