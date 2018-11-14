<?php
    $server = "localhost";
    $user = "root";
    $pass = "cloudservice02";
    $database = "4EJE6";

    $enlace = new mysqli($server, $user, $pass, $database);
    if($enlace->connect_errno) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>
