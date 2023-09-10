<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .content{
        background-image:url('pic.jpg');
        background-size:cover;
    }
</style>
<body>
    <div class="container-fluid">
        <!-- As a heading -->
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <?php  
                    session_start();
                    echo  $_SESSION['user_name'];
                ?>
            </span>
            <span>
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </span>
        </div>
        </nav>
    </div>
    <div class="container-fluid content">
        <div class="row" style="height:650px;">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
            <?php 
                    echo '<h1 class="text-light">Welcome Here Mr ' . $_SESSION['user_name'] . '</h1>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>