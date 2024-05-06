<?php
ob_start();
session_start();
include('.././connection/connection.php');
$user_id = $_SESSION['account_id'];
$first_name = $_SESSION['first_name'];
$ln = $_SESSION['last_name'];
$_SESSION['username'];
if(empty($_SESSION['account_id'])){
    echo "<script>window.location.href='login.php'</script>";   
}
$q_user = "SELECT image FROM users WHERE account_id = $user_id";
$q_run = mysqli_query($conn, $q_user);
if(mysqli_num_rows($q_run) > 0){
    foreach($q_run as $rows){
        $image = $rows['image'];
    }
}
?>


        

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FEU</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../src/vendors/feather/feather.css">
  <link rel="stylesheet" href="../src/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../src/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../src/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../src/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../src/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../src/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../src/images/favicon.png" />
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" /> -->
  <link rel="stylesheet" href="../src/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../src/css/custom/swal-centered.css">
</head>
<style>
    a.nav-link.active{
        background: #57B657 !important;
        color: white !important;
    }
</style>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5 text-success" style="font-weight: 900;" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2"  alt="logo"/>FEU</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                
            <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <?php 
                        if($image == '' || $image == null){
                            ?>
                            <img src="../src/img/default.png" alt="profile">
                            <?php
                        }else{
                            ?>
                            <img src="images/<?= $image; ?>" alt="profile"/>
                            <?php
                        }
                    
                    ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="my-profile.php">
                    <i class="ti-settings text-primary"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="logout.php">
                    <i class="ti-power-off text-primary"></i>
                    Logout  
                </a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel w-100">
            <div class="content-wrapper">
                
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb" style="border: none;">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <?php

                                        $query_users = "SELECT * FROM users WHERE account_id = '".$_SESSION['account_id']."'";
                                        $run_users = mysqli_query($conn,$query_users);

                                        if(mysqli_num_rows($run_users) > 0){
                                            foreach($run_users as $row_users){
                                    ?>
                                    <!-- Content Tabs -->
                                    <div class="col-md-12">
                                        <div class="row flex-row">
                                            <div class="col-lg-2 col-md-4 col-sm-12 pr-3">
                                                <ul class="nav nav-tabs d-flex flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#content1">Account Settings</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#content2">Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-sm-12">
                                                <div  class="tab-content bg-white vh-75">
                                                    <div class="tab-pane fade show active wd-75 px-4" id="content1">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            <h3 class="h2" style="font-weight: 800;">
                                                                Account Settings
                                                            </h3>
                                                            <div class="row align-items-center mb-5">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="d-flex flex-column mb-4">
                                                                        <img src="<?php 
                                                                            if($row_users['image'] == '' || $row_users['image'] == null){
                                                                                    echo '../src/img/default.png';
                                                                                }else{ 
                                                                                    echo "images/". $row_users['image']; 
                                                                                }
                                                                                ?>  " alt="user image" style="height: 150px; width: 150px; border-radius:0;">
                                                                        <input type="hidden" name="user_old_image" value="<?php echo $row_users['image'] ?>">
                                                                        <input type="file" class="form-file" name="user_new_image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <label for="">Username:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="username" value="<?php echo $row_users['username']; ?>">
                                                                </div>
                                                            </div>
                                                            <h3 class="h3" style="font-weight: 800;">
                                                                Personal Details
                                                            </h3>
                                                            <div class="row mb-5">
                                                                <div class="col-lg-4">
                                                                    <label for="">First Name:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="first_name" value="<?php echo $row_users['first_name']; ?>">
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="">Middle Name:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="middle_name" value="<?php echo $row_users['middle_name']; ?>">
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="">Last Name:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="last_name" value="<?php echo $row_users['last_name']; ?>">
                                                                </div>
                                                            </div>
                                                            <h3 class="h3" style="font-weight: 800;">
                                                                Address
                                                            </h3>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12 mb-4">
                                                                    <label for="">House Number:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="house_number" value="<?php echo $row_users['house_number']; ?>">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 mb-4">
                                                                    <label for="">Street:</label>
                                                                    <input type="text"  class="form-control form-control-sm" name="street" value="<?php echo $row_users['street']; ?>">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 mb-4">
                                                                    <label for="">Subdivision:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="subdivision" value="<?php echo $row_users['subdivision']; ?>">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 mb-4">
                                                                    <label for="">Barangay:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="brgy" value="<?php echo $row_users['brgy']; ?>">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 mb-4">
                                                                    <label for="">City:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="city" value="<?php echo $row_users['city']; ?>">
                                                                </div>
                                                                <div class="col-lg-3 col-md-12 mb-4">
                                                                    <label for="">Region:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="region" value="<?php echo $row_users['region']; ?>">
                                                                </div>
                                                                <div class="col-lg-3 col-md-12 mb-4">
                                                                    <label for="">Zip Code:</label>
                                                                    <input type="text" class="form-control form-control-sm" name="zipcode" value="<?php echo $row_users['zipcode']; ?>" >
                                                                </div>
                                                            </div>
                                                            <input type="submit" class="btn btn-md btn-inverse-info" name="update_user" value="Update">
                                                        </form>
                                                    </div>
                                                    
                                                    <div class="tab-pane fade  wd-75 px-4" id="content2">
                                                        <form action="" method="POST">
                                                            <h3 class="h2" style="font-weight: 800;">
                                                                Password & Security
                                                            </h3>
                                                            <div class="row mb-4">
                                                                <div class="col-lg-5">
                                                                    <label for="">Current Password:</label>
                                                                    <input type="password" class="form-control form-control-sm" name="password">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-lg-5">
                                                                    <label for="">New Password:</label>
                                                                    <input type="password" class="form-control form-control-sm" name="npassword">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-lg-5">
                                                                    <label for="">Confirm Password:</label>
                                                                    <input type="password" class="form-control form-control-sm" name="cpassword">
                                                                </div>
                                                            </div>
                                                            <input type="submit" class="btn btn-md btn-inverse-success" name="update_pw" value="Change Password">

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content tabs -->
                                </div>
                            </div>
                                        <?php
                                    }
                                }

                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>

<!-- plugins:js -->
<script src="../src/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../src/vendors/chart.js/Chart.min.js"></script>
<script src="../src/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../src/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="../src/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../src/js/off-canvas.js"></script>
<script src="../src/js/hoverable-collapse.js"></script>
<script src="../src/js/template.js"></script>
<script src="../src/js/settings.js"></script>
<script src="../src/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../src/js/dashboard.js"></script>
<script src="../src/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<!-- <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script> -->
<script src="../src/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="../src/js/custom/dataTable-init.js"></script>
<script src="../src/vendors/sweetalert/sweetalert.min.js"></script>
<script src="../src/js/custom/swal-delete.js"></script>





</body>
</html>

<?php

if(isset($_POST['update_user'])){

    $username = $_POST['username'];

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

    
    $update_user = "UPDATE users SET username = '$username', first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name', house_number = '$house_number', street = '$street' , subdivision = '$subdivision', brgy = '$brgy', city = '$city', region = '$region', zipcode = '$zipcode' , image = '$update_file_name_user' WHERE account_id = '".$_SESSION['account_id']."'";
    $query_update = mysqli_query($conn,$update_user);

    if($query_update){
        if($_FILES['user_new_image']['name'] !=''){
            move_uploaded_file($_FILES['user_new_image']['tmp_name'], "images/".$_FILES['user_new_image']['name']);
            unlink("images/".$user_old_image);
            // echo "updated data and image";
            echo '<script type="text/javascript">
  
            $(document).ready(function(){
                swal({
                    title: "Updated!",
                    text: "Redirecting to dashboard...",
                    timer: 2000
                  });
            }).then(window.location.href = "home.php");
              
            </script>
            ';
        }else{
            echo '<script type="text/javascript">
  
            $(document).ready(function(){
                swal("Error!", "Something went wrong.", "error");
            });
              
            </script>
            ';
        }
    }else{
        echo '<script type="text/javascript">
  
        $(document).ready(function(){
            swal("Error!", "Something went wrong.", "error")
        });
          
        </script>
        ';
    }
    


}

if(isset($_POST['update_pw'])){
    $vquery = "SELECT * FROM users WHERE username = '$username'";
    $vrun = mysqli_query($conn,$vquery);

    if(mysqli_num_rows($vrun) > 0){
        foreach($vrun as $row){
            if(password_verify($password,$row['password'])){
                
            }else{

            }
        }
    }else{
        echo '<script type="text/javascript">

        $(document).ready(function(){
            swal("Error!", "Something went wrong.", "error")
        });
        
        </script>
        ';
    }
}
ob_end_flush();


?>