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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet' href='style.css' />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
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
.nav-item .nav-list a:hover{
color:gray;
}
.navbar{
  
}
.jk h5{
  color:#1061f0;
  font-weight:bold;
  font-size:23px;
}
.list ul{
  list-style:none;
}
.list ul li{
  padding-top:20px;
  color:#1061f0;
font-weight:600;
transition:1s;
}
.list ul li:hover{
 color:gray;
}
.not{
  border:1px solid #1061f0;
  width:300px;
  padding-top:50px;
  padding-bottom:50px;
  border-radius:5px;
  font-weight:bold;

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

.red{
  color:red;
  font-size:20px;
}
.not p{
  color:#1061f0;
  font-weight:bold;
}
.qq{
  font-size:29px;
  color:#1061f0;
}
/* .card{
  height:350px;
  position:relative;

} */
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
  top:5px;
  color:#1061f0;
  font-weight:700;
  padding-left:10px;
  padding-right:8px;
}
.mr{
  font-size:14px;
  color:#f0106c;
}
.mrs{
  font-size:14px;
  color:#f0106c;
  position:relative;
  top:30px;
  font-weight:700;
}
.dis a{
  color:#1061f0;
}
.card{
  width:290px;
  position:relative;
  left:28px;
  /* top:29px; */
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
.card:hover{
  box-shadow:0px 0px 1px 1px  #e3e0e0 ;
}
.slide-up{
  animation: slideText 1.4s ease;
}
.hov:hover{
  transition:0.23;
}
.dis{
  position: relative;
  margin-left:-50px;
}

.access ul li{
  color:#1061f0 ;
  font-weight:600;
  padding-top:28px;
}
.access ul li:hover{
  color:#f0106c;
  font-weight:600;
  padding-top:28px;
  transition: 0.6s ease;
}
.disc1{
  position: absolute;
  margin-top:100px;
}
.mimis{
  position:relative;
  top:400px;
  left:-200px;
}
.dis p{
  font-size:14px;
}
.car{
  display:flex;
  flex-direction:row;
  justify-content:space-around;
}
.imgs img{
  border-radius:5px;
}
.nov{
 display:flex;
 flex-direction:row;
}
.nov span{
  position:relative;
}
.contes p{
  position:relative;
  left:10px;
  top:5px;
  color:#1061f0;
  font-weight:600;
}
.jose{
  border:1px solid #1061f0;border-radius:50%;width:26%;height: 60px; width: 60px;display:flex;flex-direction:column;
}

@media screen and (max-width: 600px) {
  .mnm{
    
    position: relative;
    top:-250px;
    left:-50px;
  }
  .col-md img{
    width:333px;
    height:250px;
  }
  .not{
    position:relative;
    left:-12px;
  }
  .mt-3{
    position:relative;
    left:26px;
  }
  .imgs img{
    width:250px;
  }
 .card{
  height:420px;
 }
 .col-md .ano{
width:40px;
height:40px;
position:relative;
top:40px;
left:40px;
 }
 .col-md .dis{
  position:relative;
  left:140px;
  
 }

 .cirlce{
  width:20px;
  height:20px;
 }
.ffs{
  position:relative;
  top:-40px;
  left:-20px;
}
.mr{
  position:relative;
  top:-20px;
}

.eve{
  position:relative;
  top:5px;
}
.ex1{
  font-size:12px;
  position:relative;
  margin-left:-8px;
}
.card{
  display:flex;
  flex-direction:column;
}
.ex2{
  font-size:8px;
  position:relative;
  margin-left:-10px;
  margin-top:-6px;
}
.nov .jose{
  height:40px;
  width:40px;
  display:hidden;
}
.yu{
  position:relative;
  margin-top:-10px;
}
.nov{
  position:relative;
  left:30px;
}
.mrs{
  position:relative;
top: 5px;
left:-10px;

}
.bg{
  position:relative;
  top:20px;
}
}
@keyframes slideText{
  0% {
    transform: translateY(250px);
  }
  100%{
    transform: translateY(0);
  }
}
.lis ul li:hover{
  background-color:#1061f0;
  color:white;
  border-radius:4px;
  padding:15px;
}
.lis ul li{
  padding-bottom:20px;
  font-size:15px;
}
.lis{
  position: relative;
  left:55px;
}
.lis a{
  color:#1061f0;

}
</style>
<body>
<nav id='leo' class="navbar leo">
  <div class="container">
  <a  class="" aria-current="page" href="#">
  <span class='mail'> <i class="fa-solid fa-envelope"></i> icsaamdcarusha@gmail.com </span>&nbsp;
  <span class='mail l'> <i class="fa-solid fa-phone"></i> +255-766-999773 &nbsp;</span>
  <span class='mail'><span style='font-weight:bold;'> Fax </span>+255732979497</span>&nbsp;
  <span class='mail'><span style='font-weight:700;font-size:15px;'> Apply Now</span>

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
        <a href='application.php'><button class="btn btn-outline-primary" type="submit">Login</button></a>
    </div>
  </div>
</nav>
  <!-- Slideshow -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br />
  <!-- two buttons -->
  <div class='container hh slide-up'>
    <div class='row justify-content-center'>
      <div class='col-md col-md-6'>
        <center>
         <a href='training.php'>
         <div class='training'>
            <h5>
            Training Programes &nbsp;<i class="fa-solid fa-book"></i>
            </h5>
          </div>
         </a>
        </center>
      </div>
      <div class='col-md col-md-6'>
      <center>
      <a href='financial.php'>
      <div class='financal'>
            <h5>
            Financal Programes &nbsp;<i class="fa-solid fa-coins"></i>


            </h5>
          </div>
</a>
      </php>
      </center>
      </div>
    </div>
  </div>
</div>
  <br />
  <div class="loader"></div>

  <!-- <div class='container mt-5 mb-5 mnm'>
    <div class='row justify-content-center jk'>
      <center>
      <h3>Who we serve</h3>
      <p style='color:#f0106c;font-weight:600'>We provide servce to <i class="fa-thin fa-square-ring"></i></p>
    </center>
      <div class='col-md col-md-6'>
        <img src='img/organize.jpg' width='680px' height='430px' class='mt-3' />
      </div>
      <div class='col-md col-md-6'>
        <div class='list'>
          <ul>
            <li class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;Policy makers and Legislators </li>
            <li><i class="fa-regular fa-circle-check"></i> &nbsp;Government officials and Donors and NGOs </li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp; Business leaders and Executives and managers</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;State Governments and Local Authorities</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;The Health Sector and The Education Sector</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;The Oil Sector and The Finance Sector</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;The Communications Sector and The Energy Sector</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;Improved Governance through Monitoring and Evaluation</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;Integrated Financial Management Systems (IFMIS)</li>
<li  class='hov'><i class="fa-regular fa-circle-check"></i> &nbsp;Monitoring and Evaluation of PFM Reform Programmes</li>
          </ul>
        </div>
      </div>

    </div>
  </div> -->

  <!-- <div class='container mt-5 mb-5'>
    <div class='row justify-content-center jk'>
      <center><h3>Accreditations and Certifications</h3></center>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/a.png' width='100px' height='100px' />
      </div>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/b.png' width='100px' height='100px' />

      </div>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/c.jpg' width='100px' height='100px' />
      </div>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/e.png' width='100px' height='100px' />

      </div>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/h.jpg' width='130px' height='100px' />

      </div>
      <div class='col-md col-md-2 mt-5'>
      <img src='img/k.jpg' width='150px' height='100px' />

      </div>
</div>
</div> -->

    <!-- text content -->
<!-- <div class='container mt-5 mb-5'>
  <div class='row justify-content-center'>
  <center>
    <h5 class='center'>The Centre’s Organization and Autonomy </h5>
    </center>
<center>
  <p class='pare'>
The primary objective of the centre is to serve the growing needs of human 
resource development in Africa at affordable cost and offers possible solutions to 
the socio-economic problems faced by the developing countries.
  </p>
</center>
  </div>
</div> -->

<div class='container  mt-4 kk'>
<div class='row justify-content-center'>
    <div class='col-md col-md-4'>
        <div class='titles1'>
          <p class='tit'>Annoucements</p>
          <?php
            $query = mysqli_query($conn, "SELECT * FROM anno order by created LIMIT 5");
            if (mysqli_num_rows($query)>0) {
              while ($rows = mysqli_fetch_assoc($query)) {
                ?>

<div class='container mb-3 ffs'>
            <div class='row justify-content-center'>
              <div class='col-md col-md-4'>
                <img class='ano' src='img/new2.gif' width='60px' height='60px' />
              </div>
              <div class='col-md col-md-8'>
                <div class='dis'>
                <a href="uploads/<?php echo $rows['title']; ?>" download>  <p class='dis1'><?php echo $rows['desci'] ?></p></a>
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
      <div class='col-md col-md-4 eve'>
            <div class='titles1'>
              <p class='tit'>Incoming Events</p>
              <?php 
              
              $query = mysqli_query($conn, "SELECT * FROM events limit 5");
              if (mysqli_num_rows($query)>0) {
                while ($rows = mysqli_fetch_assoc($query)) {
                  $dates = $rows['dates'];
                  $explode=explode("-",$dates);
                  // echo $explode[0];
                 ?>

                    
                    <p >  
                    <div class='nov' style='display:flex;flex-direction:row;'>
                         <div class='jose'>
                                      <span class='ex1' style='position:relative;left:19px'>
                                          <?php 
                                          echo $explode[2];
                                          ?>
                                      </span>
                                    <span class='ex2' style='font-size:14px;position:relative;left:16px'>
                                          <?php 
                        
                                          $monthNum = $explode[1];
                                          $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
                                          $string = substr($monthName,0,3);
                                          echo $string;
                                          ?>
                                      </span>
                                    </div>
                                    &nbsp; &nbsp;
                                    <div>
                                    <span class='yu' style='font-size:15px;position:relative;top:13px'><?php echo $rows['title'] ?></span>
                                  </div>
                             </div>
                                          </p>  
                                    <?php
                                      }
                                      ?>
                      <center>
                        <a href='userEvents.php'><p class='mrs'>More Events <i class="fa-solid fa-arrow-right"></i></p></a>
                      </center>
                      <?php
              }else{
                ?>
                <p style='color:#f0106c;font-size:14px;position:relative;left:100px;'>No Events available!</p>
                <?php
              }
              ?>
            </div>
      </div>

      <div class='col-md col-md-4 bg'>
  
      <div class='titles1'>
              <p class='tit'>Quick Access</p>
              <div class='lis'>
              <ul>
               <a href='training.php'> <li><i class="fa-brands fa-accessible-icon"></i> Training Programes </li></a>
               <a href='financal.php'>  <li> <i class="fa-brands fa-accessible-icon"></i>  Financal Programes</li></a>
               <a href='value&objectives.php'><li><i class="fa-brands fa-accessible-icon"></i>  Value & Objectives</li></a>
               <a href='mission&vision.php'><li><i class="fa-brands fa-accessible-icon"></i> Mission & Vision</li></a>
               <a href='need.php'> <li><i class="fa-brands fa-accessible-icon"></i>  The Need</li></a>
               <a href='background.php'><li><i class="fa-brands fa-accessible-icon"></i>  Background</li></a>
               <a href='application.php'> <li><i class="fa-brands fa-accessible-icon"></i>  Apply Now</li></a>

              </ul>
              </div>
       </div>

    </div>
</div>

<div class='container mt-5 mb-5 mns'>
    <div class='row justify-content-center jk'>
      <center>
        <h5>News & Updates</h5>
        <p style='color:#f0106c;font-weight:600'>Latest news & update</p>
    </center>
      <div class='col-md col-md-12 car'>
                
      <?php
        $query = "select id,image,description,title,cast(created AS date),cast(created AS Time) from news";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?><a href='newsDetails.php?id=<?php echo $data['id'] ?>'>
        <div class='card mt-4'>
            <div class='image'>
            <img src="./images/<?php echo $data['image']; ?>" width='288px'>
        </div>
        <div class='contes'>
          <p><?php echo $data['title'] ?></p>

         </div>
        <div class='echos'>
          <i>      <p><span><i class="fa-solid fa-calendar" ></i> <?php echo $data['cast(created AS date)'] ?></span>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                <span><i class="fa-solid fa-clock"></i> <?php echo $data['cast(created AS Time)'] ?></span>
        </p></i>
            </div>
     
      
        </div>
        <?php
        }
        ?>
      </div>
      </a>
      <center>
  <a href='userNews.php'><p class='mrs'>More news & updates <i class="fa-solid fa-arrow-right"></i></p></a>
</center>
      </div>

    </div>
  </div>
  <div class='container'>
    <div class='row justify-content-center'>
      <div class='col-md col-md-12'>
     
<div class="your-class">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
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

<script>


   window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.logo-slider').slick({
        setting-name: setting-value
      });
    });
  </script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>