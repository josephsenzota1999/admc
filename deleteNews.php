
<?php
include 'conn.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM news where id = '$id'");
    header('location:news.php');