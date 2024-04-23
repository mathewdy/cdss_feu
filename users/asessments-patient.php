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


<?php

ob_end_flush();
?>