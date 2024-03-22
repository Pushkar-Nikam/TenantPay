<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant</title>
  
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
   
    <form action="forgotpwemail.php" class="login-form" method="post"  onsubmit=" return valid()">
      
      <h2></i><span style="color: greenyellow;"> Create New Password!</span> </h2>
      <input type="text" placeholder="Enter Password" name="p" id="p" required />
      
      <input type="text" placeholder="Confirm Password" name="p1" id="p1" required />
  
      
      <script>
        function valid() 
          {  
            let  a=document.getElementById("p").value;
            let  b=document.getElementById("p1").value;

            const re=new RegExp("^[a-zA-Z0-9][a-zA-Z0-9/@/#/$/&/*/.]{7,}$");
            const re1=new RegExp("^[a-zA-Z][a-zA-Z0-9/@/#/$/&/*]{7,}$");
            const re2=new RegExp("[*/@/$/&/*/#]{1,}");
            const re3=new RegExp("[0-9]{1,}");
            const re4=new RegExp("[A-Z]{1,}");
            const re5=new RegExp("[a-z]{1,}");
           if(re.test(a) && re1.test(a) && re2.test(a) && re3.test(a)&& re4.test(a)&& re5.test(a))
           {
            if(a!==b)
            {
              window.alert("Invalid password Format!! "+a);
             return(false);
              return(true);
            } 
           }
           else
           {
            return(true);
           }
          }    
      </script>
       <input type="reset" class="btn" value="Clear" >
      <input type="submit" value="SUBMIT" class="btn" >
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/main.js"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Poppins:300);
html {
 height: 100%;
}
body{
 margin:0;
 padding:0;
 font-family: sans-serif;
 background: linear-gradient(#30142b, #2772a1);
}
.login-page {
  width: 400px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
.form input {
 width: 100%;
 padding: 10px 0;
 font-size: 13px;
 color: #fff;
 margin-bottom: 30px;
 border: none;
 border-bottom: 1px solid #fff;
 outline: none;
 background: transparent;
  
}
h2{
 color:white;
}


.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #289bb8;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.btn {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #1eb62b;
  font-size: 16px;
  text-decoration: none;
  overflow: hidden;
  transition: .5s;
  margin-top: 15px;
  letter-spacing: 2px
}
.btn:hover {
  background: #289bb8;
  color: #fff;
  border-radius: 5px;
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
</body>
</html>



<?php
 
 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
{ 
   echo"Connection faield";
}
   
  if(isset($_POST["p"]))
   { 
     $name=$_SESSION['n1'];
     $em=$_SESSION['em'];
     $pw=$_POST["p"];
     $r=$c->query("SELECT * FROM login WHERE Email_ID='$em' ");
    if($r->num_rows > 0)
    {
     $r=$c->query("UPDATE login SET Password='$pw' WHERE Email_ID='$em'  AND  Name='$name'");
    } 
    header("Location:forgotpw1.html");
  }

?>
