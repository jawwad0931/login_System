<?php
    // error_reporting(0);
    session_start();
    if(isset($_POST['submit'])){
        include 'connection.php';
        $name = $_POST['name'];
        $password = $_POST['password'];

        $slt = "SELECT * FROM `signup` WHERE Name = '$name'";
        $res = mysqli_query($conn,$slt); 
        $total = mysqli_num_rows($res);
        // echo $total;
        if($total == 1){
            $_SESSION['user_name'] = $name;
            header("location:dashboard.php");
        }else{
            echo "Nahi hua";
        }

        mysqli_close($conn);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex justify-content-center mt-5">
        <form class="border w-50 mt-5 p-3" method="POST">
            <h2 class="text-center">Login</h2>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User Name</label>
            <input type="name" class="form-control" id="" placeholder="type name" name="name">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="" placeholder="type password" name="password">
            </div>
            <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="submit" value="Login">
            </div>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>