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
<link rel='stylesheet' href='style.css' />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
.alaa{
  position:relative;
  top:20px;
}
.alert a{
  color:#1061f0;
}
.alert a:hover{
  color:white;
}
.titl h2{
font-weight:700;
color:#1061f0;
}
.breadcrumb .breadcrumb-item{
  color:white;
  font-weight:bold;
}
.dompochi p{
font-size:25px;
}
.titl p{
  color: #900C3F;
  font-weight:bold;
}
.contents p{
  color:gray;
}
#show{
  display:none;
}
@media screen and (max-width: 600px) {
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
  <span class='mail'> <i class="fa-solid fa-envelope"></i> icsaamdcarusha@gmail.com </span>&nbsp;
  <span class='mail l'> <i class="fa-solid fa-phone"></i> +255-766-999773 &nbsp;</span>
  <span class='mail'><span style='font-weight:bold;'> Fax </span>+255732979497</span>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
  <!-- Banners -->
  <!-- Banners -->
  <div class='banners'>
    <div class='rows justify-content-center dompochi'>
      <!-- <img class='imf' src='img/nners.jpg' width='150px' height='50px' /> -->
       
       <h4>AFRICAN MANAGEMENT DEVELOPMENT CENTRE </h4>
     <u><p>Background</p></u>
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
  <div class='container alaa'>
    <div class='row justify-content-center'>
      <div class='col-md-4'>
      <div class="alert alert-success" role="alert">
     <a href='about.php'>
     Background
     </a>
    </div>
      <div class="alert alert-success" role="alert">
      <a href='mission&vision.php'>
     Mission & Vision
     </a>      </div>
      <div class="alert alert-success" role="alert">
      <a href='value&objectives.php'>
     Value & Objectives
     </a>      </div>
      <div class="alert alert-success" role="alert">
      <a href='need.php'>
     The need
     </a>      </div>

      </div>
      <div class='col-md-8'>
        <div class='titl'>
          <h2>
            Background
          </h2>
          <p>Background.</p>
        </div>
        <div class='contents'>
          <p>
          AMDC is a skill based & professional development enhancement organization, 
with a strong focus on sharpening the skills of existing public and corporate 
sector employees.
The African Management Development Centre is a world-class capacity building 
organization established to provide human skill development globally. The Africa 
Management Centre was started in 1976 by a consortium of Non-Government 
organizations in the East and Southern African Region in order to respond to the
 
7
need to build a pool of Senior Executives and Administration Managers whom the 
region would rest the important responsibility for speeding of the region plans 
for Socioeconomic Development. Its core mission is to support Governments, 
Civil Society Organizations and the Private sector to enhance the productive 
capabilities of their human capital for sustained productivity and performance in 
the context of sustainable development and the attainment of the Millennium 
Development Goals. Our continuing professional development programs (CPDP)
are responsive to the needs of organizations from more than 130 countries.<span id='show'>
<br />
AMDC prides itself on successfully integrating capacity building and CPDP with 
client consulting services to create a successful sustainable development 
partnership. We believe that development projects and transactions are 
measured not only by the advice provided, but also the capacity developed for 
our clients, be they public or private sector corporate clients. AMDC strives to 
transfer the core tools and managerial know-how to our clients, to enable them 
to manage their projects satisfactorily to meet perceived objectives.<br /><br />
AMDC as an International Development Institute for Leadership, Management 
and Technology offers over 150 different courses. We have served over 23000
participants from a range of countries including Australia, Bangladesh, Belgium, 
Benin, Botswana, Burkina Faso, Canada, Ethiopia, Germany, Ghana, Kenya, 
Liberia, Malawi, Morocco, Mozambique, Namibia, Nepal, Netherlands,
Nigeria, Pakistan, Rwanda, Sierra Leone, Sweden, Tanzania, Trinidad and Tobago, 
Tunisia, Turkey, United Kingdom, Uganda, Somalia, Rwanda, Burundi United
States and Zimbabwe. AMDC provides relevant, effective and sustainable 
capacity development solutions. We focus on the relevance, effectiveness and 
sustainability of initiatives, institutional arrangements, systems, tools and 
processes.<br />
</span>


<button class='btn btn-primary'  onclick="myFunction()">More...</button>
          </p>
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
$(document).ready(function () {
    $('#example').DataTable();
});

function myFunction() {
  var x = document.getElementById("show");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
</html>