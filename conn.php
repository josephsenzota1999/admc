<?php 
    $conn = mysqli_connect('localhost','root','','admc');
    session_start();
    $_SESSION['success'] = 'Successfully Added';
    if ($conn) {
        
    }else{
        echo 'Connection fail to database';
    }