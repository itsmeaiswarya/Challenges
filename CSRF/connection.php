<?php

$conn = mysqli_connect("localhost","users","P4\$\$w0rd123","csrf");

   if($conn->connect_errno >0)
   {
      echo 1;
      die("Unable to connection to database[".$conn->connect_error."]");
   }
   