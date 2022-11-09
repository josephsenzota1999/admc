<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

 include 'conn.php';
  $sql = "SELECT image FROM news WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($conn);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>
