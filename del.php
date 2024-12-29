<?php
include("inc/db.php"); 

$id =$_GET['did'];

$sel = "SELECT * FROM std WHERE id='$id'";
$rs = $con->query($sel); 
$row=$rs->fetch_assoc();

unlink("student_image/".$row['simg']);

$del="DELETE FROM std WHERE id='$id' ";
if($con->query($del)){
    header("location:sel.php");
}




?>