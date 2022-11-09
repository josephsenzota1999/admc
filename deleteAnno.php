
<?php
include 'conn.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM anno where id = '$id'");
    header('location:anno.php');