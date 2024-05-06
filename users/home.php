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

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-success">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 text-success" style="font-weight: 900;" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel w-100">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome <?= $first_name . ' ' . $ln; ?></h3>
                </div>
              </div>
              <hr class="featurette-divider">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-people mt-auto p-4">
                    <table class="table table-bordered table-hover" id="dataTable">
                        <thead>
                        <tr>
                            <th>Patient Id</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query_patients = "
                        SELECT infants.id AS infant_id ,infants.patient_id AS patient_id ,infants.first_name AS patient_first_name ,infants.middle_name AS patient_middle_name,infants.last_name AS patient_last_name ,infants.suffix AS patient_suffix,infants.date_of_birth AS patient_date_of_birth,infants.gender AS patient_gender,infants.marital_status AS patient_marital_status,infants.image AS patient_image ,infants.id_mother_parent AS patient_id_mother_parent,infants.id_father_parent AS patient_id_father_parent,mothers.id AS mother_id,mothers.account_id AS mother_account_id,mothers.patient_id AS mother_patient_id,mothers.first_name AS mother_first_name,mothers.middle_name AS mother_middle_name,mothers.last_name AS mother_last_name ,mothers.date_of_birth AS mother_date_of_birth,mothers.address AS mother_address,mothers.image AS mother_image ,fathers.id AS father_id,fathers.account_id AS father_account_id ,fathers.patient_id AS father_patient_id ,fathers.first_name AS father_first_name,fathers.middle_name AS father_middle_name,fathers.last_name AS father_last_name,fathers.date_of_birth AS father_date_of_birth,fathers.address AS father_address,fathers.image AS father_image
                        FROM infants
                        LEFT JOIN mothers
                        ON infants.patient_id = mothers.patient_id
                        LEFT JOIN fathers
                        ON infants.patient_id = fathers.patient_id";
                        $run_query_patients = mysqli_query($conn,$query_patients);
                        if(mysqli_num_rows($run_query_patients) > 0){
                            foreach($run_query_patients as $row_patients){
                            ?>

                                <tr>
                                <td><?php echo $row_patients['patient_id']?></td>
                                <td><?php echo $row_patients['patient_first_name']?></td>
                                <td><?php echo $row_patients['patient_middle_name']?></td>
                                <td><?php echo $row_patients['patient_last_name']?></td>
                                <td><?php echo date("Y-M-d",strtotime($row_patients['patient_date_of_birth']))?></td>
                                <td><a href="#" class="delete-link" data-item-id="<?php echo $row_patients['patient_id']; ?>">Delete</a> 
                                <a href="edit-patient.php?patient_id=<?php echo $row_patients['patient_id']?>">Edit</a>

                                <a href="view-patient.php?patient_id=<?php echo $row_patients['patient_id']?>">View</a>
                                </td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>  
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center">
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

ob_end_flush();


?>