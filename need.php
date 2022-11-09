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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
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
.dompochi p{
font-size:25px;
}
hr{
  color:white;
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
.alert a{
  color:#1061f0;
}
.alert a:hover{
  color:white;
}
.alaa{
  position:relative;
  top:20px;
}
.titl h2{
font-weight:700;
color:#1061f0;
font-size:25px;
}
.titl p{
  color: #900C3F;
  font-weight:bold;
}
.contents p{
  color:gray;
  font-size:15px;
}
.breadcrumb .breadcrumb-item{
  color:white;
  font-weight:bold;
}
.slideIn{
  animation-name:slide;
  animation-duration:1s;
}
@keyframes slide {
 0%{
  left:-1000px;
 }
 100%{
  left:15px;
 }
}
  @media screen and (max-width: 600px) {
    .leo{
      display:none;
    }
  .bb{
    display:block;
    position:relative;
    left:110px;
  }
  .dompochi h4{
    font-size:15px;
    position:relative;
    /* right:2px; */
  }
  .contents p{
  font-size:14px;
}
  .dompochi p{
    font-size:18px;
    display:none;
  }}
  
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

      </a>    </div>
  </div>
</nav>
 <!-- Banners -->
  <!-- Banners -->
  <div class='banners'>
  <img class='imf' src='img/icsa.jpg' width='190px' height='203px' />
  <img class='imfs' src='img/aa.jpg' width='190px' height='203px' />
    <div class='rows justify-content-center dompochi'>
       
    <h4>AFRICAN MANAGEMENT DEVELOPMENT <span class='bb'>CENTRE</span> </h4>
     <p>The Need</p>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
          <li class="breadcrumb-item active" aria-current="page">The Need</li>
        </ol>
      </nav>
    </div>
  </div>

  <br /><br />
  <div class='container alaa'>
  <div class='row justify-content-center'>
      <div class='col-md-4'>
      <div class="alert alert-success slideIn" role="alert">
     <a href='about.php'>
     Background
     </a>
    </div>
      <div class="alert alert-success  slideIn" role="alert">
      <a href='mission&vision.php'>
     Mission & Vision
     </a>      </div>
      <div class="alert alert-success  slideIn" role="alert">
      <a href='value&objectives.php'>
     Value & Objectives
     </a>      </div>
      <div class="alert alert-success  slideIn" role="alert">
      <a href='need.php'>
     The need
     </a>      </div>

      </div>
      <div class='col-md-8'>
        <div class='titl'>
          <h2>
            The Need
          </h2>
          <p>The Need
.</p>
        </div>
        <div class='contents'>
          <p>
          Over the past two decades, there has been a marathon rush to organizations and 
staff to acquire skills, both in the public and private sectors recognized that the 
skills profiles of their organizations did not meet the needs of today or future 
operations through the provision of appropriate and productive learner ship 
programmes. Employers can contribute towards making their organization 
Result Oriented Organizations. With this in mind, the African Management 
development centre recognizes the need to develop a life long culture of learning; 
build management and to improve skills in the informal sector and assist in the 
re-engineering processes in organizations. <br /><br />
Some of the highlights of our skills strategies include: e-business investing in 
people, skills development and employment, delivering learner ship, high 
performance work, poverty alleviation and human resources development, 
public administration, conflict resolution, environmental impact assessment, 
international finance, urban and rural studies and privatization, restructuring 
and decentralization in the public sector.
          </p>
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
$(document).ready(function () {
    $('#example').DataTable();
});
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
</html>