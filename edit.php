<?php
include("inc/db.php"); 

$id =$_GET['eid'];

$sel = "SELECT * FROM std WHERE id='$id'";
$rs = $con->query($sel); 
$row=$rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update From</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="upd.php" method="post" enctype="multipart/form-data">

    <label><p><input type="hidden" name="upd_id" value="<?php echo $row['id'];?>"></p></label>
    <p>Name</p>
    <label><p><input type="text" name="name" value="<?php echo $row['name'];?>"></p></label>

    <p>Gender</p>
    <p><Label><input type="radio" name="gender" value="Male" <?php if($row['gender']=='Male'){ echo "checked";}?>>Male</Label></p>
    <p><Label><input type="radio" name="gender" value="Female" <?php if($row['gender']=='Female'){ echo "checked";}?>>Female</Label></p>

    <p>Stream</p>
    <p><label >
        <select name="stream">
            <option value="">Select</option>
            <option value="BCA" <?php if($row['stream']=='BCA'){ echo "selected";}?>>BCA</option>
            <option value="MCA" <?php if($row['stream']=='MCA'){ echo "selected";}?>>MCA</option>
        </select>
    </label></p>
    
    <p>Subject</p>
    <?php

    $sb=explode(",",$row['subject']);
    
    ?>
    <p><label><input type="checkbox" name="sub[]" value="C" <?php if(in_array("C",$sb)){ echo "checked";}?>>C</label></p>
    <p><label><input type="checkbox" name="sub[]" value="php" <?php if(in_array("php",$sb)){ echo "checked";}?>>php</label></p>
    <p><label><input type="checkbox" name="sub[]" value="Laravel" <?php if(in_array("Laravel",$sb)){ echo "checked";}?>>Laravel</label></p>

    <p>Image</p>
    <p><input type="file" name="simg"></p>
    <img src="student_image/<?php echo $row['image'];?>" class="img">

    <p><label><input type="submit" name="save" value="Update"></label></p>
     
    </form>
</body>
</html>