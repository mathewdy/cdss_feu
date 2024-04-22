<?php

ob_start();
session_start();
include('../../connection/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../src/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../src/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../src/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../src/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../src/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../../src/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../src/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../src/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../home.php"><img src="../../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
        <a class="navbar-brand brand-logo-mini" href="../home.php"><img src="../../src/img/FEU_Tamaraws_official_logo.png" alt="logo"/></a>
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
            <a class="nav-link" href="../home.php">
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
                
                    <h1>Patients</h1>

                    <input type="text" name="search_patient" placeholder="Search Patient"> 

                    <a href="create-patient.php">Add Patient</a>
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
    <script src="../../src/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../src/vendors/chart.js/Chart.min.js"></script>
    <script src="../../src/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../src/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../src/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../src/js/off-canvas.js"></script>
    <script src="../../src/js/hoverable-collapse.js"></script>
    <script src="../../src/js/template.js"></script>
    <script src="../../src/js/settings.js"></script>
    <script src="../../src/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../src/js/dashboard.js"></script>
    <script src="../../src/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>

<?php

ob_end_flush();

?>