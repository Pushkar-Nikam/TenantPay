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
        nav {
          display: flex;
          justify-content:center;

        }
       
        a {
          text-decoration: none;
          color: white;
        }
      
        form 
        {
        position: relative;
        z-index: 1;
        text-align: center;
        position: absolute;
        top: 60%;
        left: 50%;
        width: 400px;
        height: 600px;
        padding: 30px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 16px;
}
 .bta {
  position: relative;
  display: inline-block;
  padding: 5px 10px;
  color: #289bb8;
  font-size: 16px;
  text-decoration: none;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 2px;  
}
 
.bta:hover {
  background: #239eb9;
  color: #fff;
  border-radius: 30px;
  box-shadow: 0 0 5px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
}

            </style>
    
</head>
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
    <style>
      .underline {
 width: 100%;
 padding: 2px 0;
 font-size: 13px;
 color: #fff;
 margin-bottom: 15px;
 border: none;
 border-bottom: 1px solid #fff;
 outline: none;
 background: transparent
 }
 form {
  margin: 10px 0 0;
  color: #b3b3b3;
  font-size: 15px;
}
     h2,h3,h1
  {
    color:whitesmoke;
   text-align:center;
  }  body {
              background-image: url('bg1.jpg');
            }
     </style>
      <form action="property.php" method="post"  enctype="multipart/form-data">
      <h3>Add OR Delete <span style="color: greenyellow;">Property </span> 
      <h3></i><span style="color: greenyellow;">TENANTS PAY </span>WITH 0% BROKERAGE</h3>
      <input class="underline" type="text" placeholder="Name" name="name" required />
       <br>  
       <input class="underline" type="email" placeholder="Enter Owner Email-Id" name="oem" id="oem" required />
       <br>
       <input class="underline" type="text" placeholder="Address" name="address" required />
       <br>
       <input class="underline" type="number" placeholder="Mobile_Number" name="mn" required />
       <br>
       <input class="underline" type="number" placeholder="RENT OR SALE AMOUNT" name="am" required />
       <br>
       <div style="color: aliceblue;">Photo (less than 500kb):-</div>
       <input class="underline" type="file" placeholder="Photo of Property" name="pimage" required />
       <br>
       <h3 style="font-family: sans-serif;
      font-size:100% ">  Enter the Type:-
         <select name="Type" style="padding:3px; border-radius:30px;" class="bta">
         <option value="1BHK">1BHK</option>
         <option value="2BHK">2BHK</option>
         <option value="3BHK">3BHK</option>
         <option value="House">House</option>
         <option value="Row_House">Row_House</option>
         <option value="Shop">Shop</option>
      </select></h3>
        <h3 style="font-family: sans-serif;
      font-size:100% "> For:-
         <select name="For" style="padding:3px; border-radius:13px;"class="bta">
         <option value="Sale">Sale</option>
         <option value="Rent">Rent</option> 
      </select></h3>
      <h3 style="font-family: sans-serif;
      font-size:100% ">What to DO:-
         <select name="DO" style="padding: 3px; border-radius:13px;"class="bta">
         <option value="Add">ADD</option>
         <option value="Delete">DELETE</option> 
      </select></h3>
        
      <input type="submit" class="bta" value="Submit" name="su">
      

    </form>
      
      </body>   
     
</html>
<?php
 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
 {
    echo"Connection faield";
 }

 if( isset($_POST['oem'])&& isset($_POST["am"]))
 {  
   $name=$_POST["name"];
   $oem=$_POST["oem"];
   $am=$_POST["am"];
   $address=$_POST["address"];
   $mn=$_POST['mn'];
   $type=$_POST['Type'];
   $for=$_POST['For'];
   $ch=$_POST['DO'];
   $image=file_get_contents($_FILES['pimage']['tmp_name']);
   $image=base64_encode($image);
   if($ch=='Add')
        {
          $r=$c->query("INSERT INTO `property`(`Name`, `Email_ID`, `Adderss`, `Mobile_number`, `Type`, `Amount`, `S_R`,`Photo`) VALUES ('$name','$oem','$address','$mn','$type',$am,'$for','$image')");
          echo "<script> alert('ADD Successfull!!')</script>";
        }

   elseif($ch=='Delete')
        {
            $r=$c->query("DELETE FROM `property` WHERE `Name`='$name'  AND `Type`='$type'");
            echo "<script> alert('Delete Successfull!!')</script>";
        }   
  
  }
 }

else
{
  header("location:index.html");
}
?>