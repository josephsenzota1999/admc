<?php 
include 'conn.php';
if(isset($_POST['submit'])){
    $errors = array();
    $title = $_POST['title'];
    $desc = $_POST['desc'];
  
    if (empty($desc) || empty($title)) {
      array_push($errors, 'Field required!');

    }else{
    $query = mysqli_query($conn, "SELECT * FROM anno where title = '$name'");
    $rows =mysqli_fetch_assoc($query);
    if ($rows['title'] == $title) {
        array_push($errors, 'Annoucements already exist!');
    }else{
        $query = mysqli_query($conn, "INSERT INTO anno(title,desci)values('$title','$desc')");
        if ($query) {
            header('location:anno.php');
        }else{
            array_push($errors,'Fail to insert to database');
        }
    }}
}
?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Admin | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel='stylesheet' href='style.css' />
<script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .titles{
        border:1px solid gray;
        border-radius:4px;
      }
      .titles h4{
        padding-top:20px;
        padding-left:20px;
        font-weight:bold;
        color:gray;
      }
      .titles p{
        padding-top:20px;
        padding-left:20px;
      
        color:gray;
      }
      .solid{
  color: gray;
}
.nav-item .nav-link:hover{
  color:#1061f0;
font-weight:600;
}
      .description{
        border:1px solid gray;
        border-radius:4px;
        position:relative;
        top:40px;
        height:300px;
      }
      .description h4{
        padding-top:20px;
        padding-left:20px;
        font-weight:bold;
        color:gray;
      }
      .description p{
        padding-top:20px;
        padding-left:20px;
        color:gray;  
      }
      .action{
        position: relative;
        bottom:20px;
        left:20px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    
  <header style='background-color: #1061f0' class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><span class='cv' style='font-weight:30px;'>AMDC
</span><sup>
    Online
</sup></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
        .solid{
  color: gray;
}
.nav-item .nav-link:hover{
  color:#1061f0;
font-weight:600;
}

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Annoucements</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>
      <!-- Buttr modal -->
    

      <?php 
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT id,title,desci,created FROM anno where id='$id'");
    if (mysqli_num_rows($query)>0) {
        while ($rows = mysqli_fetch_assoc($query)) {
            ?>

            <div class='titles'>
            <h4>Note Title</h4>
           <p> <?php echo $rows['title'] ?></p>
            </div>
            <div class='description'>
            <h4>Annoucement Description</h4>
<p><?php echo $rows['desci'] ?></p>
            </div>
               <div class='action'>
               <p> <span> <a href='updateAnno.php?id=<?php echo $rows['id'] ?>'><i class="fa-solid fa-pen-to-square alert alert-warning"></i></a></span> 
               &nbsp; &nbsp; 
                <span> <a href='deleteAnno.php?id=<?php echo $rows['id'] ?>'><i class="fa-solid fa-trash alert alert-danger"></i></a></span></p>
                <p class='text-primary' style='float:right;position:relative;margin-left:-70px;margin-top:-70px;font-weight:bold'>Created on <?php echo $rows['created'] ?> </p>
               </div>
            <?php
        }
    }else{?>
    
        <p class='alert alert-danger'><?php    #echo ' No notes available, Please take one !';
 ?>
    <?php
    }
    ?>
    </p>
    <?php
        if (!empty($errors)) {
            foreach($errors as $error){?>
            <p class='alert alert-danger'>
                <?php 
                    echo $error;
                ?>
            </p>
            <?php
            }
        }
      
    ?>
            </div>
        </div>
      </div>
    </main>
  </div>
</div>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
 
  </body>
</html>
