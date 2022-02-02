<?php 
use PHPMailer\PHPMailer\PHPMailer; 

require_once 'phpmailer/Exception.php'; 
require_once 'phpmailer/PHPMailer.php'; 
require_once 'phpmailer/SMTP.php'; 

$mail = new PHPMailer(true);  

$alert = ''; 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $object = $_POST['object'];
    $message = $_POST['message'];

try {
    $mail->isSMTP(); 
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'myportfolio.contact21@gmail.com'; 
    $mail->Password = 'marwen01101989'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
    $mail->Port = '587'; 

    $mail->setFrom('myportfolio.contact21@gmail.com'); 
    $mail->addAddress('tayarimarwen@gmail.com'); 

    $mail->isHTML(true); 
    $mail->Subject = 'My Portfolio'; 
    $mail->Body = "<div>
                        <p> <span> Name : </span> $name </p> <br> 
                        <p> <span> LastName : </span> $lastname </p> <br> 
                        <p> <span> E-mail : </span> $email </p> <br> 
                        <p> <span> Message : </span> $message </p> <br>       
                  </div>"; 

    $mail->send(); 
    $alert = '<div class="alert alert-success m-3" role="alert">
                     Votre message a été envoyé avec succès
              </div>'; 
   } catch(Exception $e){
       $alert = '<div class="alert alert-danger m-3" role="alert">
                     <span> '.$e ->getMessage().' </span>
                </div>'; 
   }
}
?> 