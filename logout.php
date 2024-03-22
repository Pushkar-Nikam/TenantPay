<?php
session_start();
if(isset($_SESSION['u'])&& isset($_SESSION['p'])&& isset($_SESSION['role']))
{

}   


session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    h1
  {
    color:whitesmoke;
   text-align:center;
  }
  body {
              color: whitesmoke;
             text-align: center; 
              background-image: url('bg1.jpg');
            }   
            
 .btn:hover {
  background: #239eb9;
  color: #fff;
  border-radius: 30px;
  box-shadow: 0 0 5px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
   }

 .btn span {
  position: absolute;
  display: block;
  }             

</style>
</head>
<body style="text-align:center;">
 <script>
  window.alert("Log out!! Sussesfully!!");
  </script>
   
  <h1> Go to Login Page </h1>
  <br>
  <br>
  <a  href="index.html"> <button class=btn> Continue  </button> </a>
</body>
</html>