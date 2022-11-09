<?php 

include 'conn.php';
if(isset($_POST['submit'])){
    $errors = array();
    $name = $_POST['name'];

    $program = $_POST['program'];
    $code = $_POST['code'];
    $dob = $_POST['dob'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fax = $_POST['fax'];
    $position = $_POST['position'];
    $sponsor = $_POST['sponsor'];
    $sposition = $_POST['sposition'];
    $sphone = $_POST['sphone'];
    $semail = $_POST['semail'];
    $admin = $_POST['admin'];
    if (empty($program) || empty($code) || empty($dob) || empty($company) || empty($phone) || empty($email) || empty($fax) || empty($position) || empty($sponsor) || empty($sphone) || empty($sposition) || empty($semail)) {
      array_push($errors, 'Field required!');
    }else{
    $query = mysqli_query($conn, "SELECT * FROM applications where program = '$program'");
    $rows =mysqli_fetch_assoc($query);
    if ($rows['program'] == $program) {
        array_push($errors, 'Program already enrolled!');
    }else{
        $query = mysqli_query($conn, "INSERT INTO applications(program,dob,code,company,ephone,email,fax,position,sName,sPosition,sPhone,sEmail,applicant)
        values
        ('$program','$code','$dob','$company','$phone','$email','$fax','$position','$sponsor','$sposition','$sphone','$semail','$admin')");
        if ($query) {
            include 'mailApp.php';
            header('location:mailApp.php');
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
    <title>User | Dashboard</title>
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
.li{
color:#1061f0 ;
font-weight:bold;
font-size:15px;
}
.lop{
    position:relative;
    left:20px;
}
.conts{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    position:relative;
}
.conts h5{
    color:#1061f0 ;
    font-weight:bold;
}
.container1{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
}
.form-control{
    padding:13px;
}
.form-label{
  color: gray;
}
h4{
    color:#1061f0;
    font-weight:bold;
}
.conts{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    position:relative;
}
.fgh{
    font-size:15px;
    color:#1061f0;
    font-weight:bold;
}
.spinner-border{
  display:none;
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
.contaier1{
  display:flex;
  flex-direction:column;
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
.label{
  position:relative;
  top:-20px;
  left:32px;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    
  <header style='background-color: #1061f0' class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><span class='cv' style='font-weight:30px;'> <img src='images/cucom.png' width='50px' height='50px' />
  AMDC  </a>
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
        <h1 class="h2">Applications</h1>
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

    <div class='container mt-4'>
        <div class='row justify-content-center'>
            <div class='col-md-8'>
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
                <form method='POST'>

                <div class='conts'>
       
                <h5>Application Form</h5>
                <a href='student.php'>
                <button  class='btn btn-primary'>Back</button>
                </a>
                </div>
                <label for="exampleFormControlInput1" class="form-label">Program Name</label>
<br/>                      <input type="text" class="form-control mb-4" placeholder='Program Name'  name='program' aria-describedby="basic-addon2">
                    <div class='container1'>    
                    <!-- <label for="exampleFormControlInput1" class="form-label label1">Date</label>    -->
                    <input type="date" class="form-control  mb-3" name='date' placeholder="Date" name='password' aria-describedby="basic-addon2">
                    <label for="exampleFormControlInput1" class="form-label label">Code</label>

                    <input type="text" class="form-control  mb-3" placeholder="Code" name='code' aria-describedby="basic-addon2">
                    </div>
                    <div class='container1 mt-4'>
                    <!-- <label for="exampleFormControlInput1" class="form-label label">Name</label>    -->

                                <input type="text" class="form-control mb-3" placeholder="Applicants Name" name='name' aria-describedby="basic-addon2">
                                <label for="exampleFormControlInput1" class="form-label label">DOB</label>   

                                <input type="date" class="form-control  mb-3" placeholder="Date of Birth" name='dob' aria-describedby="basic-addon2">
                     
                      </div>
                      <label for="exampleFormControlInput1" class="form-label">Company</label>

                      <input type="text" class="form-control" placeholder='Employee Company'  name='company' aria-describedby="basic-addon2">   
                      <br />

                      <div class='container1 mt-4'>
                      <!-- <label for="exampleFormControlInput1" class="form-label label">Phone</label>    -->
                                <input type="text" class="form-control " placeholder="Phone" name='phone' aria-describedby="basic-addon2"> 
                                <label for="exampleFormControlInput1" class="form-label label">Email</label>   
                                <input type="email" class="form-control" placeholder="Email" name='email' aria-describedby="basic-addon2">
                                <label for="exampleFormControlInput1" class="form-label label">Fax</label>   
                                <input type="text" class="form-control" placeholder="Fax" name='fax' aria-describedby="basic-addon2">
                      </div>
                      <br />
                      <label for="exampleFormControlInput1" class="form-label">Present Position</label>

                      <input type="text" class="form-control mb-4" placeholder='Present Position'  name='position' aria-describedby="basic-addon2">   
                        <p class='mt-3 fgh'>Employer / Sponsor</p>
                      
                      <div class='container1 mt-4'>
                      <!-- <label for="exampleFormControlInput1" class="form-label label">Name</label>    -->
                                <input type="text" class="form-control  mb-3" placeholder="Sponsor/Employer" name='sponsor' aria-describedby="basic-addon2">
                                <label for="exampleFormControlInput1" class="form-label label">Position</label>   

                                <input type="text" class="form-control  mb-3" placeholder="Position" name='sposition' aria-describedby="basic-addon2">
                      </div>
                      <div class='container1 mt-4'>
                      <!-- <label for="exampleFormControlInput1" class="form-label label">Phone</label>    -->
                                <input type="text" class="form-control  mb-3" placeholder="Phone" name='sphone' aria-describedby="basic-addon2"> 
                                <label for="exampleFormControlInput1" class="form-label label">Email</label>   
                                <input type="email" class="form-control  mb-3" placeholder="Email" name='semail' aria-describedby="basic-addon2"> 

                      </div>
                      <div class='container1 mt-4'>
                      
                      <input type="hidden" class="form-control" value='<?php echo $_SESSION['email'] ?>' name='admin' aria-describedby="basic-addon2">   

                      </div>
                  
                      <br>
                      <input type="submit" name='submit' class="btn btn-primary form-control" onclick='showSpinner()' value='Apply Now' aria-describedby="basic-addon2">

                </form>
     
            </div>
        </div>
    </div>
    <!-- <div class="loader"></div> -->

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

   document.getElementById("circle").onclick = function() {
  
    document.querySelector(".spinner-border").style.display:block;

}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
 
  </body>
</html>
