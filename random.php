<?php
include ('connection/connection.php');

$query_patient_id_mother = "SELECT * FROM infants WHERE id_mother_parent = '20246641 '";
    $run_patient_id_mother = mysqli_query($conn,$query_patient_id_mother);

    if(mysqli_num_rows($run_patient_id_mother) > 0){
        foreach($run_patient_id_mother as $row_patient_id_mother){
            echo $row_patient_id_mother['patient_id'] . "<br>";
        }
    } 

?>