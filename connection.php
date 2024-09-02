<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "penilaian";

    // make conncection
    $conn = mysqli_connect($serverName, $userName, $password, $database);

    // //check connection
    // if (!$conn) {
    //     die("Connection Failed".mysqli_connect_error());
    // }

    // else {
    //     echo "Connection Success";
    // }

?>