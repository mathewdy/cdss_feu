<?php


ob_end_flush();

?>
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
  <title>Skydash Admin</title>
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
  <!-- <link rel="stylesheet" href="../src/css/custom/modal.css"> -->
</head>
<style>
    .tr .td{
        cursor: pointer !important;
    }
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/<?= $image; ?>" alt="profile"/>

              <!-- pasiksik ng pic dito -->
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel w-100">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb" style="border: none;">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Patient Info</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">  
                        <div class="card">
                            <div class="card-people mt-auto p-4">
                            <?php

                                if(isset($_GET['patient_id'])){

                                    $patient_id = $_GET['patient_id'];
                                    $patient_id = $_GET['patient_id'];

                                    $query_patients_profile = "SELECT infants.id AS infant_id ,infants.patient_id AS patient_id ,infants.first_name AS patient_first_name ,infants.middle_name AS patient_middle_name,infants.last_name AS patient_last_name ,infants.image,infants.suffix AS patient_suffix,infants.date_of_birth AS patient_date_of_birth,infants.gender AS patient_gender,infants.marital_status AS patient_marital_status,infants.image AS patient_image ,infants.id_mother_parent AS patient_id_mother_parent,infants.id_father_parent AS patient_id_father_parent,mothers.id AS mother_id,mothers.account_id AS mother_account_id,mothers.patient_id AS mother_patient_id,mothers.first_name AS mother_first_name,mothers.middle_name AS mother_middle_name,mothers.last_name AS mother_last_name ,mothers.date_of_birth AS mother_date_of_birth,mothers.address AS mother_address,mothers.image AS mother_image ,fathers.id AS father_id,fathers.account_id AS father_account_id ,fathers.patient_id AS father_patient_id ,fathers.first_name AS father_first_name,fathers.middle_name AS father_middle_name,fathers.last_name AS father_last_name,fathers.date_of_birth AS father_date_of_birth,fathers.address AS father_address,fathers.image AS father_image
                                    FROM infants
                                    LEFT JOIN mothers
                                    ON infants.patient_id = mothers.patient_id
                                    LEFT JOIN fathers
                                    ON infants.patient_id = fathers.patient_id WHERE infants.patient_id = '$patient_id'";
                                    $run_patients_profile = mysqli_query($conn,$query_patients_profile);
                        
                                    if(mysqli_num_rows($run_patients_profile) > 0){
                                        foreach($run_patients_profile as $row_patients){
                                              
                                            ?>
                                                <p class="h3">Patient's Profile</p>
                                                <hr class="featurette-divider">
                                                <form action="" method="POST" enctype='multipart/form-data'>
                                                    <div class="row grid-margin mt-lg-5 mt-mb-5">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <img src="<?php echo "patients/infant_images/". $row_patients['image']?>" alt="patient image" style="height: 150px; width: 150px; border-radius:0;">
                                                                    <input type="file" name="patient_image_new">
                                                                    <input type="hidden" name="patient_old_image" value="<?php echo $row_patients['patient_image']?>">
                                                                    <input type="hidden" name="patient_id" value="<?php echo $row_patients['patient_id']?>">
        
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="">First Name:</label>
                                                                    <input type="text" class="form-control" name="patient_first_name" value="<?php echo $row_patients['patient_first_name']?>">
                                                                    <label for="">Middle Name:</label>
                                                                    <input type="text"  class="form-control" name="patient_middle_name" value="<?php echo $row_patients['patient_middle_name']?>">
                                                                    <label for="">Last Name:</label>
                                                                    <input type="text"  class="form-control" name="patient_last_name" value="<?php echo $row_patients['patient_last_name']?>">
                                                                    
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="">Suffix:</label>
                                                                    <input type="text" class="form-control" name="patient_suffix" value="<?php echo $row_patients['patient_suffix']?>">
                                                                    <label for="">Date of Birth:</label>
                                                                    <!-- <input type="text" name="" readonly value="<?php echo $row_patients['patient_date_of_birth']?>"> -->
                                                                    <input type="date" class="form-control" name="patient_date_of_birth" id="" value="<?php echo $row_patients['patient_date_of_birth']?>">
                                                                    <label for="">Gender:</label>
                                                                    <!-- <?= $row_patients['patient_gender'];?> -->
                                                                    <select name="patient_gender" class="form-control">
                                                                            <option value="">-Select Gender-</option>
                                                                        <?php 
                                                                            if($row_patients['patient_gender'] == '1'){?>
                                                                            <option value="male" selected>Male</option>
                                                                            <option value="female">Female</option>
                                                                        <?php 
                                                                            }else{?>
                                                                            <option value="male">Male</option>
                                                                            <option value="female" selected>Female</option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 d-flex mt-lg-5 justify-content-between">
                                                            <span>
                                                                <button type="button" class="btn btn-md btn-inverse-info" data-toggle="modal" data-target="#Mother">Mother's Profile</button>
                                                                <button type="button" class="btn btn-md btn-inverse-success" data-toggle="modal" data-target="#Father">Father's Profile</button>
                                                            </span>
                                                            <span>
                                                                <input type="submit" class="btn btn-md btn-success" name="update_data">
                                                            </span>
                                                            
                                                                
                                                                <div class="modal modal-fullscreen fade" id="Mother" tabindex="-1" aria-labelledby="ProfileMother" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <span class="d-flex justify-content-between align-items-start">
                                                                                    <h2>Mother's Profile</h2>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </span>

                                                                                <hr class="featurette-divider">
                                                                                <div class="row mt-5 mb-4">
                                                                                    <div class="col-lg-4">
                                                                                        <img src="<?php echo "patients/mother_images/". $row_patients['mother_image']?>" alt="patient image" style="height: 150px; width: 150px; border-radius:0;">
                                                                                        <input type="file" name="mother_image_new">
                                                                                        <input type="hidden" name="mother_old_image" value="<?php echo $row_patients['mother_image']?>">
                                                                                        <input type="hidden" name="patient_id" value="<?php echo $row_patients['patient_id']?>">
                            
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <label for="">First Name:</label>
                                                                                        <input type="text" class="form-control" name="mother_first_name" value="<?php echo $row_patients['mother_first_name']?>">
                                                                                        <label for="">Middle Name:</label>
                                                                                        <input type="text"  class="form-control" name="mother_middle_name" value="<?php echo $row_patients['mother_middle_name']?>">
                                                                                        <label for="">Last Name:</label>
                                                                                        <input type="text" class="form-control" name="mother_last_name" value="<?php echo $row_patients['mother_last_name']?>">
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <label for="">Address:</label>
                                                                                        <input type="text" class="form-control" name="mother_address" value="<?php echo $row_patients['mother_address']?>">
                                                                                        <label for="">Date of Birth:</label>
                                                                                        <input type="date" class="form-control" name="mother_date_of_birth" value="<?php echo $row_patients['mother_date_of_birth']?>">
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" id="Father" tabindex="-1" aria-labelledby="ProfileFather" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <span class="d-flex justify-content-between align-items-start">
                                                                                    <h2>Father's Profile</h2>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </span>

                                                                                <hr class="featurette-divider">
                                                                                <div class="row mt-5 mb-4">
                                                                                    <div class="col-lg-4">
                                                                                        <img src="<?php echo "patients/mother_images/". $row_patients['mother_image']?>" alt="patient image" style="height: 150px; width: 150px; border-radius:0;">
                                                                                        <input type="file" name="mother_image_new">
                                                                                        <input type="hidden" name="mother_old_image" value="<?php echo $row_patients['mother_image']?>">
                                                                                        <input type="hidden" name="patient_id" value="<?php echo $row_patients['patient_id']?>">
                            
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <label for="">First Name:</label>
                                                                                        <input type="text" class="form-control" name="father_first_name" value="<?php echo $row_patients['father_first_name']?>">
                                                                                        <label for="">Middle Name:</label>
                                                                                        <input type="text"  class="form-control" name="father_middle_name" value="<?php echo $row_patients['father_middle_name']?>">
                                                                                        <label for="">Last Name:</label>
                                                                                        <input type="text" class="form-control" name="father_last_name" value="<?php echo $row_patients['father_last_name']?>">
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <label for="">Address:</label>
                                                                                        <input type="text" class="form-control" name="father_address" value="<?php echo $row_patients['father_address']?>">
                                                                                        <label for="">Date of Birth:</label>
                                                                                        <input type="date" class="form-control" name="father_date_of_birth" value="<?php echo $row_patients['father_date_of_birth']?>">
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </form>
                                                
                                                
                                            <?php
                                        }
                                    }

                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. All rights reserved.</span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
<!-- container-scroller -->
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
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
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
        $('.dataTable_length').remove();
        $('<a class="btn btn-success mr-2 mb-4" href="patients/create-patient.php">Add Patient</a>')
        .insertBefore('div.dataTables_length');
    });
</script>
</script>
</body>
</html>

<?php

if(isset($_POST['update_data'])){
    $patient_id = $_POST['patient_id'];
    $patient_first_name = $_POST['patient_first_name'];
    $patient_middle_name = $_POST['patient_middle_name'];
    $patient_last_name = $_POST['patient_last_name'];
    $patient_suffix = $_POST['patient_suffix'];
    $patient_date_of_birth = $_POST['patient_date_of_birth'];
    $patient_gender = $_POST['patient_gender'];

    $patient_new_image = $_FILES['patient_image_new']['name'];
    $patient_old_image = $_POST['patient_old_image'];

    if($patient_new_image != ''){
        $update_file_name_patient = $_FILES['patient_image_new']['name'];
    }else{
        $update_file_name_patient = $patient_old_image;
    }

    if(file_exists("patients/infant_images/" . $_FILES['patient_image_new']['name'])){
        $filename = $_FILES['patient_image_new']['name'];
        echo "image already exists";
    }else{
        $query_update_patients_profile = "UPDATE infants SET patient_id = '$patient_id', first_name = '$patient_first_name', middle_name = '$patient_middle_name', last_name = '$patient_last_name', suffix = '$patient_suffix' , date_of_birth = '$patient_date_of_birth', gender = '$patient_gender', image = '$update_file_name_patient' WHERE patient_id = '$patient_id'";
        $run_update_patients_profile = mysqli_query($conn,$query_update_patients_profile);

        if($run_update_patients_profile){
            if($_FILES['patient_image_new']['name'] !=''){
                move_uploaded_file($_FILES['patient_image_new']['tmp_name'], "patients/infant_images/".$_FILES['patient_image_new']['name']);
                unlink("patients/infant_images/".$patient_old_image);
                // echo "updated data and image";
                header("location: home.php");
            }else{
                echo "Error updating image";
            }
        }else{
            echo "Error updating data";
        }
    }

}


ob_end_flush();

?>