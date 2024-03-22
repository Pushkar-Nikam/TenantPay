<?php
$c= mysqli_connect("localhost","root","","project");
if(!$c)
{ 
   echo"Connection faield";
}
   
    if(isset($_POST['n1']) && isset($_POST['m'])&& isset($_POST["em"])&& isset($_POST["p"])&& isset($_POST['a']))
    { 
      
      $n=$_POST["n1"];
      $m=$_POST["m"];
      $em=$_POST["em"];
      $pw=$_POST["p"];
      $ad=$_POST['a'];
      $ro=$_POST["role"];
      $image=file_get_contents($_FILES['photo']['tmp_name']);
      $image=base64_encode($image);
      echo" $em , $pw";
      $r=$c->query("INSERT INTO `login` VALUES ('$n','$m','$ad','$em','$pw','$ro','$image')");
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3,h1{
          color:whitesmoke;
        }
         
          a:hover
         {
           background: #239eb9;
           color: #fff;
           border-radius: 50px;
           box-shadow: 0 0 5px #289bb8,
                0 0 25px #289bb8,
                0 0 50px #289bb8,
                0 0 100px #289bb8;
          }
           body 
             {
               text-align:center;
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
<body>
 <script>
  window.alert("Regesterd Sussesfully!!");
  </script>
  <h1> Go to Login Page </h1>
  <br>
  <br>
  <a  href="index.html"> <button class=btn> Continue  </button> </a>
</body>
</html>