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

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <style>
   body{
    background-image: url('bg1.jpg');
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


      <h1  class="btn"> Home Page</h1>
      <br>
      <a  href="househelper.php"> <button  class="btn"> House Helpers  </button> </a>
      <a  href="tenet.php" > <button class="btn"> Tenet List  </button> </a>
      <a  href="owner.php"> <button  class="btn"> Owner List  </button> </a>
      <a  href="payment.php" > <button class="btn"> Payment  </button> </a>
</body>
</html>
<?php
}
else{
  header("location:index.html");
}
?>