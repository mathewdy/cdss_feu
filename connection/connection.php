<?php

$conn = new mysqli ("localhost", "root" , "", "cdss");

if($conn == false){
    echo "not connected". $conn->error;
}

?>