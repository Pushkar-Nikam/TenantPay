<?php
session_start();
if(isset($_SESSION['u'])&& isset($_SESSION['p'])&& isset($_SESSION['role']))
{
  $c= mysqli_connect("localhost","root","","project");
 if(!$c)
 {
    echo"Connection faield";
 }
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
    border-color:whitesmoke;
    border-collapse:separate;
    border-spacing:15px;
    color:#FFFFE0;
    background:linear-gradient(#30142b, #2772a1);
        border-radius: 10px;
        box-shadow: 0 0 10px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
              margin-top:100px;
              margin-left:150px;
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
              
                <a href="transcation.php" class="nav-item nav-link">History</a>

              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="logout.php" class="btn btn-primary px-3 d-none d-lg-flex">Log out</a>
          </div>
        </nav>
      </div>
      <style>
  h1
  {
      text-align:center;
  }
  body 
           {
            background-color:color-mix(in srgb, whitesmoke 50%, lightblue 50%);
           }
  </style>
  <br>
      <h1> Transction History</h1>
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
 $role =$_SESSION['role'];
$r=$c->query("SELECT * FROM transction_history WHERE $role='".$_SESSION['u']."'");
 
   if ($r->num_rows > 0)
   {
     echo "<table border='3'><tr><th>Tenet_ID</th> <th>Owner_ID</th><th>Amount</th><th>Type</th><th>Mode</th><th>Date</th><th>Screenshot</th></tr>";
     while ($row = $r->fetch_assoc())
     {    
        $image=$row['Screenshot'];
        
        echo "<tr><td>" . $row["Tenet_ID"] ."</td><td>" . $row["Owner_ID"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Type"]. "</td><td>" . $row["Mode"] . "</td><td>". $row["Date"] ."</td>";
        echo '<td><img src="data:png/image/jpeg;base64,'.$image.'" style="width: 250px; height: 100px"></td></tr>';
     }
     echo "</table>";
    } 
 else
 {
    echo" <h2> 0 Result <h2>";
 }
}
else
{
  header("location:index.html");
}
?>