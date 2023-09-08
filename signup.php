<?php
    if(isset($_POST['submit'])){
        include 'connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];

        if (empty($name) || empty($email) || empty($password) || empty($contact)) {
            echo "<script>alert('Please fill in all required fields')</script>";
        } else {
            $inst = "INSERT INTO `signup`(`Id`, `Name`, `Email`, `Password`, `Contact`) VALUES (null,'$name','$email','$password','$contact')";
            $query = mysqli_query($conn,$inst);
    
            if($query){
                echo "<script>alert('hogaya')</script>";
                header("location:login.php");
            } else {
                echo "Nahi hua: " . mysqli_error($conn);
            }
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
            <h2 class="text-center">SignUp</h2>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="" placeholder="type name" name="name">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="" placeholder="type email" name="email">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="" placeholder="type password" name="password">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact</label>
            <input type="number" class="form-control" id="" placeholder="type contact" name="contact">
            </div>
            <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="submit" value="SignUp">
            </div>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>