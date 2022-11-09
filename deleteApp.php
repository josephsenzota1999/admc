
<?php
include 'conn.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM applications where id = '$id'");
    header('location:appView.php');