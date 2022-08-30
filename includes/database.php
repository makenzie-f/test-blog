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
<?php

/**
* Get the database connection
*
* @return object Connection to a MySQL server
*/

function getDB(){

  $db_host = "localhost";
  $db_name = "francom1";
  $db_user = "francom1";
  $db_pass = "1Badproblem!";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()){
      echo mysqli_connect_error();
      exit;
  }

  return $conn;

  // echo "Connected successfully!";
}
