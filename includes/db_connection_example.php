<?php
  define("dbhost" , "127.0.0.1");
  define("dbuser" , "DB_USERNAME");
  define("dbpass" , "DB_PASSWORD");
  define("dbname" , "DATABASE_NAME");
  $connection = mysqli_connect(dbhost , dbuser , dbpass , dbname);
  if(mysqli_connect_errno()){
    die("Database connection failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
  }
?>
