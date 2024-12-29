<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation From</title>
</head>
<body>
    <form action="ins.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <label><p><input type="text" name="name"></p></label>

    <p>Gender</p>
    <p><Label><input type="radio" name="gender" value="Male">Male</Label></p>
    <p><Label><input type="radio" name="gender" value="Female">Female</Label></p>

    <p>Stream</p>
    <p><label >
        <select name="stream">
            <option value="">Select</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
        </select>
    </label></p>               
    
    <p>Subject</p>
    <p><label><input type="checkbox" name="sub[]" value="C">C</label></p>
    <p><label><input type="checkbox" name="sub[]" value="php">php</label></p>
    <p><label><input type="checkbox" name="sub[]" value="Laravel">Laravel</label></p>

    <p>Image</p>
    <p><input type="file" name="simg"></p>

    <p><label><input type="submit" name="save" value="Register"></label></p>
     
    </form>
</body>
</html>