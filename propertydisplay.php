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
     <!-- Favicon -->
  <link href="./favicon.png" rel="icon" />

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
  rel="stylesheet"
/>

<!-- Icon Font Stylesheet -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
  rel="stylesheet"
/>

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" />
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<style>
body 
           {
            background-color:color-mix(in srgb, whitesmoke 50%, lightblue 50%);

           }
  h3
  {
    color:whitesmoke;
   text-align:center;
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


 $r=$c->query("SELECT * FROM `property` WHERE 1");

 if($r->num_rows >0)
 { 
    if ($r->num_rows > 0)
    {
      //echo "<table border='3'><tr><th>Name</th><th>Email_ID</th><th>Address</th><th>Mobile_Number</th><th>PropetryType</th><th>Amount</th><th>ForRent</th></tr>";
     echo'

     <div class="container-xxl py-5">
     
     <div class="container">

       <div class="row g-0 gx-5 align-items-end">
         <div class="col-lg-6">
         
                <div
                 class="text-start mx-auto mb-5 wow slideInLeft"
                 data-wow-delay="0.1s"
                 > 
                 <h1 class="mb-3">Property Listing</h1>
                 <p>Here are Some Properties for SALE & RENT</p>
                </div>
               </div>
               
                <div
                class="col-lg-6 text-start text-lg-end wow slideInRight"
                data-wow-delay="0.1s"
               >
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                  <li class="nav-item me-2">
                    <a
                      class="btn btn-outline-primary active"
                      data-bs-toggle="pill"
                      href="#tab-1"
                      >Featured</a
                    >
                  </li>
                  <li class="nav-item me-2">
                    <a
                      class="btn btn-outline-primary"
                      data-bs-toggle="pill"
                      href="#tab-2"
                      >For Sell</a
                    >
                  </li>
                  <li class="nav-item me-0">
                    <a
                      class="btn btn-outline-primary"
                      data-bs-toggle="pill"
                      href="#tab-3"
                      >For Rent</a
                    >
                  </li>
                  </ul>
           
             
    ';
   
while ($row = $r->fetch_assoc())
{
$image=$row['Photo'];
      // echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Email_ID"] . "</td><td>". $row["Adderss"] . "</td><td>".$row["Mobile_number"] . "</td><td>".$row["Type"] . "</td><td>". $row["Amount"] . "</td><td>".$row["S_R"] . "</td></tr>";
echo'  </div>
              
</div>  
     <div class="tab-content">
     <div id="tab-1" class="tab-pane fade show p-0 active">
      <div class="row g-4">
       <div
          class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.1s"
          >
          <div class="property-item rounded overflow-hidden">         
           <div class="property-item rounded overflow-hidden">
           <div class="position-relative overflow-hidden">
           <a href=""
           ><img class="img-fluid" src="data:image/jpeg;base64,'.$image.'" alt=""
           /></a>
           <div
           class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
           >
           '.$row["S_R"].'
           </div>
           <div
           class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
           >
           '.$row["Type"].'
           </div>
           </div>
           <div class="p-4 pb-0">
           <h5 class="text-primary mb-3">Rs:-'. $row["Amount"].'</h5>
           <a class="d-block h5 mb-2" href=""
           >'.$row["Name"].'</a
           >
           <p>
           <i class="fa fa-map-marker-alt text-primary me-2"></i
           >'.$row["Adderss"].'
           </p>
           </div>

           <div class="d-flex border-top">
           <small class="flex-fill text-center border-end py-2"
           ><i class="fa fa-mobile text-primary me-2"></i
           >'.$row["Mobile_number"].'</small
           >
           <small class="flex-fill text-center border-end py-2"
           ><i class="fa  text-primary me-2">✉</i
           >'.$row["Email_ID"].'</small
           >
           </div>   
           </div>
      </div>
      </div>
    </div>
    </div>

    <h1 class="text-start mx-auto mb-5 wow slideInLeft"
    data-wow-delay="0.1s" >--------------------</h1>';
    }
  
      //echo "</table><br>";     
     } 
  }

}
?>