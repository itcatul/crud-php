<?php
$servername = "localhost";
$user ='root';
$pass='';
$dbname ="demo";
 
 $conn = new mysqli($servername , $user ,$pass,$dbname);
 if($conn->connect_error){
     die("connection failed". $conn->connect_error );
 }
 ?>