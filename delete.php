<?php
include "config.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `user` WHERE id = $id";
    $resuly= mysqli_query($conn, $sql);

    if($resuly){
        //echo "deleted succesfully";
        
        header('location:view.php');
    } 
    else{
        die(mysqli_error($conn));
    }
}

?>
