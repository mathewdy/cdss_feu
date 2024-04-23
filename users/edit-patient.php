<?php
include('../connection/connection.php');
session_start();
ob_start();
$_SESSION['account_id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <a href="home.php">Back</a>
    <?php

        if(isset($_GET['patient_id'])){

            $patient_id = $_GET['patient_id'];

            $query_patients_profile = "SELECT infants.id AS infant_id ,infants.patient_id AS patient_id ,infants.first_name AS patient_first_name ,infants.middle_name AS patient_middle_name,infants.last_name AS patient_last_name ,infants.suffix AS patient_suffix,infants.date_of_birth AS patient_date_of_birth,infants.gender AS patient_gender,infants.marital_status AS patient_marital_status,infants.image AS patient_image ,infants.id_mother_parent AS patient_id_mother_parent,infants.id_father_parent AS patient_id_father_parent,mothers.id AS mother_id,mothers.account_id AS mother_account_id,mothers.patient_id AS mother_patient_id,mothers.first_name AS mother_first_name,mothers.middle_name AS mother_middle_name,mothers.last_name AS mother_last_name ,mothers.date_of_birth AS mother_date_of_birth,mothers.address AS mother_address,mothers.image AS mother_image ,fathers.id AS father_id,fathers.account_id AS father_account_id ,fathers.patient_id AS father_patient_id ,fathers.first_name AS father_first_name,fathers.middle_name AS father_middle_name,fathers.last_name AS father_last_name,fathers.date_of_birth AS father_date_of_birth,fathers.address AS father_address,fathers.image AS father_image
            FROM infants
            LEFT JOIN mothers
            ON infants.patient_id = mothers.patient_id
            LEFT JOIN fathers
            ON infants.patient_id = fathers.patient_id WHERE infants.patient_id = '$patient_id'";
            $run_patients_profile = mysqli_query($conn,$query_patients_profile);

            if(mysqli_num_rows($run_patients_profile) > 0){
                foreach($run_patients_profile as $row_patients){
                    ?>
                        <form action="" method="POST" enctype='multipart/form-data'>

                        <h1>Patient's Profile</h1>
                        <label for="">First Name:</label>
                        <input type="text" name="patient_first_name" value="<?php echo $row_patients['patient_first_name']?>">
                        <label for="">Middle Name:</label>
                        <input type="text" name="patient_middle_name" value="<?php echo $row_patients['patient_middle_name']?>">
                        <label for="">Last Name:</label>
                        <input type="text" name="patient_last_name" value="<?php echo $row_patients['patient_last_name']?>">
                        <img src="<?php echo "patients/infant_images/". $row_patients['patient_image']?>" alt="patient image" style="height: 150px; width: 150px;">
                        <input type="file" name="update_patient_image">


                        <h2>Parent's Profile</h2>
                        <!---Modal dapat to-- for mother---->

                        <label for="">First Name:</label>
                        <input type="text" name="mother_first_name" value="<?php echo $row_patients['mother_first_name']?>">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mother_middle_name" value="<?php echo $row_patients['mother_middle_name']?>">
                        <label for="">Last Name:</label>
                        <input type="text" name="mother_last_name" value="<?php echo $row_patients['mother_last_name']?>">
                        <label for="">Address:</label>
                        <input type="text" name="mother_address" value="<?php echo $row_patients['mother_address']?>">
                        <label for="">Date of Birth:</label>
                        <input type="text" name="mother_date_of_birth" value="<?php echo $row_patients['mother_date_of_birth']?>">
                        <label for="">Image:</label>
                        <img src="<?php echo "patients/mother_images/". $row_patients['mother_image']?>" alt="patient image" style="height: 150px; width: 150px;" alt="mother_image">

                        <h2>Parent's Profile</h2>
                        <!---Modal dapat to-- for father---->

                        <label for="">First Name:</label>
                        <input type="text" name="father_first_name" value="<?php echo $row_patients['father_first_name']?>">
                        <label for="">Middle Name:</label>
                        <input type="text" name="father_middle_name" value="<?php echo $row_patients['father_middle_name']?>">
                        <label for="">Last Name:</label>
                        <input type="text" name="father_last_name" value="<?php echo $row_patients['father_last_name']?>">
                        <label for="">Address:</label>
                        <input type="text" name="father_address" value="<?php echo $row_patients['father_address']?>">
                        <label for="">Date of Birth:</label>
                        <input type="text" name="father_date_of_birth" value="<?php echo $row_patients['father_date_of_birth']?>">
                        <label for="">Image:</label>
                        <img src="<?php echo "patients/father_images/". $row_patients['father_image']?>" alt="patient image" style="height: 150px; width: 150px;" alt="father_image">


                        </form>

                        

                    <?php
                }
            }

        }

    ?>
</body>
</html>

<?php

if(isset($_POST['create_patient_data'])){
    $patient_id = $_GET['patient_id'];
    $patient_data = $_POST['patient_data'];

    $query_sample_insert = "INSERT INTO first_month (patient_id,milestone_development) VALUES ('$patient_id', '$patient_data') ";
    $run_sample_insert = mysqli_query($conn,$query_sample_insert);
    if($run_sample_insert){
        echo "added";
    }else{
        echo "error";
    }
    
}


ob_end_flush();

?>