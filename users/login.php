<?php
ob_start();
session_start();
include('../connection/connection.php');
//sample
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand m-auto" href="#">
            <img src="../src/img/FEU_Tamaraws_official_logo.png" alt="Feu_Tamaraw" height="50">
            </a>
        </div>
    </nav>
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 col-sm-12">
                    <div class="card p-4">
                        <h1 class="text-center">Log In</h1>
                        <form action="" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-lg-9 my-4">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                                        <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-center mb-5">
                                    <input type="submit" class="btn btn-outline-warning w-100 rounded-pill" name="login" value="Log In">
                                    <a href="registration.php">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>



<?php

if(isset($_POST['login'])){


    $username = $_POST['username'];
    $password = $_POST['password'];


    $query_login = "SELECT * FROM users WHERE username = '$username'";
    $run_login = mysqli_query($conn,$query_login);

    if(mysqli_num_rows($run_login) > 0){
        foreach($run_login as $row){
            if(password_verify($password,$row['password'])){
                $_SESSION['username'] = $username;
                $_SESSION['account_id'] = $row['account_id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                header("location: home.php");
            }
        }
    }else{
        echo "User not found" . $conn->error;
    }

}

ob_end_flush();
?>
