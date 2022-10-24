<?php
include "connect.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
   
    $sql = "INSERT INTO `crud`(`id`,`first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }

    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width-device-width, initial-scale=1.0">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />

     <title> PHP CRUD </title>
</head>
<body>
     <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background: linear-gradient(to right, #b300b3, #1db2db);">
        PHP Complete CRUD Application
     </nav>

     <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted"> Complete The Form Below To Add A New User </p>
     </div>

     <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">

         <div class="row mb-3">
        <div class="col">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" placeholder="Enter Your Name Here">
    </div>
    </div>

    <div class="mb-3">
    <div class="col">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name Here">
</div>
</div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="name@example.com">
    </div>

    <div class="form-group mb-3">
         <label> Gender: </label> &nbsp;
         <input type="radio" class="form-check-input" name="gender" id="female" value="female">
         <label for="female" class="form-input-label"> Female </label>
         &nbsp;
         <input type="radio" class="form-check-input" name="gender" id="male" value="male">
         <label for="male" class="form-input-label"> Male </label>
   </div>
   
    <div>
        <button type="submit" class="btn btn-success" name="submit">Save</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
</form>
</div>
</body>
</html>
