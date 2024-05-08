<?php
ob_start();
session_start();
include('../connection/connection.php');


if(isset($_GET['v'])){
$key = $_GET['v'];

//sample
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEU</title>
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
              <!-- <h4>Forgot Password</h4> -->
              <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
              <form class="pt-3" action="" method="POST" >
                <div class="form-group">
                    <input type="hidden" name="passkey" value="<?= $key ?>">
                    <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="password" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="c_pass" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-inverse-success btn-lg font-weight-medium auth-form-btn" name="confirm" value="Confirm">
                  
                </div>
                <div class="my-2 d-flex justify-content-center align-items-center">
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <!-- Don't have an account? <a href="register.php" class="text-success">Create</a> -->
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
}
if(isset($_POST['confirm'])){

    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];
    $passkey = $_POST['passkey'];
    // echo $passkey;
    if(empty($password)){
        echo '<script type="text/javascript">

        $(document).ready(function(){
            sweetAlert("Oops...", "Something went wrong!", "error");
        });
        
        </script>
        ';
    }elseif(empty($c_pass)){
        echo '<script type="text/javascript">
  
        $(document).ready(function(){
            sweetAlert("Oops...", "Something went wrong!", "error");
        });
        
        </script>
        ';
    }elseif($password == '' || $c_pass == ''){
      echo '<script type="text/javascript">

      $(document).ready(function(){
          sweetAlert("Oops...", "Something went wrong!", "error");
      });
      
      </script>
      ';
    }else{
      $query_reset = "SELECT * FROM users WHERE passkey = '$passkey'";
      $run_reset = mysqli_query($conn,$query_reset);
  
      if(mysqli_num_rows($run_login) > 0){
          foreach($run_reset as $row){
            if(password_verify($passkey,$row['passkey'])){
                $update_user = "UPDATE users SET username = '$username',  WHERE account_id = ''";
                $query_update = mysqli_query($conn,$update_user);

                if($query_update){
                    header('location: login.php');
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
