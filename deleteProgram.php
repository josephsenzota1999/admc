
<?php
include 'conn.php';
    $id = $_GET['programId'];
    $query = mysqli_query($conn, "DELETE FROM programes where programId = '$id'");
    header('location:programes.php');