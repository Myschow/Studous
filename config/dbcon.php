<?php 
   
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = 'course_db';
   //creating db connec
   $con = mysqli_connect($host,$username,$password,$database);

   //chech db connec
   if(!$con){
    die("connection failed".mysqli_connect_error());

   }
   else{
    echo "successfully";
   }



?>