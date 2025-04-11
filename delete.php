<?php
include 'connection1.php';
$id=$_GET['deleteid'];
$sql= "delete from  `table` where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header("location:read.php");

     //echo " data deleated sussessfully form data base";
}else{
    die(mysqli_error($con));
}

?>