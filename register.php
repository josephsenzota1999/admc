<?php 
include 'conn.php';
if(isset($_POST['submit'])){
    $errors = array();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if ( empty($name) || empty($email) || empty($password)) {
      array_push($errors, 'Field required!');

    }else{
    $query = mysqli_query($conn, "SELECT * FROM users where name = '$name'");
    $rows =mysqli_fetch_assoc($query);
    if ($rows['name'] == $name) {
        array_push($errors, 'Account already exist!');
    }else{
        $query = mysqli_query($conn, "INSERT INTO users(name,email,password)values('$name','$email','$password')");
        if ($query) {
            header('location:application.php');
        }else{
            array_push($errors,'Fail to insert to database');
        }
    }}
}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet' href='style.css' />

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
font-size:25
px;
}
hr{
  color:white;
}
.alaa{
  position:relative;
  top:20px;
}
h5{
    color:#1061f0;
    font-weight:bold;
    font-size:25px;
}
p{
    color:#1061f0;
}
.pp{
    align-items:right;
}
input{
    padding-top:10px;
    padding-bottom:10px;

}
.it{
  display:none;
}
.fa-solid{
  color:gray;
  position:relative;
  top:20px;
  right:40px;
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
.bbv{
  display:none;
}
.it{
  display:block;
}
 input{
  width:20px;
  height:50px;
 }
}
</style>
<body>


<div class='laa'>
  <div class='contaier alaa mt-5'>
    <div class='row justify-content-center'>

        <div class='title mb-4'>
        <center>
            <img class='mb-2' src='img/logos.png' width='70px' height='70px' />
            <h5>
                AMDC online application panel
            </h5>
            </center>
        </div>
      <div class='col-md-4'>
        <form method='Post'>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="text" class="form-control" placeholder="Full Name" name='name' aria-describedby="basic-addon2"><i class="fa-solid fa-user"></i>
        </div>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="email" class="form-control" placeholder="Email" name='email' aria-describedby="basic-addon2"><i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="text" class="form-control" placeholder="Phone" name='phone' aria-describedby="basic-addon2"><i class="fa-solid fa-phone"></i>
        </div>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="text" class="form-control" placeholder="Address" name='address' aria-describedby="basic-addon2"><i class="fa-solid fa-address-book"></i>
        </div>
        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;' type="password" class="form-control" placeholder="Password" name='password' aria-describedby="basic-addon2"><i class="fa-solid fa-eye"></i>
        </div>
    
        <div class="loader"></div>

        <div class="input-group mb-3">
        <input style='height:52px;border-radius:5px;width:20px;' type="submit" name='submit' class="btn btn-primary form-control" value='Register' aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-2 ml-5">
          <center>
          <a href='application.php'>
           <p class='pp'>Have an account login here !</p>
           </a>
          </center>
</div>
        </form>
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
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
</html>