
<?php
include 'conn.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM events where id = '$id'");
    header('location:events.php');