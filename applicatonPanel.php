
<?php
include 'conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>AMDC | Admin</title>
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
      .my{
position:relative;
top:20px;
      }
      .my h5{
        color:#1061f0;
        font-weight:bold;
      }
      .cardi ul{
        list-style:none;
      }
      .cardi ul li{
        position:relative;
        top:20px;
        padding-top:20px;
      }
      .cardi{
  border:1px solid #1061f0 ;
  height:300px;
  border-radius:5px;
  opacity:0.6;
  font-weight:bold;
}
ul{
  list-style: none;
}
.li{
color:#1061f0 ;
font-weight:bold;
font-size:15px;
}
.lop{
    position:relative;
    left:20px;
}
.contentis h3{
    color:white;
    padding:20px;
    font-weight:bold;
}
a{
  text-decoration:none;
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

@media screen and (max-width: 600px) {
 .events{
  position:relative;
  top:50px;
 }
 
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    
  <header style='background-color: #1061f0' class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><span class='cv' style='font-weight:30px;'> <img src='images/cucom.png' width='50px' height='50px' />
 AMDC </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item mt-4">
            <a class="nav-link active" aria-current="page" href="applicationPanel.php">
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
            <a class="nav-link" href="userChange.php">
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
        <h1 class="h2">Dashboard</h1>
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
      <div class='container mt-5'>
        <div class='row justify-content-center'>
            <div class='col-md col-md-8'>
                <!-- cads  -->
            <div class='cardi'>
            <ul>
                <?php 
               $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT * From users where email ='$email'");
                $rows = mysqli_fetch_assoc($query);
                ?>
                        <li><span class='li'>Name</span>&nbsp;:&nbsp;<span class='lop'><?php echo $rows['name'] ?></span></li>
                        <li><span class='li'>Email</span>&nbsp;:&nbsp;<span class='lop'><?php echo $rows['email'] ?></span></li>
                        <li><span class='li'>Number</span>&nbsp;:&nbsp;<span class='lop'><?php echo $rows['number'] ?></span></li>
                        <li><span class='li'>Address</span>&nbsp;:&nbsp;<span class='lop'><?php echo $rows['address'] ?></span></li>
                        <li>
                            <a href='enroll.php'>
                            <button class='btn btn-primary'>Enroll Now</button>
                            </a>
                        </li>

                    </ul>

            </div>
            <div class='my'>
              <h5>My Applications</h5>
              <table class='table table-striped'>
                <thead>
                  <th>Program Name</th>
                  <th>Program Code</th>
                  <th>Application Status</th>
                </thead>
                <tbody>
                  <?php 
                  $query = mysqli_query($conn,"SELECT * FROM applications where email = '$email'");
                  if (mysqli_num_rows($query)) {
                    while ($rows = mysqli_fetch_assoc($query)) {
                      ?>
            <tr>
              <td><?php echo $rows['program'] ?></td>
              <td><?php echo $rows['code'] ?></td>
              <td><?php
                  
                  if ($rows['status'] == 'Not Verified') {
                    # code...?>
                    <p class='text-danger'>Pending...</p>
                    <?php
                  }else{?>
                    <p class='text-success'>Approved</p>

                    <?php
                  }
                  ?></td>
            </tr>
                      <?php
                    }
                  }else{
                    ?>
                    <p class='alert alert-danger' style='position:absolute;top:80px;'>No Application available! <span><a href='enroll.php'>Apply Now</a></span></p>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>
            <div class='col-md col-md-4'>
            <div class='events'>
            <div class="loader"></div>

       <div class='contentis'>
            <h3>
            Incoming Events <i class="fa-solid fa-calendar-days"></i>
            </h3>
            <div>
          <ul style='position:relative;top:20px'>
          <?php
              $query = mysqli_query($conn, "SELECT * FROM `events` ORDER BY created DESC LIMIT 3 ");
              if (mysqli_num_rows($query)>0) {
                while ($rows = mysqli_fetch_assoc($query)) {
                  ?>
          <li>
                <span class='hello' style='color:white;'><i class="fa-solid fa-calendar"></i> <?php echo $rows['dates'] ?></span><br />
                <span style='color:white; font-weight:bold'><?php echo $rows['title'] ?></span>
                <hr>
              </li>
            
            <?php
                }
              }else{?>
                <p style='position:relative;top:-20px' class='alert alert-default'><?PHP echo 'No Events available!'?></p>
              <?php
            }
            ?>
            
            <a href='events.php'>            <li style='color:white;position:relative;left:100px;'>More  <i class="fa-solid fa-arrow-right"></i></li></a>

          </ul>
            </div>
          </div>
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
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
 
  </body>
</html>
