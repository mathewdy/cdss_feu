<?php
ob_start();
session_start();
include('../../connection/connection.php');
echo $_SESSION['account_id'] ;


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

        <label for="">Address:</label>
        <input type="text" name="address_mother">

        <br>

        <input type="checkbox" name="" id="">
        <label for="">Same address for father</label>

        <h2>Infant</h2>

        <div class="main-form">
        <label for="">Patient ID:</label>
        <input type="text" name="patient_id[]">
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
        </div>
        <br>
        <label for="">Image:</label>
        <input type="file" name="image_infant[]" multiple="">
        <br>
       

        <div class="paste-new-forms"></div>


        
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
        

        <!-- stepper
        1. Mother
        2. Infant
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
                    <input type="text" name="patient_id[]">\
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

    $first_name_infant = $_POST['first_name_infant'];
    $image_infant = $_FILES['image_infant']['name'];


    foreach($image_infant as $key => $value){
        $image_infant = $_FILES['image_infant']['name'][$key];
        $img_path = "infant_images/".$image_infant;
        $tmp_name= $_FILES['image_infant']['tmp_name'][$key];
        move_uploaded_file($tmp_name, $img_path);
        $data_first_name_infant = $first_name_infant[$value];
        $insert = "INSERT INTO infants (first_name,image) VALUES ('$data_first_name_infant','".$value."')";
        $result = mysqli_query ($conn,$insert);
        echo "added";
    }





    // $middle_name_infant = $_POST['middle_name_infant'];
    // $last_name_infant = $_POST['last_name_infant'];
    // $suffix_infant = $_POST['suffix_infant'];
    // $date_of_birth_infant = $_POST['date_of_birth_infant'];

    // $patient_id = $_POST['patient_id'];
    
    // foreach($first_name_infant as $index => $data){
    //     $data_first_name_infant = $first_name_infant[$index];

    //     $query_check_infant = "SELECT * FROM infants WHERE account_id='$account_id_infant' AND first_name = '$first_name_infant' AND middle_name = '$middle_name_infant' AND last_name = '$last_name' AND birthday = '$date_of_birth' first_name = '$data_first_name_infant'";
    //     $query_check_infant = mysqli_query($conn,$query_check_infant);

    //     if(mysqli_num_rows($query_check_infant) > 0){
    //         echo "infant already added";
    //     }else{
    //         $query_create_patient = "INSERT INTO infants (account_id,first_name,middle_name,last_name,suffix,birthday,id_mother_parent,id_father_parent,id_remarks,date_created,date_updated,modified_by) VALUES ('$account_id_infant','$data_first_name_infant','$middle_name_infant','$last_name_infant','$suffix_infant','$date_of_birth_infant','$account_id_mother','$account_id_father', '0', '$date' , '$date' , '$account_id_user')";
    //         $query_run_create = mysqli_query($conn,$query_create_patient);
    //         echo "added";
    //     }

    

    //     }
    


    

    // $first_name_mother = $_POST['first_name_mother'];
    // $middle_name_mother = $_POST['middle_name_mother'];
    // $last_name_mother = $_POST['last_name_mother'];
    // $date_of_birth_mother = $_POST['date_of_birth_mother'];
    // $suffix_mother = $_POST['suffix_mother'];

    // $address_mother = $_POST['address_mother'];

    // $first_name_father = $_POST['first_name_father'];
    // $middle_name_father = $_POST['middle_name_father'];
    // $last_name_father = $_POST['last_name_father'];
    // $date_of_birth_father = $_POST['date_of_birth_father'];
    // $suffix_father = $_POST['suffix_father'];

    // $house_number_father = $_POST['address_father'];
    

    

    // $account_id_mother = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;

    // $account_id_father = "2024".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;


    // 


    // //subject to change
    // 

    // if(mysqli_num_rows($query_check_infant) > 0){
    //     echo "infant already added";
    // }else{

    // //subject to change

    
    // }


    


}


ob_end_flush();
?>
