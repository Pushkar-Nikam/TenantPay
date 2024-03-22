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


if(isset($_POST['tem']) && isset($_POST['oem'])&& isset($_POST["am"]))
{ 
$tem=$_POST["tem"];
$oem=$_POST["oem"];
$am=$_POST["am"];
$type=$_POST["Type"];
$mode=$_POST["Mode"];
$date=$_POST['date'];
$image=file_get_contents($_FILES['pimage']['tmp_name']);
$image=base64_encode($image);

$r=$c->query("INSERT INTO `transction_history` VALUES ('$tem','$oem','$am','$type','$mode','$date','$image')");
echo "<script> alert('Payment Successfull!!')</script>";

     $_SESSION['tem']=$_POST['tem'];
     $_SESSION['oem']=$_POST['oem'];
     $_SESSION['am']=$_POST['am'];
     $_SESSION['Type']=$_POST['Type'];
     $_SESSION['Mode']=$_POST['Mode'];
     $_SESSION['date']=$_POST['date'];
    
     $r=$c->query("SELECT * FROM login WHERE Email_ID='".$_SESSION['oem']."'" );
     
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
    $mail->addAddress($_SESSION['oem'], 'Tenant Boosters');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Payment by Tenant';
    $mail->Body    = '<br>Tenent<b> '.$_SESSION['tem'].' </b>has paid to you  <b> '.$_SESSION['Type'].
                      ' </b> money of <b> Rs'.$_SESSION['am'].'<b>  On Date <b> '.$_SESSION['date'].'</b>.
                      <br> 

                      <br> It is information by <b> Boosters<b> to you keep Update.
                      <br><br>
                      
                    
                      <b>  🇮🇳 Thank You🙂 <br>
                      <i> YourTenantBoosters </i> </b> ';
    

    $mail->send();
     
  
    echo "<h1 align=center> Message has been sent to owner</h1>";
    echo "<button type=submit onclick=backtoLogin() id=bl class=btn>Back To Home</button>";
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
}
    
  

?>
<html>
<head>
<style>
        h1{
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
 window.location.href="home.php";
}

</script>
</body>
<html>