<?php
ob_start();
include('../connection/connection.php');

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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../src/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="../src/css/custom/swal-centered.css">

    <!-- endinject -->
    <link rel="shortcut icon" href="../src/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
  <nav class="navbar bg-success">
        <div class="container">
            <a class="navbar-brand m-auto" href="login.php">
            <img src="../src/img/FEU_Tamaraws_official_logo.png" alt="Feu_Tamaraw" height="50">
            </a>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper full-page-wrapper mt-n3">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="col-md-12 vh-50">
                    <p class="h2 text-center">Sign Up</p>
                    <hr class="featurette-divider">
                    <form id="stepperForm" method="post" action="" enctype="multipart/form-data">
                        <div id="step1" class="step">
                            <!-- <h2>Step 1: Details</h2> -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="middle_name" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="">Role:</label>
                                <select name="role" class="form-control form-control-sm" id="">
                                    <option value="">-Select-</option>
                                    <option value="1">Doctor</option>
                                    <option value="2">Nurse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Date of birth:</label>
                                <input type="date" name="date_of_birth" class="form-control form-control-sm" id="dateInput">
                            </div>
                            <span class="d-flex justify-content-end">
                                <button type="button" class="btn btn-md btn-success next">Next</button>
                            </span>
                        </div>

                        <!-- Repeat the above div structure for each step -->

                        <!-- Step 2 -->
                        <div id="step2" class="step" style="display: none;">
                        <!-- <h2>Step 2: Address</h2> -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="house_number" placeholder="House Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="street" placeholder="Street">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="subdivision" placeholder="Subdivision">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="brgy" placeholder="Barangay">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="region" placeholder="Region">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="zip_code" placeholder="Zip Code">
                            </div>
                            <span class="d-flex justify-content-between">
                                <button type="button" class="btn btn-md btn-secondary prev">Previous</button>
                                <button type="button" class="btn btn-md btn-success next">Next</button>
                            </span>
                       
                        </div>

                        <div id="step3" class="step" style="display: none;">
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="user_image">
                                </div>
                            </div>
                            <span class="d-flex justify-content-between">
                                <button type="button" class="btn btn-md btn-secondary prev">Previous</button>
                                <input type="submit" class="btn btn-md btn-success" value="Sign Up" name="create_account">
                            </span>
                        </div>
                    </form>  
                    <hr class="featurette-divider">
                    <div class="text-center mt-4 font-weight-light">
                        Already have an account? <a href="login.php" class="text-success">Sign In</a>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
<script src="../src/vendors/sweetalert/sweetalert.min.js"></script>

  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <script>
  $(document).ready(function() {
    var totalSteps = 3; // Change this to the total number of steps in your stepper
    var currentStep = 1;

    function updateProgressIndicators() {
      $('.progress-step').removeClass('active');
      for (var i = 1; i <= currentStep; i++) {
        $('.progress-step:nth-child(' + i + ')').addClass('active');
      }
    }

  // Navigation buttons click handlers
    $('.next').click(function() {
      $('#step' + currentStep).hide();
      currentStep++;
      $('#step' + currentStep).show();
      updateProgressIndicators();

      toggleSubmitButton();
    });

    $('.prev').click(function() {
      $('#step' + currentStep).hide();
      currentStep--;
      $('#step' + currentStep).show();
      updateProgressIndicators();

      toggleSubmitButton();
    });

  });
</script>
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

    if(empty($first_name) || empty($middle_name) || empty($last_name) || empty($role) || empty($date_of_birth) || empty($house_number) || empty($street) || empty($subdivision) || empty($brgy) || empty($city) || empty($region) || empty($zip_code)){
        echo '<script type="text/javascript">

        $(document).ready(function(){
            sweetAlert("Oops...", "Something went wrong!", "error");
        });
        
        </script>
        ';
    }else{

        date_default_timezone_set("Asia/Manila");
        $date = date('y-m-d');
        
        //image
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
    
}




ob_end_flush();
?>