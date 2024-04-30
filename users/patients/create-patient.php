<?php
ob_start();
session_start();
include('../../connection/connection.php');
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
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" /> -->
  <link rel="stylesheet" href="../../src/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- <link rel="stylesheet" href="../../src/css/custom/modal.css"> -->
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
        <a class="navbar-brand brand-logo mr-5" href="home.php"><img src="../../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/>FEU</a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../../src/img/FEU_Tamaraws_official_logo.png" class="mr-2" alt="logo"/></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/<?= $image; ?>" alt="profile"/>

              <!-- pasiksik ng pic dito -->
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="../my-profile.php">
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
                                <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create patient</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">  
                        <div class="card">
                            <div class="card-people mt-auto p-4">
                                <form action="" method="POST" enctype='multipart/form-data'>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <h2>Infant</h2>
                                            <a href="javascript:void(0)" class="add-more-form">Add</a>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="main-form row">
                                                        <div class="col-lg-4">
                                                            <label for="">First Name:</label>
                                                            <input type="text" class="form-control" name="first_name_infant[]">
                                                            <br>
                                                            <label for="">Middle Name:</label>
                                                            <input type="text" class="form-control" name="middle_name_infant[]">
                                                            <br>
                                                            <label for="">Last Name:</label>
                                                            <input type="text" class="form-control" name="last_name_infant[]">
                                                            <br>
                                                            <label for="">Suffix:</label>
                                                            <input type="text" class="form-control" name="suffix_infant[]">
                                                            <br>
                                                            <label for="">Date of Birth:</label>
                                                            <input type="date" class="form-control" name="date_of_birth_infant[]" id="">
                                                            <br>
                                                            <label for="">Gender:</label>
                                                            <select class="form-control" name="gender_infant[]" id="">
                                                                <option value="">-Select-</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                            </select>
                                                            <br>
                                                            <label for="">Marital Status:</label>
                                                            <select class="form-control" name="marital_status_infant[]" id="">
                                                                <option value="">-Select-</option>
                                                                <option value="1">Single</option>
                                                                <option value="2">Married</option>
                                                                <option value="3">Divorced</option>
                                                                <option value="4">Separated</option>
                                                            </select>
                                                            <br>
                                                            <label for="">Image:</label>
                                                            <input type="file" name="image_infant[]" multiple="">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row mb-5">
                                        <div class="col-lg-6">
                                            <h2>Name of Mother</h2>
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name_mother">
                                            <br>

                                            <label for="">Middle Name:</label>
                                            <input type="text" name="middle_name_mother">
                                            <br>

                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name_mother">
                                            <br>

                                            <label for="">Date of Birth:</label>
                                            <input type="date" name="date_of_birth_mother">
                                            <br>

                                            <label for="">Contact Number:</label>
                                            <input type="text" name="contact_number_mother">
                                            <br>

                                        </div>
                                        <div class="col-lg-6">
                                            <h2>Address</h2>

                                            <label for="">Address:</label>
                                            <input type="text" name="address_mother" id="address1">

                                            <br>

                                            <label for="">Image:</label>
                                            <input type="file" name="image_mother" multiple="">
                                            <br>

                                            <input type="checkbox" name="" id="check_address">
                                            <label for="">Same address for father</label>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Name of Father</h2>
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name_father">
                                            <br>

                                            <label for="">Middle Name:</label>
                                            <input type="text" name="middle_name_father">
                                            <br>

                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name_father">
                                            <br>

                                            <label for="">Date of Birth:</label>
                                            <input type="date" name="date_of_birth_father">

                                           

                                            <!-- stepper
                                            1. Infant
                                            2. Mother
                                            3. Father
                                            4. Save
                                            patapusin mo lang code ko -->
                                        </div>
                                        <div class="col-lg-6">
                                            <h2>Address</h2>

                                            <label for="">Address:</label>
                                            <input type="text" name="address_father" id="address2">
                                                <br>

                                            <label for="">Image:</label>
                                            <input type="file" name="image_father" multiple="">
                                                <br>
                                        </div>
                                    </div>
                                    <input type="submit" name="create_patient" value="Save">
                                    </form>
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
<!-- <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script> -->
<script src="../../src/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="../../src/js/custom/address.js"></script>
<script src="../../src/js/custom/remove-btn.js"></script>
</script>
</body>
</html>

<?php
if(isset($_POST['create_patient'])){

    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $first_name_infant = $_POST['first_name_infant'];
    $middle_name_infant = $_POST['middle_name_infant'];
    $last_name_infant = $_POST['last_name_infant'];
    $suffix_infant = $_POST['suffix_infant'];
    $date_of_birth_infant =  $_POST['date_of_birth_infant'];
    $gender_infant = $_POST['gender_infant'];
    $martital_status_infant = $_POST['marital_status_infant'];
    $image_infant = $_FILES['image_infant']['name'];

    $account_id_mother = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    $account_id_father = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    $account_id_user = $_SESSION['account_id'];


    foreach($image_infant as $key => $value){
        $data_patient_id = rand(500,67890);
        $data_first_name_infant = $first_name_infant[$key];
        $data_middle_name_infant = $middle_name_infant[$key];
        $data_last_name_infant = $last_name_infant[$key];
        $data_suffix_infant = $suffix_infant[$key];
        $data_date_of_birth_infant = $date_of_birth_infant[$key];
        $data_gender_infant = $gender_infant[$key];
        $data_marital_status_infant = $martital_status_infant[$key];
        $image_infant = $_FILES['image_infant']['name'][$key];

        $img_path = "infant_images/".$image_infant;
        $tmp_name= $_FILES['image_infant']['tmp_name'][$key];
        move_uploaded_file($tmp_name, $img_path);

        $query_check_infant = "SELECT * FROM infants WHERE patient_id = '$data_patient_id' AND first_name = '$data_first_name_infant' AND middle_name = '$data_middle_name_infant' AND last_name = '$data_last_name_infant' AND date_of_birth = '$data_date_of_birth_infant' AND gender = '$data_gender_infant' AND marital_status = '$data_marital_status_infant'";
        $run_query_check_infant = mysqli_query($conn,$query_check_infant);

        if(mysqli_num_rows($run_query_check_infant) > 0){
             echo "infant already added";
        }else{
            $query_infant = "INSERT INTO infants (patient_id,first_name,middle_name,last_name,suffix,date_of_birth,gender,marital_status,image,id_mother_parent,id_father_parent,id_remarks,date_created,date_updated,modified_by) VALUES ('$data_patient_id' + 3,'$data_first_name_infant','$data_middle_name_infant','$data_last_name_infant','$data_suffix_infant','$data_date_of_birth_infant','$data_gender_infant','$data_marital_status_infant','".$value."', '$account_id_mother','$account_id_father','0','$date','$date', '$account_id_user')";
            $result_infant = mysqli_query ($conn,$query_infant);
            // subject for modification
            echo "added infant";

            
        }
    }

    $first_name_mother = $_POST['first_name_mother'];
    $middle_name_mother = $_POST['middle_name_mother'];
    $last_name_mother = $_POST['last_name_mother'];
    $date_of_birth_mother = $_POST['date_of_birth_mother'];
    $address_mother = $_POST['address_mother'];
    $contact_number_mother = $_POST['contact_number_mother'];

    //image
    $image_mother = $_FILES['image_mother']['name'];
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image_mother']['name'];

    $query_check_mother = "SELECT * FROM mothers WHERE first_name = '$first_name_mother' AND middle_name ='$middle_name_mother' AND last_name = '$last_name_mother' AND date_of_birth = '$date_of_birth_mother' AND address = '$address_mother' ";
    $result_check_mother = mysqli_query($conn,$query_check_mother);
    if(mysqli_num_rows($result_check_mother) > 0){
        // subject for modification
        echo "error inserting mother, already added";
    }else{

        $query_patient_id_mother = "SELECT * FROM infants WHERE id_mother_parent = '$account_id_mother'";
        $run_patient_id_mother = mysqli_query($conn,$query_patient_id_mother);

        if(mysqli_num_rows($run_patient_id_mother) > 0){
            foreach($run_patient_id_mother as $row_patient_id_mother){
                $row_patient_id_mother['patient_id'];

                $query_mother = "INSERT INTO mothers (account_id,patient_id,first_name,middle_name,last_name,date_of_birth,address,contact_number,image,date_created,date_updated,modified_by) VALUES ('$account_id_mother','".$row_patient_id_mother['patient_id']."','$first_name_mother', '$middle_name_mother','$last_name_mother', '$date_of_birth_mother','$address_mother','$contact_number_mother','$image_mother','$date', '$date', '$account_id_user' )";
                $result_mother = mysqli_query($conn,$query_mother);

                if($result_mother) {
                    move_uploaded_file($_FILES["image_mother"]["tmp_name"], "mother_images/".$_FILES["image_mother"]["name"]);
                    // subject for modification
                    echo "added mother";
                }
            }
        } 
        
    }

   
    $first_name_father = $_POST['first_name_father'];
    $middle_name_father = $_POST['middle_name_father'];
    $last_name_father = $_POST['last_name_father'];
    $date_of_birth_father = $_POST['date_of_birth_father'];
    $address_father = $_POST['address_father'];

    $image_father = $_FILES['image_father']['name'];
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image_father']['name'];

    $query_check_father = "SELECT * FROM fathers WHERE first_name = '$first_name_father' AND middle_name ='$middle_name_father' AND last_name = '$last_name_father' AND date_of_birth = '$date_of_birth_father' AND address = '$address_father' ";
    $result_check_father = mysqli_query($conn,$query_check_father);

    if(mysqli_num_rows($result_check_father) > 0){
        // subject for modification
        echo "father already added";
    }else{

        $query_patient_id_father = "SELECT * FROM infants WHERE id_father_parent = '$account_id_father'";
        $run_patient_id_father = mysqli_query($conn,$query_patient_id_father);

        if(mysqli_num_rows($run_patient_id_father) > 0){
            foreach($run_patient_id_father as $row_patient_id_father){
                $row_patient_id_father['patient_id'];

                $query_father = "INSERT INTO fathers (account_id,patient_id,first_name,middle_name,last_name,date_of_birth,address,image,date_created,date_updated,modified_by) VALUES ('$account_id_father','".$row_patient_id_father['patient_id']."','$first_name_father', '$middle_name_father','$last_name_father', '$date_of_birth_father','$address_father','$image_father','$date', '$date', '$account_id_user' )";
                $result_father = mysqli_query($conn,$query_father);

                if($result_father) {
                    // subject for modification
                    move_uploaded_file($_FILES["image_father"]["tmp_name"], "father_images/".$_FILES["image_father"]["name"]);
                    echo "added father"; 
                }else{
                    // subject for modification
                    echo "not added father";
                }
            }
        }
        
    }


}

ob_end_flush();
?>
