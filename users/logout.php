<?php

include('../connection/connection.php');
session_start();

if(session_destroy()){
    unset($_SESSION['username']);
    unset($_SESSION['account_id']);
    unset($_SESSION['last_name']);
    unset($_SESSION['first_name']);
    header("Location: login.php");
    exit();
}

?>