<?php


ob_end_flush();

?>
<?php
ob_start();
session_start();
include('.././connection/connection.php');
$user_id = $_SESSION['account_id'];
$first_name = $_SESSION['first_name'];
$ln = $_SESSION['last_name'];
$_SESSION['username'];
if(empty($_SESSION['account_id'])){
    echo "<script>window.location.href='login.php'</script>";   
}
$q_user = "SELECT image FROM users WHERE account_id = $user_id";
$q_run = mysqli_query($conn, $q_user);
if(mysqli_num_rows($q_run) > 0){
    foreach($q_run as $rows){
        $image = $rows['image'];
    }
}


if(isset($_GET['patient_id'])){
    $patient_id = $_GET['patient_id'];

    $query_delete = "DELETE FROM infants WHERE patient_id = '$patient_id'";
    $run = mysqli_query($conn,$query_delete);

    if($run){
        header('location: home.php');
    }else{
        echo "error" . $conn->error;
    }

}

?>