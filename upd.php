<?php

include("inc/db.php");

if(isset($_POST['save'])){
    $n =$_POST['name'];
    $m =$_POST['gender'];
    $p =$_POST['stream'];

    $upd_id =$_POST['upd_id'];


    if(isset($_POST['sub'])){
        $sb=implode(",",$_POST['sub']);
    }else{
        $sb="";
    }

    if($_FILES['simg']['name']!=""){
    $bff =$_FILES['simg']['tmp_name'];
    $fl =time().$_FILES['simg']['name'];
    move_uploaded_file($bff,"student_image/".$fl);

    $sel = "SELECT * FROM std WHERE id='$id'";
    $rs = $con->query($sel); 
    $row=$rs->fetch_assoc();

    $upd ="UPDATE std SET name='$n' , gender='$m' , stream='$p' , subject='$sb' ,image='$fl' WHERE id='$upd_id'";
    }else{
        $upd ="UPDATE std SET name='$n' , gender='$m' , stream='$p' , subject='$sb'  WHERE id='$upd_id'";
    }
   if($con->query($upd)){
    header("location:sel.php");
   }

}


?>




   
    

