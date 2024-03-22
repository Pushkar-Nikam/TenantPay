<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
{ 
   echo"Connection faield";
}

if(isset($_POST["em"])&&isset($_POST["n1"]))
   { 
     $_SESSION['n1']=$_POST['n1'];
     $_SESSION['em']=$_POST['em'];


     $r=$c->query("SELECT * FROM login WHERE Email_ID='".$_SESSION['em']."'" );
     if($r->num_rows > 0)
     {
       //Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'youtenantbooster@gmail.com';                     //SMTP username
    $mail->Password   = 'ysoh nael vgzg roac';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   
    $mail->setFrom('youtenantbooster@gmail.com', 'Tenant Boosters');
    $mail->addAddress($_SESSION['em'], 'Tenant Boosters');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the  Your Reset Password Link From Tenant Boosters  :-
                       <b>http://localhost/Allwork/Project/forgotpw.php</b><br>
                       Click the link to Set new Password!
                       <br><br>
            
          
                        🇮🇳 Thank You🙂 <br>
                       YourTenantBoosters ';
    

    $mail->send();
    echo "<h1 align=center> Message has been sent</h1>";
    echo "<h3 align=center> Set Password From link</h3>";
    echo "<button type=submit onclick=backtoLogin() id=bl class=btn>Back To Login</button>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
     }

    }
  

?>
<html>
<head>
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
function backtoLogin()
{
 window.location.href="index.html";
}

</script>
</body>
<html>