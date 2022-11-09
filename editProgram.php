<?php 
include 'conn.php';
if(isset($_POST['submit'])){
    $errors = array();
    $id = $_GET['programId'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $venue = $_POST['venue'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    if (empty($code) || empty($name) || empty($category) || empty($venue) || empty($start) ||empty($end)) {
      array_push($errors, 'Field required!');

    }else{
        $query = mysqli_query($conn, "UPDATE programes SET code='$code',  name='$name',  category='$category',  venue='$venue',  start='$start',  end='$end' where programId = '$id'");
        if ($query) {
            header('location:programes.php');
        }else{
            array_push($errors,'Fail to insert to database');
        }
    }
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
      .solid{
  color: gray;
}
.nav-item .nav-link:hover{
  color:#1061f0;
font-weight:600;
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
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              <i class="fa-solid fa-gauge"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="programes.php">
              <span data-feather="file"></span>
              <i class="fa-solid fa-book solid"></i> Programes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appView.php">
              <span data-feather="shopping-cart"></span>
              <i class="fa-solid fa-file solid"></i> Applications
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anno.php">
              <span data-feather="users"></span>
              <i class="fa-solid fa-scroll solid"></i> Annoucements
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">
              <span data-feather="bar-chart-2"></span>
              <i class="fa-solid fa-calendar-days  solid"></i> Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">
              <span data-feather="bar-chart-2"></span>
              <i class="fa-solid fa-newspaper  solid"></i> News & Updates
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Settings</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
         
          <li class="nav-item">
            <a class="nav-link" href="change.php">
              <span data-feather="file-text"></span>
              <i class="fa-solid fa-eye  solid"></i> Change password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span data-feather="file-text"></span>
              <i class="fa-solid fa-right-from-bracket  solid"></i> Logout
            </a>
          </li>
        
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Programes</h1>
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
      <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
            <?php  
            $id = $_GET['programId'];
            $query = mysqli_query($conn, "SELECT * FROM programes where programId = '$id'");
$rows = mysqli_fetch_assoc($query);
            ?>
            <form method='post'>
        <div class="input-group mb-3 xx">
        <input id='ones' type="text" class="form-control" name='code' value='<?php echo $rows['code'] ?>' placeholder="Program Code"  aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3 xx">
        <input id='ones' type="text" class="form-control" name='name' value='<?php echo $rows['name'] ?>' placeholder="Program Name"  aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3 xx">
        <input id='ones' type="text" class="form-control" name='category' value='<?php echo $rows['category'] ?>' placeholder="Venue"  aria-describedby="basic-addon2">

        </div>
        <div class="input-group mb-3 xx">
           
        <input id='ones' type="text" class="form-control" name='venue' value='<?php echo $rows['venue'] ?>' placeholder="Venue"  aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3 xx">
        <input id='ones' type="date" class="form-control" name='start' placeholder="Starting" value='<?php echo $rows['start'] ?>'  aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3 xx">
        <input id='ones' type="date" class="form-control" name='end' placeholder="Ending" value='<?php echo $rows['end'] ?>'  aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3 xx">
        <input id='ones' type="submit" class="btn btn-primary" value='Edit Programe' name='submit' placeholder="Ending"  aria-describedby="basic-addon2">
        </div>
        </form>
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
