<?php 
include 'conn.php';
// include 'getData.php';
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

$num_per_page = 04;
$start_from = ($page-1)*04;


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
  opacity:0.9;
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
  opacity: 0.9;
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
  margin-left:1050px;
  margin-top:-3px;
  border-radius:0px;

}
.imfs{
  z-index:100;
  opacity:0.1;
  position:absolute;
  margin-left:100px;
  margin-top:-3px;
  border-radius:0px;
}
.mr{
  font-size:14px;
  color:#f0106c;
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
.dis{
  position: relative;
  margin-left:-50px;
}
.dis a{
    color:#1061f0;

}
.dis p{
  font-size:14px;
}
.imgs01{
  position: relative;
  left:20px;
  top:20px;
  border-radius:4px;
}
.dompochi{
    background-color:#1061f0;
    color:white;
    height:200px;
    display:flex;
    flex-direction:column;
    align-items:center;
}
.dompochi h4{
font-weight:bold;
}
.card{
  height:350px;
  position:relative;

}
.card{
  width:290px;
  position:relative;
  left:28px;
display: flex;
  /* top:29px; */
}
.card:hover{
  box-shadow:0px 0px 1px 1px  #e3e0e0 ;
}
.car{
  display:flex;
  flex-direction:row;
  justify-content:space-around;
}
.echos{
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  position:relative;
  left:10px;
  /* top:20px; */
}
.echos p{
  color:gray;
  font-weight:bold;
  position:relative;
  top:8px;
  padding-right:19px;
  font-size:12px;
  top:-5px;
}
.echos button{
position:relative;
  left:22px;
}
.imgs01{
  position: relative;
  left:20px;
  top:20px;
  border-radius:4px;
}
.titles p{
  position: relative;
  top:55px;
  color:#1061f0;
  font-weight:700;
  padding-left:19px;
  padding-right:19px;
}
.dompochi p{
font-size:25px;
font-weight:600;
color:
}
hr{
  color:white;
}
.alaa{
  position:relative;
  top:20px;
}
.nners{
  z-index:200px;
  position:relative;
  left:500px;
  opacity:0.5;
}
.breadcrumb .breadcrumb-item{
  color:white;
  font-weight:bold;
}
.contes p{
  position:relative;
  left:10px;
  top:5px;
  color:#1061f0;
  font-weight:600;
}
.loader{
  position:fixed;
  top:0;
  left:0;
  width:100vw;
  height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background-color:#ffffff;
  transition: opacity 0.75s, visibility 0.75s;


}
.ss{
  display:flex;
  flex-direction:row;#

}
.rows{
display:flex;
flex-direction:column;
}
@media screen and (max-width: 600px) {
  .bb{
    display:block;
    position:relative;
    left:110px;
  }
  .dompochi h4{
    font-size:15px;
    position:relative;
    right:26px;
  }
  .dompochi p{
    font-size:18px;
    display:none;
  }
 
}
@keyframes imf {
  0% {opacity:0;}
  100% {opacity:0;}
}

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
       <a href='application.php'>
       <button class="btn btn-outline-primary" type="submit">Login</button>
       </a>
    </div>
  </div>
</nav>
  <!-- Banners -->
  <div class='banners'>
  <img class='imf' src='img/icsa.jpg' width='190px' height='203px' />
  <img class='imfs' src='img/aa.jpg' width='190px' height='203px' />


    <div class='rows justify-content-center dompochi'>
       <h4>AFRICAN MANAGEMENT DEVELOPMENT <span class='bb'>CENTRE</span></h4>
     <p>News & Updates</p>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
          <li class="breadcrumb-item active" aria-current="page">News & Updates</li>
        </ol>
      </nav>
       </div>
      
    </div>
  </div>
 
  <div class='contaier alaa mt-4'>
    <div class='row justify-content-center'>
      <div class='col-md col-md-8 ss'>
      <div class="container">
  <div class="row">
    <div class="col-6 col-sm-3  flex-md-row">
    <?php   
        $rowperpage = 3;
        //count number of news
        $allcount_query = "SELECT count(*) as allcount from news";
        $allcount_result = mysqli_query($conn, $allcount_query);
        $allcount_fetch = mysqli_fetch_array($allcount_result);
        $allcount = $allcount_fetch['allcount'];

        $query = mysqli_query($conn, "select id,image,description,title,cast(created AS date),cast(created AS Time) from news order by created  desc limit $start_from,$num_per_page");
        if (mysqli_num_rows($query)>0) {
          while ($row = mysqli_fetch_assoc($query)) {
            
            ?>
          <div class='rows'>
          <a href='newsDetails.php?id=<?php echo $row['id'] ?>'>
          <div class='card mt-4'>
            <div class='image'>
            <img src="./images/<?php echo $row['image']; ?>" width='288px'>
        </div>
        <div class='contes'>
          <p><?php echo $row['title'] ?></p>

         </div>
        <div class='echos'>
          <i>      <p><span><i class="fa-solid fa-calendar" ></i> <?php echo $row['cast(created AS date)'] ?></span>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                <span><i class="fa-solid fa-clock"></i> <?php echo $row['cast(created AS Time)'] ?></span>
        </p></i>
            </div>
     
      
        </div>
          </a>
          </div>
        <?php
          }
         ?>
          <!-- <p class='mimis'>More News & Update</p> -->
         <?php
        }

        $query = "SELECT * FROM news";
        $per_result = mysqli_query($conn,$query);
        $totalRecord = mysqli_num_rows($per_result);
        
        $total_page = ceil($totalRecord/$num_per_page);
        for ($i=1; $i < $total_page ; $i++) {
          echo "<a class='btn btn-primary' href='userNews.php?page=".$i."'>$i</a> ";
        }

        ?>
    </div>
   
  </div>
</div>
        </div>
        <div class='col-md col-md-4'>
        <div class='titles1'>
          <p class='tit'>Latest Annoucements</p>
          <?php
            $query = mysqli_query($conn, "SELECT * FROM anno order by created LIMIT 5");
            if (mysqli_num_rows($query)>0) {
              while ($rows = mysqli_fetch_assoc($query)) {
                ?>

<div class='container mb-3'>
            <div class='row justify-content-center'>
              <div class='col-md col-md-4'>
                <img style='position:relative;left:30px;' src='img/pdf.png' width='60px' height='60px' />
              </div>
              <div class='col-md col-md-8'>
                <div class='dis'>
                <a href="uploads/<?php echo $rows['title']; ?>" download>  <p class='dis1'><?php echo $rows['desci'] ?></p></a> &nbsp; &nbsp;
                <p class='dis2 ' style='position:absolute;margin-top:-10px'><i class="fa-solid fa-calendar"></i> <?php echo $rows['created'] ?></p>

                </div>
              </div>

            </div>
          </div>
<?php
              }
?>
<center>
  <a href='userAnno.php'><p class='mr'>More Annoucements <i class="fa-solid fa-arrow-right"></i></p></a>
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
  <div class="loader"></div>

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

$(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
</html>