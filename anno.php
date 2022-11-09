<?php 
error_reporting(0); 
// Include the database configuration file
include 'conn.php';
$statusMsg = '';
$errors = array();
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
  $query = mysqli_query($conn, "SELECT * FROM  anno");
$rows= mysqli_fetch_assoc($query);
if ($rows['desci'] == '$title' ) {
 array_push($errors,'field required');
}elseif(empty($title)){
  array_push($errors,'field required');

}
  $title = $_POST['title'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into anno (title,desci ,file) VALUES ('".$fileName."','$title' ,NOW())");
            if($insert){
              array_push($errors,'Annoucement has been uploaded successfully');

                // $statusMsg = "Annoucement ".$fileName. " has been uploaded successfully.";
            }else{
              array_push($errors,'File upload failed, please try again.');

                // $statusMsg = "File upload failed, please try again.";
            } 
        }else{
          array_push($errors,'Sorry, there was an error uploading your file.');

            // $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}

// Display status message
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
}
.solid{
  color: gray;
}
.nav-item .nav-link:hover{
  color:#1061f0;
font-weight:600;
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
      <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md'>
            <button type="button" style='float:right;margin-bottom:20px' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa-solid fa-plus"></i>  Create Annoucements
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Programe</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="anno.php" method="post" enctype="multipart/form-data">        
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" name='title' id="exampleFormControlInput1" placeholder="Annoucement Title">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrition</label>
  <input type="file" class="form-control" name='file' id="fileToUpload" placeholder="Annoucement Title">

</div>
<div class="mb-3">
  <input type="submit" class="btn btn-primary" name='submit' id="exampleFormControlInput1" value='Create'>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
        <tr>
                <th>Title</th>
                <th>File</th>
                <th>Created</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
          <?php
          $query = mysqli_query($conn, 'SELECT * FROM anno');
          if (mysqli_num_rows($query)>0) {
            while ($rows = mysqli_fetch_assoc($query)) {
              ?>
      <tr>
      <td><?php echo $rows['desci'] ?></td>
      <td><?php echo $rows['title'] ?></td>
          <td><?php echo $rows['created'] ?></td>
          <td>
          <a href="uploads/<?php echo $rows['title']; ?>" download>  <i  class="fa-solid fa-download btn btn-primary"></i></a>

            <a href='deleteAnno.php?id=<?php echo $rows['id'] ?>' class='btn btn-danger'> <i class="fa-solid fa-trash"></i></a>
          </td>
        
      </tr>

              <?php
            }
          }
          ?>
         
        </tbody>
    </table>
   
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
<div class="loader"></div>

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
