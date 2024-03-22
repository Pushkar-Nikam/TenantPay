<?php
session_start();

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
    background-color: #333;
  }
  ul {
    display: flex;
    list-style-type:none;
    justify-content:space-around;
  }
  li {
   margin: 5px;
  }
  a {
    text-decoration: none;
    color: white;
  }
</style>
</head>
<body>
<nav>
  <ul>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="Home.php">Home</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="index.html">  Log out? </a><li>
  </ul>
</nav>
</body>
</html>


<?php

 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
 {
    echo"Connection faield";
 }
 else
 {
    echo "Connection Successfull !!<br>";
    echo"<script> window.alert(' Welcome !! Login Sucssesfull !! ') </script>";
 }
 $_SESSION['u']=$_POST["Username"];
 $_SESSION['p']=$_POST["password"];
 $_SESSION['role']=$_POST['role'];
 $r=$c->query("SELECT * FROM login WHERE Email_ID ='".$_SESSION['u']."'"." AND Password ='".$_SESSION['p']."'");

 if($r->num_rows >0)
 {

   if($r)
   {
    header("location:home.php");
   } 
  }   
   else 
    { 
      header("Location:invalid.html");     
    }

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<FORM action="home.php" method="post">
                   <h1><i> Click on Continue to connect home page !!</i></h1>
                    <input type="submit" value="Continue">
                     </FORM>
   <?php
   
   ?>                  
</body>
</html>
