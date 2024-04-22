<?php
ob_start();
session_start();
include('.././connection/connection.php');
$_SESSION['account_id'] . '<br>';
$_SESSION['first_name']. '<br>';
$_SESSION['last_name'] . '<br>';
$_SESSION['username'] . '<br>';

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
  <link rel="stylesheet" src="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="" alt="profile"/>

              <!-- pasiksik ng pic dito -->
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
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
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patients/patients.php">
                <i class="icon-head menu-icon"></i>
              <span class="menu-title">Patients</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome to home page</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">

                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
               
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								
							</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card">
               
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    
                  </div>
                </div>
                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                  <div class="card data-icon-card-primary">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card">
              
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
             

                
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


  <table class="table">
    <thead>
      <tr>
        <td>Patient Id</td>
        <td>First Name</td>
        <td>Middle Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
        <td>Options</td>
        <td></td>
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
              <td><a href="">Delete</a></td>
              <td><a href="edit-patient.php?patient_id=<?php echo $row_patients['patient_id']?>">Edit</a></td>
            </tr>
          <?php
        }
      }
    ?>
    </tbody>
  </table>

<script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"> 
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
<script>
  $(document).ready(function(){
    $('.table').DataTable();
  });
</script>

</script>
</body>
</html>




<?php

ob_end_flush();


?>