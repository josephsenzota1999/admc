<?php 
include 'conn.php';
$id = $_GET['id'];
$queri = mysqli_query($conn, "SELECT * FROM applications where id ='$id'");
$rows = mysqli_fetch_assoc($queri);
if ($rows['status']=='Not Verified') {
    $query = mysqli_query($conn, "UPDATE applications set status='Verified' where id ='$id'");
    header('location:appView.php');

}else{
    $query = mysqli_query($conn, "UPDATE applications set status='Not Verified' where id ='$id'");
    header('location:appView.php');

   
}

