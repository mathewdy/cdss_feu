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
            <a class="navbar-brand m-auto" href="#">
            <img src="../src/img/FEU_Tamaraws_official_logo.png" alt="Feu_Tamaraw" height="50">
            </a>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper full-page-wrapper mt-n5">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="POST" >
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-inverse-success btn-lg font-weight-medium auth-form-btn" name="login" value="Sign In">
                  
                </div>
                <div class="my-2 d-flex justify-content-center align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-success">Create</a>
                </div>
              </form>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  endinject -->
<script src="../src/vendors/sweetalert/sweetalert.min.js"></script>
<script src="../src/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../src/js/off-canvas.js"></script>
<script src="../src/js/hoverable-collapse.js"></script>
<script src="../src/js/template.js"></script>
<script src="../src/js/settings.js"></script>
<script src="../src/js/todolist.js"></script>
</body>
</html>



<?php

if(isset($_POST['login'])){


    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username || $password)){
      echo '<script type="text/javascript">

      $(document).ready(function(){
          sweetAlert("Oops...", "Something went wrong!", "error");
      });
      
      </script>
      ';
    }elseif($username == ''){
      echo '<script type="text/javascript">

      $(document).ready(function(){
          sweetAlert("Oops...", "Something went wrong!", "error");
      });
      
      </script>
      ';
    }elseif($password == ''){
      echo '<script type="text/javascript">

      $(document).ready(function(){
          sweetAlert("Oops...", "Something went wrong!", "error");
      });
      
      </script>
      ';
    }else{
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
          echo '<script type="text/javascript">
  
          $(document).ready(function(){
            swal("Error!", "Something went wrong.", "error")
          });
          
          </script>
          ';
      }

    }
   

}

ob_end_flush();
?>
