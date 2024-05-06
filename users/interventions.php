<?php
ob_start();
session_start();
include('.././connection/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php




?>

<a href="view-patient.php">Back</a>

<h2>Interventions</h2>

<form action="" method="POST" enctype='multipart/form-data'>

<textarea name="interventions" id="checklist">
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">1st Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
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
                            <li>1.</li>
                            <li>2.</li>
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</textarea>

<input type="submit" name="create_interventions" value="Save">
</form>

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
</body>
</html>



<?php

if(isset($_POST['create_interventions'])){

    $interventions = $_POST['interventions'];
    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $query_intervention = "INSERT INTO interventions (name,date_created,date_updated) VALUES ('$interventions','$date', '$date')";
    $run_interventions = mysqli_query($conn,$query_intervention);

    if($run_interventions){
        echo "added intervention";
    }else{
        echo "error intervention" ;
    }

}




ob_end_flush();


?>