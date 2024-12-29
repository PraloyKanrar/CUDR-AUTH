<?php
session_start();
include("inc/db.php");

if(isset($_POST['save'])){
   
    $m =$_POST['mail'];
    $p =$_POST['password'];

    $sel="SELECT * FROM login WHERE  email='$m' AND password='$p'";
    $rs= $con->query($sel);
    if($rs->num_rows>0){
        $row= $rs->fetch_assoc();
        $_SESSION['un']=$row['name'];
        header("location:sel.php");
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="" method="post" >

    

    <p>Email</p>
    <label><p><input type="mail" name="mail"></p></label>

    <p>PAssword</p>
    <label><p><input type="password" name="password"></p></label>

   

    <p><label><input type="submit" name="save" value="Register"></label></p>
     
    </form>
</body>
</html>

