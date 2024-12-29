<?php
session_start();
include("inc/db.php");

if(!isset($_SESSION['un'])){
   
   header("location:login.php");

}


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <a href="index.php" class="btn btn-success">Add Student</a>
      
        <a href="logout.php" class="btn btn-danger">Logout</a>

        <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Stream</th>
                    <th>Subject</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                
                $sel = "SELECT * FROM std";
                $rs = $con->query($sel); 
                while($row=$rs->fetch_assoc()){

                ?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['stream'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td><img src="student_image/<?php echo $row['image'];?>" class="img"></td>
                    <td><a href="del.php?did=<?php  echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="edit.php?eid=<?php  echo $row['id'];?>" class="btn btn-primary">Update</a></td>
                   
                </tr>




                    <?php } ?>
        </table>
        






        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
