<?php

ob_start();
session_start();
include('../../connection/connection.php');


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
            <img src="../../src/img/FEU_Tamaraws_official_logo.png" alt="Feu_Tamaraw" height="50">
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
        <h1>Patients</h1>

        <input type="text" name="search_patient" placeholder="Search Patient"> 

        <a href="create-patient.php">Add Patient</a>

    </main>





</body>
</html>

<?php

ob_end_flush();

?>