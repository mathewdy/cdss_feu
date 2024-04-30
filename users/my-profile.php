<?php
include('../connection/connection.php');
session_start();
ob_start();
$_SESSION['account_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>My Profile</h1>
    <a href="home.php">Back</a>
    

    <?php


    $query_users = "SELECT * FROM users WHERE account_id = '".$_SESSION['account_id']."'";
    $run_users = mysqli_query($conn,$query_users);

    if(mysqli_num_rows($run_users) > 0){
        foreach($run_users as $row_users){
            ?>

                <form action="" method="POST" enctype="multipart/form-data">

                <h2>Login Credentials</h2>

                <label for="">Username:</label>
                <input type="text" name="username" value="<?php echo $row_users['username']; ?>">
                <label for="">Password:</label>
                <input type="password" name="password">


                <h2>Basic info</h2>

                <label for="">First Name:</label>
                <input type="text" name="first_name" value="<?php echo $row_users['first_name']; ?>">
                <label for="">Middle Name:</label>
                <input type="text" name="middle_name" value="<?php echo $row_users['middle_name']; ?>">
                <label for="">Last Name:</label>
                <input type="text" name="last_name" value="<?php echo $row_users['last_name']; ?>">

                <img src="<?php echo "images/". $row_users['image']?>" alt="user image" style="height: 150px; width: 150px; border-radius:0;">
                <input type="hidden" name="user_old_image" value="<?php echo $row_users['image'] ?>">
                <input type="file" name="user_new_image">

                <label for="">House Number:</label>
                <input type="text" name="house_number" value="<?php echo $row_users['house_number']; ?>">
                
                <label for="">Street:</label>
                <input type="text" name="street" value="<?php echo $row_users['street']; ?>">

                <label for="">Subdivision:</label>
                <input type="text" name="subdivision" value="<?php echo $row_users['subdivision']; ?>">

                <label for="">Barangay:</label>
                <input type="text" name="brgy" value="<?php echo $row_users['brgy']; ?>">

                <label for="">City:</label>
                <input type="text" name="city" value="<?php echo $row_users['city']; ?>">

                <label for="">Region:</label>
                <input type="text" name="region" value="<?php echo $row_users['region']; ?>">

                <label for="">Zip Code:</label>
                <input type="text" name="zipcode" value="<?php echo $row_users['zipcode']; ?>" >

                <input type="submit" name="update_user" value="Update">
                </form>


            <?php
        }
    }

    ?>







</body>
</html>

<?php

if(isset($_POST['update_user'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password,PASSWORD_DEFAULT);

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];

    $house_number = $_POST['house_number'];
    $street = $_POST['street'];
    $subdivision = $_POST['subdivision'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $zipcode = $_POST['zipcode'];


    $user_new_image = $_FILES['user_new_image']['name'];
    $user_old_image = $_POST['user_old_image'];

    if($user_new_image != ''){
        $update_file_name_user = $_FILES['user_new_image']['name'];
    }else{
        $update_file_name_user = $user_old_image;
    }

    
    $update_user = "UPDATE users SET username = '$username', password = '$new_password', first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name', house_number = '$house_number', street = '$street' , subdivision = '$subdivision', brgy = '$brgy', city = '$city', region = '$region', zipcode = '$zipcode' , image = '$update_file_name_user' WHERE account_id = '".$_SESSION['account_id']."'";
    $query_update = mysqli_query($conn,$update_user);

    if($query_update){
        if($_FILES['user_new_image']['name'] !=''){
            move_uploaded_file($_FILES['user_new_image']['tmp_name'], "images/".$_FILES['user_new_image']['name']);
            unlink("images/".$user_old_image);
            // echo "updated data and image";
            echo "updated";
            header("location: my-profile.php");
        }else{
            echo "Error updating image";
        }
    }else{
        echo "Error updating data";
    }
    


}


ob_end_flush();


?>