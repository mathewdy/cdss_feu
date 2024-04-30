<?php

include('../connection/connection.php');
session_start();
ob_start();
$_SESSION['account_id'];



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
        <a class="navbar-brand brand-logo mr-5" href="home.php"><img src="../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
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
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb" style="border: none;">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Assessments</li>
                </ol>
            </nav>
            <!-- <a href="home.php">Back</a>

            <a href="">Assessments</a> -->

            <!-- <h1 class="">Demographic Profile:</h1> -->
            
<?php

    if(isset($_GET['patient_id'])){
        $patient_id = $_GET['patient_id'];

        $query_patient = "SELECT infants.id AS infant_id ,infants.patient_id AS patient_id ,infants.first_name AS patient_first_name ,infants.middle_name AS patient_middle_name,infants.last_name AS patient_last_name ,infants.suffix AS patient_suffix,infants.date_of_birth AS patient_date_of_birth,infants.gender AS patient_gender,infants.marital_status AS patient_marital_status,infants.image AS patient_image, infants.modified_by AS patient_modified_by , remarks.patient_id AS remarks_patient_id, remarks.assessments AS remarks_assessments, remarks.date_created AS remarks_date_created, remarks.date_updated AS remarks_date_updated, remarks.modified_by AS remarks_modified_by , mothers.first_name AS mothers_first_name, mothers.last_name AS mothers_last_name, mothers.contact_number AS mothers_contact_number  
        FROM infants
        LEFT JOIN remarks
        ON infants.patient_id = remarks.patient_id
        LEFT JOIN mothers
        ON infants.patient_id = mothers.patient_id
        WHERE infants.patient_id = '$patient_id' ";
        $run_query_patient = mysqli_query($conn,$query_patient);

        if(mysqli_num_rows($run_query_patient) > 0){
            foreach($run_query_patient as $row_patient){
                ?>
                <div class="grid-margin p-5 py-2 mt-n4" style="border-radius: 0;">
                    <div class="row mb-5 mt-n2">
                        <div class="col-lg-4">
                            <div class="card">
                            <img src="<?php echo "patients/infant_images/". $row_patient['patient_image']?>" alt="patient image" class="card-img-top" style="height: 23rem;">
                            </div>
                            <div class="card-footer text-center bg-white">
                                <p class="h5 text-muted italic"><i>Patient Id: <?php echo $row_patient['patient_id']?></i></p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 w-100">
                                    <div class="card card-tale p-4" style="border-radius: 0;">
                                        <p class="font-weight-bold h3 mb-5">Patient Information </p>
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <p class="font-weight-bold h4">Name</p>
                                                <?= $row_patient['patient_last_name'] . ' , ' . $row_patient['patient_first_name'] . ' ' . $row_patient['patient_middle_name'] ?>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <p class="font-weight-bold h4">Gender</p>
                                                <?php 
                                                if($row_patient['patient_gender'] = '1'){
                                                        echo "Male";
                                                    }else{
                                                        echo "Female";
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <p class="font-weight-bold h4">Date of Birth: </p>
                                                <?php echo $row_patient['patient_date_of_birth']?>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <p class="font-weight-bold h4">Marital Status</p>
                                                <?php  if($row_patient['patient_marital_status'] = '1' ){
                                                        echo "Single";
                                                    }elseif($row_patient['patient_marital_status'] = '2'){
                                                        echo "Married";
                                                    }elseif($row_patient['patient_marital_status'] = '3'){
                                                        echo "Divorced";
                                                    }else{
                                                        echo "Separated";
                                                    }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card card-light-blue p-4" style="border-radius: 0;">           
                                        <p class="font-weight-bold h3 mb-5">Emergency Contact </p>
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <p class="font-weight-bold h4">Full Name</p>
                                                <?php echo $row_patient['mothers_first_name']. " " . $row_patient['mothers_last_name']?>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <p class="font-weight-bold h4">Contact Number</p>
                                                <?php 
                                                    if($row_patient['mothers_contact_number'] == ''){
                                                        echo "N/A";
                                                    }else{
                                                        echo $row_patient['mothers_contact_number'];
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                    <form action="" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" name="patient_id" value="<?php echo $row_patient['patient_id']?>">
                        <textarea name="patients_assessments"><?php if(empty($row_patient['remarks_assessments'])){
                                ?>
                            <table style="width: 100%; table-layout:fixed">
                                <tr>
                                    <td><b>Assessment</b></td>
                                    <td>NURSE IN CHARGE:</td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                    <thead>
                                        
                                        <tr>
                                            <th style="width:20%">Time of Birth: </th>
                                            <th style="width:20%">APGAR Score:</th>
                                            <th style="width:20%">Vital Signs:</th>
                                            <th style="width:20%">Vaccines</th>
                                            <th style="width:20%">Medications</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Appearance:</td>
                                            <td>Pulse Rate:</td>
                                            <td><ul style="margin: 0;"><li>Hepa B</li></ul></td>
                                            <td>Erythromycin Eye Ointment</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Pulse:</td>
                                            <td>Respiratory Rate:</td>
                                            <td><ul style="margin: 0;"><li>DTap</li></ul></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Grimace:</td>
                                            <td>Temperature:</td>
                                            <td><ul style="margin: 0;"><li>Vitamin K</li></ul></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Activity:</td>
                                            <td>Weight:</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Respiration:</td>
                                            <td>Height:</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                            </table>
                            <br>
                            <br>
                            <p style="text-align:center; font-weight:bold;">MONTHLY DEVELOPMENT AND CHECK UP OF THE CLIENT:</p>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">1st Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">2nd Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">3rd Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">4th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">5th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">6th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">7th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">8th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">9th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">10th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td>
                                        <p style="text-align: center; font-weight: bold;">11th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <p style="text-align: center; font-weight: bold;">12th Month</p>
                                        <table style="width: 100%; table-layout: fixed;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>Diet:</li>
                                                        <li>Vital Signs:</li>
                                                        <li>Pulse Rate:</li>
                                                        <li>Respiratory Rate:</li>
                                                        <li>Temperature:</li>
                                                        <li>Weight:</li>
                                                        <li>Height:</li>
                                                        <li>Laboratory:</li>
                                                        <li>Medication Given:</li>
                                                        <li>Doctor’s Note:</li>
                                                    </ul> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    
                                <?php
                            }else{
                                echo $row_patient['remarks_assessments'];
                            }
                            ?>
                        </textarea>
                        <?php
                        
                        if(empty($row_patient['remarks_assessments'])){
                            ?>
                                <input type="submit" name="create_cdss_patient" value="Save">
                            <?php
                        }else{
                            ?>
                                <input type="submit" name="update_cdss_patient" value="Update">
                            <?php
                        }
                        
                        ?>

                       
                    </form>
                <?php
            }
        }
    }
?>
      </div>
    </div>
  </div>
<script src="https://cdn.tiny.cloud/1/hh66v9nxb8r5lqopiz2zr5m37mfer93964ycvrhwdbazox0d/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    height:'1000',
    width:'auto',
    table_sizing_mode: 'relative',
    table_default_attributes: {
    border: '5'
    },
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate mentions tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fontzie' ,
    default_font_stack: [ '-apple-system', 'Arial' ]
  });
</script>
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

if(isset($_POST['create_cdss_patient'])){
    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $account_id = $_SESSION['account_id'];
    $patient_id = $_POST['patient_id'];
    $patients_assessments = $_POST['patients_assessments'];

    $query_insert_remarks = "INSERT INTO remarks (patient_id,assessments,date_created,date_updated,modified_by) VALUES ('$patient_id','$patients_assessments','$date', '$date','$account_id')";
    $run_insert_remarks = mysqli_query($conn,$query_insert_remarks);

    if($run_insert_remarks){
        // subject to revise
        echo "added";
    }else{
        echo "error";
    }

    

}


if(isset($_POST['update_cdss_patient'])){
    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $account_id = $_SESSION['account_id'];
    $patient_id = $_POST['patient_id'];
    $patients_assessments = $_POST['patients_assessments'];

    $query_update_remarks = "UPDATE remarks SET assessments = '$patients_assessments', date_created = '$date' , date_updated = '$date' , modified_by = '$account_id' WHERE patient_id = '$patient_id'";
    $run_update_remarks = mysqli_query($conn,$query_update_remarks);

    if($run_update_remarks){
        // subject to revise
        echo "updated";
    }else{
        echo "error";
    }
}



ob_end_flush();


?>

