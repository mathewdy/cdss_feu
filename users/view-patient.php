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
    <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/hh66v9nxb8r5lqopiz2zr5m37mfer93964ycvrhwdbazox0d/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

<a href="home.php">Back</a>

<a href="">Assessments</a>

<h1>Demographic Profile:</h1>

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

                    <label for="">First Name:</label>
                    <input type="text" name="patient_first_name" value="<?php echo $row_patient['patient_first_name']?>" readonly>

                    <label for="">Middle Name:</label>
                    <input type="text" name="patient_middle_name" value="<?php echo $row_patient['patient_middle_name']?>" readonly>

                    <label for="">Last Name:</label>
                    <input type="text" name="patient_last_name" value="<?php echo $row_patient['patient_last_name']?>" readonly>

                    <label for="">Suffix: </label>
                    <input type="text" name="patient_suffix" value="<?php echo $row_patient['patient_suffix']?>">

                    <label for="">Suffix: </label>
                    <input type="text" name="patient_suffix" value="<?php echo $row_patient['patient_suffix']?>">

                    <label for="">Date of Birth: </label>
                    <input type="text" name="patient_date_of_birth" value="<?php echo $row_patient['patient_date_of_birth']?>">

                    <label for="">Date of Birth: </label>
                    <input type="text" name="patient_date_of_birth" value="<?php echo $row_patient['patient_date_of_birth']?>">

                    <label for="">Gender: </label>
                    <input type="text" name="patient_gender" value="<?php echo $row_patient['patient_gender']?>">

                    <label for="">Marital Status: </label>
                    <input type="text" name="patient_marital_status" value="<?php echo $row_patient['patient_marital_status']?>">

                    <img src="<?php echo "patients/infant_images/". $row_patient['patient_image']?>" alt="patient image" style="height: 150px; width: 150px;">

                    <h3>Emergency Contact </h3>
                    <label for="">Full Name:</label>
                    <label for=""><?php echo $row_patient['mothers_first_name']. " " . $row_patient['mothers_last_name']?></label>
                    <label for="">Contact Number:</label>
                    <label for=""><?php echo $row_patient['mothers_contact_number']?></label>

                    <form action="" method="POST" enctype='multipart/form-data'>
                        <textarea><?php if(empty($row_patient['remarks_assessments'])){
                                ?>
                                    <table>
                                            <thead>
                                                <!-----bold to-->
                                                <tr><b>Assessment</b></tr>
                                                <tr>
                                                    <td>Time of birth: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>APGAR SCORE: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Appearance: ___________ </td>
                                                </tr>
                                                <tr>
                                                    <td>Pulse: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Grimace: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Activity: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Respiration: ___________</td>
                                                </tr>
                                                <tr>
                                                    <!------semi bold--->
                                                    <td>Vital Signs:</td>
                                                </tr>
                                                <tr>
                                                    <td>Pulse Rate: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Respiratory Rate: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Temperature: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td> Weight: ___________</td>
                                                </tr>
                                                <tr>
                                                    <td>Height: ___________</td>
                                                </tr>
                                                <!----Semi bold-->
                                                <tr>
                                                    <td>Vaccines:</td>
                                                </tr>
                                                <!-----pag dating sa vaccine dapat naka bullet form---->
                                                <tr>
                                                    <td>Hepa B</td>
                                                    <td>DTap</td>
                                                    <td>Vitamin K</td>
                                                </tr>

                                                <!---semi bold--->
                                                <tr>
                                                    <td>Medication:</td>
                                                </tr>
                                                <tr>
                                                    <td>Erythromycin Eye Ointment</td>
                                                </tr>

                                                <tr>
                                                    <td>NURSE IN CHARGE: ______________________________ </td>
                                                </tr>
                                                <tr>
                                                <td>ATTENDING PHYSICIAN: _____________________________</td>
                                                </tr>

                                                <tr>
                                                    <td>MONTHLY DEVELOPMENT AND CHECK UP OF THE CLIENT:</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        1ST Month

                                                        Diet:
                                                            Vital Signs:
                                                            Pulse Rate: 
                                                            Respiratory Rate: 
                                                            Temperature: 
                                                            Weight: 
                                                            Height: 
                                                            Laboratory:  
                                                            Medication Given:
                                                            Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        2nd Month
                                                            Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        
                                                        3rd Month
                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        
                                                        4th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        
                                                        5th Month
                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:


                                                    </td>
                                                    <td>
                                                        6th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    
                                                    
                                                    </td>
                                                    <td>
                                                        7th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        
                                                        8th Month
                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                
                                                    </td>
                                                    <td>
                                                        9th Month
                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:

                                                    </td>

                                                    <td>
                                                        10th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        11th Month
                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        12th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                    <td>
                                                        
                                                        13th Month

                                                        Diet:
                                                                Vital Signs:
                                                                Pulse Rate: 
                                                                Respiratory Rate: 
                                                                Temperature: 
                                                                Weight: 
                                                                Height: 
                                                                Laboratory:  
                                                                Medication Given:
                                                                Doctor’s Note:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                <?php
                            }else{
                                echo $row_patient['remarks_assessments'];
                            }
                            ?>
                        </textarea>
                        <input type="submit" name="create_cdss_patient" value="Save">
                    </form>
                <?php
            }
        }
    }
?>


<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    height:'1000',
    width:'1500',
    table_sizing_mode: 'relative',
    table_default_attributes: {
    border: '5'
    },
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fontzie' ,
    default_font_stack: [ '-apple-system', 'Arial' ]
  });
</script>
    
</body>
</html>

