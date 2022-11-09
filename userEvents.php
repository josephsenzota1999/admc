<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMDC</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
  .carousel .carousel-item {
  height: 400px;
}
.training{
  background-color: #1061f0 ;
  padding-top:25px;
  padding-bottom:25px;
  color:white;
}
.financal{
  background-color:  #f0106c ;
  padding-top:25px;
  padding-bottom:25px;
  color:white;
}
ul{
  list-style:none
}
/* ul li{
  padding-top:20px;
  position: relative;
  margin-left:-47px;
} */
.footer{
  background-color:#10497e;
  color:#fff;
  height:100px;
  position:relative;
 margin-top:145px;
}
.ft h3{
  font-weight:700;

}
.center{
  font-weight:bold;
  font-size:35px;
  color: #1061f0;
  position:relative;
  top:20px;
}
.pare{
  
  color:#554d50;
  position:relative;
  top:30px;
}
.nav-link{
  color: #1061f0;
  font-weight:bold;
  padding-left:20px;
}
a{
  text-decoration:none;
  color:#554d50;
}
#nav{
  padding-left:20px;
}
.leo{
  background-color:#1061f0;
}
.leo .container a{
  color:white;
}
.nav-link .active{
  color: #1061f0;

}
.sasa h3{
  color: #1061f0;
  font-weight:bold;
  margin-bottom:20px;
  font-size:19px;
}
.mm{
  color:#1061f0;
  font-weight:600;
}
.more{
  color:#1061f0;
  font-weight:700;
}
.mores{
  color:#1061f0;
  font-weight:700;
  margin-top:-20px;
}
.anno{
  padding-top:20px;
}
.hello{
  color:#1061f0;
  font-size:20px;
}
.dropdown-item{
  color:#1061f0;
  font-weight:700;
}
.i{
  color:gray;
}
.lo ul li{
color:#1061f0;
font-weight:600;
align-items:right;
font-size:17px;
}
.copyright{
position:relative;
top:40px;
}
.h5s{
  font-weight:bold;
  position:relative;
  top:30px;
}
.imf{
  z-index:100;
  opacity:0.1;
  position:absolute;
  margin-left:1150px;
  margin-top:-2px;
  border-radius:0px;

}
.imfs{
  z-index:100;
  opacity:0.1;
  position:absolute;
  margin-left:100px;
  margin-top:-2px;
  border-radius:0px;
}
.dompochi{
    background-color:#1061f0;
    color:white;
    height:200px;
    display:flex;
    flex-direction:column;
    align-items:center;
}
.sasa h3{
  color: #1061f0;
  font-weight:bold;
  margin-bottom:20px;
  margin-left:100px;
}
.gg{
  font-size:20x;
}
.breadcrumb{
  position: relative;
  left:-10px;
}
.not{
  border:1px solid #1061f0;
  width:300px;
  padding-top:50px;
  padding-bottom:50px;
  border-radius:5px;
  font-weight:bold;

}
.more{
  color:#1061f0;
  font-weight:700;
  position: relative;
  left:120px;
}
.dompochi h4{
font-weight:bold;
}
.dompochi p{
font-size:23px;
font-weight:600;
color:
}
hr{
  color:white;
}
.alaa{
  position:absolute;
  margin-top:-25px;
}
.alert{
  background-color:#ffff;
  border-color:#1061f0;
  color:#1061f0;
  font-weight:600;
}
.alert:hover{
  background-color:#1061f0;
  border-color:#1061f0;
  color:white;
  font-weight:600;
}

.dis{
  position: relative;
  margin-left:-50px;
  top:15px;
}
.dis a{
    color:#1061f0;

}
.dis p{
  font-size:14px;
}
.titles1{
  color:#1061f0;
  font-weight:700;
  font-family:arial;
  font-size:20px;
}
.tit{
  position:relative;
  left:100px;
}
.alert a{
  color:#1061f0;
}
.alert a:hover{
  color:white;
}
.not p{
  color:gray;
  position: relative;
  left:48px;
}
.alaa{
  position:relative;
  top:20px;
}
.titl h2{
font-weight:700;
color:#1061f0;
}
.titl p{
  color: #900C3F;
  font-weight:bold;
}
.contents p{
  color:gray;
}
.breadcrumb .breadcrumb-item{
  color:white;
  font-weight:bold;
}
td{
  font-size:12x;
}
.te h5{
  color:#1061f0;
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
  .sasa{
    position:relative;
    top:60px;
    left:25px;
  }
  .gg{
    display:none;
  }
  .not{
    position:relative;
    left:-12px;
  }
  .col-md-4{
    position:relative;
    top:50px;
  }
  .dis{
    position:relative;
    left:110px;
    top:-30px;
  }
  .dd{
    top:2px;
 
  }
  .imf{
    display:none;
    position:absolute;
    margin-left:400px;
  }
  .dompochi h4{
    font-size:15px;
    position:relative;
    right:26px;
  }}
</style>
<body>
<nav id='leo' class="navbar leo">
  <div class="container">
  <a  class="" aria-current="page" href="#">
  <i class="fa-solid fa-envelope"></i> icsaamdcarusha@gmail.com &nbsp;
  <i class="fa-solid fa-phone"></i> +255-766-999773 &nbsp;
 <span style='font-weight:bold;'> Fax </span>+255732979497
  </a>
  <a class="" aria-current="page" href="#">
  <i class="fa-brands fa-square-facebook"></i>&nbsp; &nbsp;
  <i class="fa-brands fa-square-twitter"></i>&nbsp; &nbsp;
  <i class="fa-brands fa-instagram"></i>
  </a>

  </div>
</nav>
<nav style='padding-left:30px;padding-right:30px;' class="navbar navbar-expand-lg jana">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src='img/logos.png' height='50px' width='50px'>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Programes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="training.php">Training Programs</a></li>
            <li><a class="dropdown-item" href="financial.php">Financial Programs</a></li>
       
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="application.php">Admission</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contacts</a>
        </li>
      
      </ul>
        <button class="btn btn-outline-primary" type="submit">Login</button>
    </div>
  </div>
</nav>
<div class="loader"></div>

<div class='banners'>
  <img class='imf' src='img/icsa.jpg' width='190px' height='203px' />
  <img class='imfs' src='img/aa.jpg' width='190px' height='203px' />


    <div class='rows justify-content-center dompochi'>
       <h4>AFRICAN MANAGEMENT DEVELOPMENT <span class='bb'>CENTRE</span></h4>
     <p class='gg'>Incoming Events</p>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
          <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>
      </nav>
       </div>
      
    </div>
  </div>
  <br /><br />
  <div class='container alaa mb-5'>
    <div class='row justify-content-center'>
    <div class='col-md-8'>
      <div class='contaier alaa '>
    <div class='row justify-content-center'>
       <h5 class='mb-4' style='color:#1061f0; font-weight:700;position:relative;left:35px;'>Incoming Events</h5>
      <div class='col-md col-md-11'>
    <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
        <tr>
                <th>Event</th>
                <th>Date</th>
              
            </tr>
        </thead>
        <tbody>
          <?php
          $query = mysqli_query($conn, 'SELECT * FROM events');
          if (mysqli_num_rows($query)>0) {
            while ($rows = mysqli_fetch_assoc($query)) {
              ?>
      <tr>
      
          <td><?php echo $rows['title'] ?></td>
          <td><?php echo $rows['dates'] ?></td>
 
      </tr>

              <?php
            }
          }
          ?>
         
        </tbody>
    </table>
        </div>
    </div>
        </div>
      </div>
      <div class='col-md-4'>
      <div class='titles1'>
          <p class='tit'>Latest Annoucements</p>
          <?php
            $query = mysqli_query($conn, "SELECT desci,cast(created AS date),cast(created AS Time) FROM anno order by created LIMIT 5");
            if (mysqli_num_rows($query)>0) {
              while ($rows = mysqli_fetch_assoc($query)) {
                ?>

<div class='container mb-3'>
            <div class='row justify-content-center'>
              <div class='col-md col-md-4 dd'>
                <img style='position:relative;left:30px;'  class='dd' src='img/pdf.png' width='50px' height='50px' />
              </div>
              <div class='col-md col-md-8'>
                <div class='dis'>
                <a href="uploads/<?php echo $rows['title']; ?>" download>  <p class='dis1'  style='position:absolute;margin-top:-10px;left:20px'><?php echo $rows['desci'] ?></p></a>
                <p class='dis2 ' style='position:absolute;margin-top:12px;left:20px'><span><i class="fa-solid fa-calendar"></i> <?php echo $rows['cast(created AS date)'] ?></span> &nbsp;   <span><i class="fa-solid fa-clock"></i>  <?php echo $rows['cast(created AS Time)'] ?></span></p>

                </div>
              </div>

            </div>
          </div>
<?php
              }
?>
<center>
<a href='userAnno.php'><p class='mr'>More Events <i class="fa-solid fa-arrow-right"></i></p></a>
</center>
<?php
            }else{
              ?>
              <p style='color:#f0106c;font-size:14px;position:relative;left:100px;'>No Annoucements available!</p>
              <?php
            }
          ?>
      
        
        </div>
        
  </div>
 
          </div>



          </div>

      </div>
     
    </div>
  </div>

<!-- footer -->
<footer class='footer'>
<div class='container mt-5'>
<div class='row justify-content-center'>
<center>
<p class='copyright'>
Copyright © 2022 Arusha Development Management Center. All rights reserved
</p>


</center>
</div>
</div>
</footer>
  <!-- JavaScript Bundle with Popper -->
  <script>


   window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>
  <script>
$(document).ready(function () {
    $('#example').DataTable();
});
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
</html>