<?php
session_start();
if(isset($_SESSION['u'])&& isset($_SESSION['p'])&& isset($_SESSION['role']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="index.css">
   <style>
     
  

  table{
   text-align:center;
   color:#FFFFE0;
    background:linear-gradient(#30142b, #2772a1);
    border-color:whitesmoke;
        border-radius: 10px;
        box-shadow: 0 0 10px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
   
    margin-left:450px;
  }
 body
 {
   text-align:center;
   color: rgba(222, 14, 21, 0.679);
 }

body {
      background-image: url('');
      }
           
</style>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>

<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="home.php"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="./favicon.png"
                alt="Icon"
                style="width: 30px; height: 30px"
              />
            </div>
            <h1 class="m-0 text-primary">TENANT</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="home.php" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>

              <a href="payment.php" class="nav-item nav-link">Payment</a>
              <a href="profile.php" class="nav-item nav-link">Profile</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Property</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="property-list.html" class="dropdown-item"
                    >Property List</a
                  >
                  <a href="property-type.html" class="dropdown-item"
                    >Property Type</a
                  >
                  <a href="property-agent.html" class="dropdown-item"
                    >Property Agent</a
                  >
                </div>
              </div>

              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="logout.php" class="btn btn-primary px-3 d-none d-lg-flex">Log out</a>
          </div>
        </nav>
      </div>
       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

<?php
 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
 {
    echo"Connection faield";
 }

 echo"<h1>  &nbsp </h1> <br><br>";
 

 echo"<h3> Plumber List</h3>";
 $r=$c->query("SELECT * FROM househelpers WHERE JobDoing='Plumber'");

 if($r->num_rows >0)
 { 
    if ($r->num_rows > 0)
    {
      echo "<table border='1'><tr><th>Name</th><th>Mobile_Number</th><th>Address</th><th>JobDoing</th></tr>";
      while ($row = $r->fetch_assoc())
      {
         echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["MobileNo"] . "</td><td>" . $row["Adderss"] . "</td><td>". $row["JobDoing"] . "</td></tr>";
      }
      echo "</table>";
     } 
  }
  
  echo"<h3> Electrician List</h3>";
  $r=$c->query("SELECT * FROM househelpers WHERE JobDoing='Electrician'");
 
  if($r->num_rows >0)
  { 
     if ($r->num_rows > 0)
     {
       echo "<table border='3'><tr><th>Name</th><th>Mobile_Number</th><th>Address</th><th>JobDoing</th></tr>";
       while ($row = $r->fetch_assoc())
       {
          echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["MobileNo"] . "</td><td>" . $row["Adderss"] . "</td><td>". $row["JobDoing"] . "</td></tr>";
       }
       echo "</table>";
      } 
   }

   echo"<h3> HouseChef List</h3>";
  $r=$c->query("SELECT * FROM househelpers WHERE JobDoing='HouseChef'");
 
  if($r->num_rows >0)
  { 
     if ($r->num_rows > 0)
     {
       echo "<table border='3'><tr><th>Name</th><th>Mobile_Number</th><th>Address</th><th>JobDoing</th></tr>";
       while ($row = $r->fetch_assoc())
       {
          echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["MobileNo"] . "</td><td>" . $row["Adderss"] . "</td><td>". $row["JobDoing"] . "</td></tr>";
       }
       echo "</table>";
      } 
   }

   echo"<h3> HouseMaid List</h3>";
  $r=$c->query("SELECT * FROM househelpers WHERE JobDoing='HouseMaid'");
 
  if($r->num_rows >0)
  { 
     if ($r->num_rows > 0)
     {
       echo "<table border='3'><tr><th>Name</th><th>Mobile_Number</th><th>Address</th><th>JobDoing</th></tr>";
       while ($row = $r->fetch_assoc())
       {
          echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["MobileNo"] . "</td><td>" . $row["Adderss"] . "</td><td>". $row["JobDoing"] . "</td></tr>";
       }
       echo "</table>";
      } 
   }
} 
else{
   header("location:index.html");
}
 ?>