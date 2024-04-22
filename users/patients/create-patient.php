<?php
ob_start();
session_start();
include('../../connection/connection.php');
echo $_SESSION['account_id'] ;
//error_reporting(E_ERROR | E_PARSE);

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

    <a href="javascript:void(0)" class="add-more-form">Add</a>

    <form action="" method="POST" enctype='multipart/form-data'>

        
        <h2>Infant</h2>

        <div class="main-form">
        <label for="">Patient ID:</label>
        <input type="number" name="patient_id[]">
        <br>
        <label for="">First Name:</label>
        <input type="text" name="first_name_infant[]">
        <br>
        <label for="">Middle Name:</label>
        <input type="text" name="middle_name_infant[]">
        <br>
        <label for="">Last Name:</label>
        <input type="text" name="last_name_infant[]">
        <br>
        <label for="">Suffix:</label>
        <input type="text" name="suffix_infant[]">
        <br>
        <label for="">Date of Birth:</label>
        <input type="date" name="date_of_birth_infant[]" id="">
        <br>
        <label for="">Gender:</label>
        <select name="gender_infant[]" id="">
            <option value="">-Select-</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>
        <br>
        <label for="">Marital Status:</label>
        <select name="marital_status_infant[]" id="">
            <option value="">-Select-</option>
            <option value="1">Single</option>
            <option value="2">Married</option>
            <option value="3">Divorced</option>
            <option value="4">Separated</option>
        </select>
        <br>
        <label for="">Image:</label>
        <input type="file" name="image_infant[]" multiple="">
        <br>
        </div>


    <div class="paste-new-forms"></div>

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

        <h2>Address</h2>

        <label for="">Address:</label>
        <input type="text" name="address_mother">

        <br>

        <label for="">Image:</label>
        <input type="file" name="image_mother" multiple="">
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

        <label for="">Address:</label>
        <input type="text" name="address_father">
        <br>
        
        <label for="">Image:</label>
        <input type="file" name="image_father" multiple="">
        <br>

        <!-- stepper
        1. Infant
        2. Mother
        3. Father
        4. Save
        patapusin mo lang code ko -->

        <input type="submit" name="create_patient" value="Save">
    </form>


    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>

    <script>
        $(document).ready(function () {


            $(document).on('click', '.remove-button' , function(){
                $(this).closest('.main-form').remove();
            });


            $(document).on('click', '.add-more-form', function (){
                $('.paste-new-forms').append('<div class="main-form">\
                    <label for="">Patient ID:</label>\
                    <input type="number" name="patient_id[]">\
                    <br>\
                    <label for="">First Name:</label>\
                    <input type="text" name="first_name_infant[]">\
                    <br>\
                    <label for="">Middle Name:</label>\
                    <input type="text" name="middle_name_infant[]">\
                    <br>\
                    <label for="">Last Name:</label>\
                    <input type="text" name="last_name_infant[]">\
                    <br>\
                    <label for="">Suffix:</label>\
                    <input type="text" name="suffix_infant[]">\
                    <br>\
                    <label for="">Date of Birth:</label>\
                    <input type="date" name="date_of_birth_infant[]" id="">\
                    <br>\
                    <label for="">Image:</label>\
                    <label for="">Gender:</label>\
                    <select name="gender_infant[]" id="">\
                        <option value="">-Select-</option>\
                        <option value="1">Male</option>\
                        <option value="2">Female</option>\
                    </select>\
                    <br>\
                    <label for="">Marital Status:</label>\
                    <select name="marital_status_infant[]" id="">\
                        <option value="">-Select-</option>\
                        <option value="1">Single</option>\
                        <option value="2">Married</option>\
                        <option value="3">Divorced</option>\
                        <option value="4">Separated</option>\
                    </select>\
                    <br>\
                    <input type="file" name="image_infant[]" multiple="">\
                    <br>\
                    <input type="submit" class="remove-button" name="remove_infant" value="Remove" >\
                    </div>\
                    ');
            });

        });
    </script>
</body>
</html>


<?php
if(isset($_POST['create_patient'])){

    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $patient_id = $_POST['patient_id'];
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
        $data_patient_id = $patient_id [$key];
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
            $query_infant = "INSERT INTO infants (patient_id,first_name,middle_name,last_name,suffix,date_of_birth,gender,marital_status,image,id_mother_parent,id_father_parent,id_remarks,date_created,date_updated,modified_by) VALUES ('$data_patient_id','$data_first_name_infant','$data_middle_name_infant','$data_last_name_infant','$data_suffix_infant','$data_date_of_birth_infant','$data_gender_infant','$data_marital_status_infant','".$value."', '$account_id_mother','$account_id_father','0','$date','$date', '$account_id_user')";
            $result_infant = mysqli_query ($conn,$query_infant);

            echo "added infant";

            
        }
    }

    $first_name_mother = $_POST['first_name_mother'];
    $middle_name_mother = $_POST['middle_name_mother'];
    $last_name_mother = $_POST['last_name_mother'];
    $date_of_birth_mother = $_POST['date_of_birth_mother'];
    $address_mother = $_POST['address_mother'];

    //image
    $image_mother = $_FILES['image_mother']['name'];
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image_mother']['name'];

    $query_check_mother = "SELECT * FROM mothers WHERE first_name = '$first_name_mother' AND middle_name ='$middle_name_mother' AND last_name = '$last_name_mother' AND date_of_birth = '$date_of_birth_mother' AND address = '$address_mother' ";
    $result_check_mother = mysqli_query($conn,$query_check_mother);
    if(mysqli_num_rows($result_check_mother) > 0){
        echo "error inserting mother, already added";
    }else{
        $query_mother = "INSERT INTO mothers (first_name,middle_name,last_name,date_of_birth,address,image,date_created,date_updated,modified_by) VALUES ('$first_name_mother', '$middle_name_mother','$last_name_mother', '$date_of_birth_mother','$address_mother','$image_mother','$date', '$date', '$account_id_user' )";
        $result_mother = mysqli_query($conn,$query_mother);
    
        if($result_mother) {
            move_uploaded_file($_FILES["image_mother"]["tmp_name"], "mother_images/".$_FILES["image_mother"]["name"]);
            echo "added mother";
        }
    }

    // foreach($patient_id as $key => $value){
    //     $data_patient_id = $patient_id [$key];
        
    // }
   

    
}

ob_end_flush();
?>
