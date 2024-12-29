<?php

include("inc/db.php");

if(isset($_POST['save'])){
    $n =$_POST['name'];
    $m =$_POST['gender'];
    $p =$_POST['stream'];

    if(isset($_POST['sub'])){
        $sb=implode(",",$_POST['sub']);
    }else{
        $sb="";
    }

    $bff =$_FILES['simg']['tmp_name'];
    $fl =time().$_FILES['simg']['name'];
    move_uploaded_file($bff,"student_image/".$fl);

    $ins ="INSERT INTO std SET name='$n' , gender='$m' , stream='$p' , subject='$sb' ,image='$fl'";
   if($con->query($ins)){
    header("location:sel.php");
   }

}


?>




   
    

