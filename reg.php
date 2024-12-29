<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistation</title>
</head>
<body>
<form action="" method="post" >

    <p>Name</p>
    <label><p><input type="text" name="name"></p></label>

    <p>Email</p>
    <label><p><input type="mail" name="mail"></p></label>

    <p>PAssword</p>
    <label><p><input type="password" name="password"></p></label>

   

    <p><label><input type="submit" name="save" value="Register"></label></p>
     
    </form>
</body>
</html>

<?php

include("inc/db.php");

if(isset($_POST['save'])){
    $n =$_POST['name'];
    $m =$_POST['mail'];
    $p =$_POST['password'];


    $ins ="INSERT INTO login SET name='$n' , email='$m' , password='$p' ";
    $con->query($ins);
    

}


?>




   
    

