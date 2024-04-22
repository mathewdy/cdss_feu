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

            $query_patients_profile = "SELECT * FROM infants WHERE patient_id = '$patient_id'";
            $run_patients_profile = mysqli_query($conn,$query_patients_profile);

            if(mysqli_num_rows($run_patients_profile) > 0){
                foreach($run_patients_profile as $row_patients){
                    ?>
                        <h1>Patient's Profile</h1>
                        <label for="">First Name:</label>
                        <input type="text" name="first_name" value="<?php echo $row_patients['first_name']?>">
                        <label for="">Middle Name:</label>
                        <input type="text" name="middle_name" value="<?php echo $row_patients['middle_name']?>">
                        <label for="">Last Name:</label>
                        <input type="text" name="last_name" value="<?php echo $row_patients['last_name']?>">
                        <img src="<?php echo "patients/infant_images/". $row_patients['image']?>" alt="patient image" style="height: 150px; width: 150px;">
                        <h2>Parent's Profile</h2>

                    <?php
                }
            }

        }

    ?>







    
</body>
</html>

<?php


ob_end_flush();

?>