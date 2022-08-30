<?php

$db_host = "localhost";
$db_name = "francom1";
$db_user = "francom1";
$db_pass = "1Badproblem!";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

// echo "Connected successfully!";
