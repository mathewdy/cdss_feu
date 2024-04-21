<?php
ob_start();
session_start();
include('../../connection/connection.php');
$_SESSION['account_id'] = $account_id_user;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create patient</h1>
    <a href="../home.php">Home</a>


    <form action="" method="POST">
        <label for="">First Name:</label>
        <input type="text" name="first_name_infant">
        <br>

        <label for="">Middle Name:</label>
        <input type="text" name="middle_name_infant">
        <br>

        <label for="">Last Name:</label>
        <input type="text" name="last_name_infant">
        <br>

        <label for="">Suffix:</label>
        <input type="text" name="suffix_infant">
        <br>

        <label for="">Date of Birth:</label>
        <input type="datetime-local" name="date_of_birth_infant" id="">

        <br>


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

        <label for="">Suffix:</label>
        <input type="text" name="suffix_mother">
        <br>

        <h2>Address</h2>

        <label for="">House Number:</label>
        <input type="text" name="house_number_mother">

        <br>

        <label for="">Street:</label>
        <input type="text" name="street_mother">
        <br>

        <label for="">Subdivision:</label>
        <input type="text" name="subdivision_mother">
        <br>

        <label for="">Barangay:</label>
        <input type="text" name="brgy_mother">

        <br>
        <label for="">City:</label>
        <input type="text" name="city_mother">
        <br>

        <label for="">Region:</label>
        <input type="text" name="region_mother">
        <br>

        <label for="">Zip Code:</label>
        <input type="text" name="zip_code_mother">
        <br>

        <input type="checkbox" name="" id="">
        <label for="">Same address for father</label>

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
        
        <h2>Address</h2>

        <label for="">House Number:</label>
        <input type="text" name="house_number_father">

        <br>

        <label for="">Street:</label>
        <input type="text" name="street_mother_father">
        <br>

        <label for="">Subdivision:</label>
        <input type="text" name="subdivision_father">
        <br>

        <label for="">Barangay:</label>
        <input type="text" name="brgy_father">

        <br>
        <label for="">City:</label>
        <input type="text" name="city_father">
        <br>

        <label for="">Region:</label>
        <input type="text" name="region_father">
        <br>

        <label for="">Zip Code:</label>
        <input type="text" name="zip_code_father">
        <br>
        

<!-- Modal or stepper patapusin mo lang code ko sa registration tapos ang usapan -->

        <input type="submit" name="create_patient" value="Save">
    </form>
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
    $date_of_birth_infant = $_POST['date_of_birth_infant'];

    $first_name_mother = $_POST['first_name_mother'];
    $middle_name_mother = $_POST['middle_name_mother'];
    $last_name_mother = $_POST['last_name_mother'];
    $date_of_birth_mother = $_POST['date_of_birth_mother'];
    $suffix_mother = $_POST['suffix_mother'];

    $house_number_mother = $_POST['house_number_mother'];
    $street_mother = $_POST['street_mother'];
    $subdivision_mother = $_POST['subdivision_mother'];
    $brgy_mother = $_POST['brgy_mother'];
    $city_mother = $_POST['city_mother'];
    $region_mother = $_POST['region_mother'];
    $zip_code_mother = $_POST['zip_code_mother'];

    $first_name_father = $_POST['first_name_father'];
    $middle_name_father = $_POST['middle_name_father'];
    $last_name_father = $_POST['last_name_father'];
    $date_of_birth_father = $_POST['date_of_birth_father'];
    $suffix_father = $_POST['suffix_father'];

    $house_number_father = $_POST['house_number_father'];
    $street_father = $_POST['street_father'];
    $subdivision_father = $_POST['subdivision_father'];
    $brgy_father = $_POST['brgy_father'];
    $city_father = $_POST['city_father'];
    $region_father = $_POST['region_father'];
    $zip_code_father = $_POST['zip_code_father'];

    $account_id_infant = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    $account_id_mother = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    $account_id_father = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;



    //subject to change
    $query_check_infant = "SELECT * FROM infants WHERE account_id='$account_id_infant' AND first_name = '$first_name_infant' AND middle_name = '$middle_name_infant' AND last_name = '$last_name' AND birthday = '$date_of_birth' ";
    $query_check_infant = mysqli_query($conn,$query_check_infant);

    if(mysqli_num_rows($query_check_infant) > 0){
        echo "infant already added";
    }else{

    $query_create_patient = "INSERT INTO infants (account_id,first_name,middle_name,last_name,suffix,birthday,id_mother_parent,id_father_parent,id_remarks,date_created,date_updated,modified_by) VALUES ('$account_id_infant','$first_name_infant','$middle_name_infant','$last_name_infant','$suffix_infant','$date_of_birth_infant','$account_id_mother,'$account_id_father', '0', '$date' , '$date' , "$account_id_user" )";
    $query_run_create = mysqli_query($conn,$query_create_patient);

    }


    //subject to change
    


}


ob_end_flush();
?>
