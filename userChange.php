<?php 
include 'conn.php';
if(isset($_POST['submit'])){
    $errors = array();
  $email = $_SESSION['email'];
  echo $email;
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
  if (empty($pass) || empty($cpass)) {
    array_push($errors, "Field required!");
  }else if ($pass != $cpass) {
    array_push($errors, "Password didn't match!");
  }else{
    $query = mysqli_query($conn, "UPDATE users set password = '$pass' where email ='$email'");
    header('location:index.php');
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
    <!-- Bootstrap core CSS --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet' href='style.css' />
</head>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js'></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ffffff;
  transition: opacity 0.75s, visibility 0.75s;
  z-index: 1000;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 75px;
  height: 75px;
  border: 15px solid #dddddd;
  border-top-color: #1061f0;
  border-radius: 50%;
  animation: loading 0.75s ease infinite;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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
      <a class="nav-link px-3" href="logout,php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item mt-3">
            <a class="nav-link active" aria-current="page" href="applicatonPanel.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="enroll.php">
              <span data-feather="file"></span>
              Application
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
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Change password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span data-feather="file-text"></span>
              Logout
            </a>
          </li>
        
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Change Password</h1>
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
      <div class='contaier alaa mt-5'>
    <div class='row justify-content-center'>

        <div class='title mb-4'>
        <center>
            <h5>
               
            </h5>
            </center>
        </div>
        <div class="loader"></div>

      <div class='col-md-4 vv'>
        <form method='Post'>
      
        <div class="input-group mb-2">
        
           <p style='color:#1061f0;font-weight:bold;font-size:16px'>Enter New password</p>
         
        </div>

        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="password"  class="form-control" placeholder="Password" name='password' aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="cpassword"  class="form-control" placeholder="Confirm Password" name='cpassword' aria-describedby="basic-addon2">
        </div>
      
        <div class="input-group mb-3">
        <input type="submit" style='height:52px;width:500000px;' class="btn btn-primary form-control" value='Change' name='submit' aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-2 ml-5">
          
</div>
        </form>
        <?php
        if (!empty($errors)) {
            foreach($errors as $error){?>
            <p class='alert alert-danger'>
                <?php 
                    echo $error;
                ?>
                <span></span>
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
         window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
$(document).ready(function () {
    $('#example').DataTable();
});
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
 
  </body>
</html>
