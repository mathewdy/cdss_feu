<?php
ob_start();
include('../connection/connection.php');

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
                        <h1 class="text-center">Create Account</h1>
                        <form action="registration.php" method="post"  enctype="multipart/form-data">

                        <label for="">First Name:</label>
                        <input type="text" name="first_name" placeholder="First Name">
                        <br>

                        <label for="">Middle Name:</label>
                        <input type="text" name="middle_name" placeholder="Middle Name">
                        <br>

                        <label for="">Last Name:</label>
                        <input type="text" name="last_name" placeholder="Last Name">
                        <br>

                        <label for="">Role:</label>

                        <select name="role" id="">
                            <option value="">-Select-</option>
                            <option value="1">Doctor</option>
                            <option value="2">Nurse</option>
                        </select>

                        <br>


                        <label for="">Date of birth:</label>
                        <input type="date" name="date_of_birth" id="">

                        <br>

                        <label for="">House Number:</label>
                        <input type="text" name="house_number">

                        <br>

                        <label for="">Street:</label>
                        <input type="text" name="street">

                        <br>

                        <label for="">Subdivision:</label>
                        <input type="text" name="subdivision">

                        <br>

                        <label for="">Barangay:</label>
                        <input type="text" name="brgy">

                        <br>

                        <label for="">City:</label>
                        <input type="text" name="city">

                        <br>

                        <label for="">Region:</label>
                        <input type="text" name="region">

                        <br>

                        <label for="">Zip Code:</label>
                        <input type="text" name="zip_code">

                        <br>

                        <label for="">Image:</label>
                        <input type="file" name="user_image" id="">

                        <br>

                        <label for="">Username:</label>
                        <input type="text" name="username">

                        <br>

                        <label for="">Password:</label>
                        <input type="password" name="password">


                        <br>
                        <input type="submit" value="Sign Up" name="create_account">
                        <a href="login.php">Sign in</a>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
</html>


<?php

if(isset($_POST['create_account'])){

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $role = $_POST['role'];
    $date_of_birth = date('Y-m-d',strtotime($_POST['date_of_birth']));
    $house_number = $_POST['house_number'];
    $street = $_POST['street'];
    $subdivision = $_POST['subdivision'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $zip_code = $_POST['zip_code'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password,PASSWORD_DEFAULT);


    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');
    
    $user_image = $_FILES['user_image']['name'];
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['user_image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

    $account_id = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    

    $query_check_user = "SELECT * FROM users WHERE username='$username' AND first_name = '$first_name' AND last_name = '$last_name' AND date_of_birth = '$date_of_birth' ";
    $run_check_user = mysqli_query($conn,$query_check_user);
    
    if(mysqli_num_rows($run_check_user) > 0){
        echo "<script>alert('User Already Added')</script>";
        exit();
    }else{
        $query_register = "INSERT INTO users (account_id,username,password,first_name,middle_name,last_name,role,date_of_birth,house_number,street,subdivision,brgy,city,region,zipcode,image,date_created,date_updated) VALUES ('$account_id', '$username','$new_password','$first_name','$middle_name','$last_name','$role','$date_of_birth','$house_number','$street','$subdivision','$brgy','$city','$region','$zip_code','$user_image','$date','$date')";
        $run_sql = mysqli_query($conn,$query_register);
        //subject change
        echo "user_added" ; 


        if($run_sql){
            move_uploaded_file($_FILES["user_image"]["tmp_name"], "images/".$_FILES["user_image"]["name"]);
            echo "<script>window.location.href='login.php'</script>";
        }else{
            echo "error" . $conn->error;
        }
    }
}




ob_end_flush();
?>