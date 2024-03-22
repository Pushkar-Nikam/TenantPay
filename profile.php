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
   <style>
 
  table{
    text-align:center;
    color:#FFFFE0;
    background:linear-gradient(#30142b, #2772a1);
        border-radius: 10px;
        border-color:whitesmoke;
        box-shadow: 0 0 100px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
   
    margin-left:350px;
  }
  
</style>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<style>
h3,h1
  {
    color:whitesmoke;
   text-align:center;
  }
  
  body 
           {
             text-align:center;
            background-color:color-mix(in srgb, whitesmoke 50%, lightblue 50%);
           }
          
  div
  {
     border: 1px;;
     background:transparent;  
  }         

 </style> 
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
              <a href="propertydisplay.php" class="nav-item nav-link">Properties</a>
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

 $r=$c->query("SELECT * FROM login WHERE Email_ID ='".$_SESSION['u']."'"." AND Password ='".$_SESSION['p']."'");
    if ($r->num_rows > 0)
    {
     /* echo "<table border='3'><tr><th>Name</th> <th>Mobile_Number</th><th>Address</th><th>Email_ID</th><th>Password</th><th>Role</th></tr>";
      while ($row = $r->fetch_assoc())
      {
         echo "<tr><td>" . $row["Name"] .  "</td><td>" . $row["Mobile_number"] ."</td><td>" . $row["Address"] . "</td><td>". $row["Email_ID"] . "</td><td>" . $row["Password"] . "</td><td>". $row["Role"] . "</td></tr>";
      }
      echo "</table>";
     } */
while($row=mysqli_fetch_assoc($r))
{   
  $image=$row['Photo'];
     echo " <div style='background:transparent; color:whitesmoke;  
        top: 20%;
        left: 30%;
        text-align: center;
        position: absolute;
        width: 500px;
        height:fixed;
        padding: 50px;
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 16px;
       '> 
       <h1> Profile </h1> <br>
       <img
       class='img-fluid'
       src='data:image/jpeg;base64,".$image."'
       alt='Icon'
       style='width: 90px; height: 100px;border-radius: 50%;'
       />  

           <h5 style= color:whitesmoke>
            Name:- <b><i>".$row["Name"]."</i></b> <br>
            Mobile Number:-<b><i>". $row["Mobile_number"]."</i></b><br>
            Address:- <b><i>". $row["Address"]."</i></b><br>
            Email-ID:- <b><i>". $row["Email_ID"]."</i></b><br>
            Password:- <b><i>". $row["Password"]."</i></b><br>
            Role:-<b><i>". $row["Role"]."</i><b><br>
            </div>
        ";
  }
}
}
   else 
   { 
      header("Location:invalid.html");     
   }

  
?>