<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "chat";
  $query = mysqli_connect($host, $user, $pass, $db);


  if($query){
    echo "yes";
  } else {
    die("gagal");
  }
 ?>
