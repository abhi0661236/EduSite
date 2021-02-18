<?php
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $dbname = "edusite_db";

    $conn = mysqli_connect($server, $user, $pwd, $dbname) or die("connection failed".mysqli_connect_error());

    echo "connected successfully";
?>