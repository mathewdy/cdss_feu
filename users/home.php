<?php
ob_start();
session_start();
include('.././connection/connection.php');
$_SESSION['account_id'] . '<br>';
$_SESSION['first_name']. '<br>';
$_SESSION['last_name'] . '<br>';
$_SESSION['username'] . '<br>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="../src/img/FEU_Tamaraws_official_logo.png" alt="Feu_Tamaraw" height="50">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="user_pic">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container p-5">
        <h1 class="h2">Welcome to home page</h1>
        <hr class="featurette-divider">

        <a href="../users/patients/patients.php">Patients</a>


        <h3>total number of patients</h2>

        <!--logo ng feu-->
        <h3>total number of nurse</h3>

        <h3>total number of doctor</h3>
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>

<?php

ob_end_flush();


?>