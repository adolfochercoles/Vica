<?php
   // Import PHPMailer classes into the global namespace
   // These must be at the top of your script, not inside a function
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require '../PHPMailer/src/PHPMailer.php';
   require '../PHPMailer/src/Exception.php';

   // Load Composer's autoloader
   require '../PHPMailer/vendor/autoload.php';

   if(isset($_POST['submit'])){
      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
         //Server settings
         $mail->SMTPDebug = 0;                                       // Enable verbose debug output
         $mail->isSMTP();                                            // Set mailer to use SMTP
         $mail->Host       = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = 'adolfochercoles@gmail.com';                     // SMTP username
         $mail->Password   = 'r0s2rd0Agustin';                               // SMTP password
         $mail->SMTPSecure = 'TSL';                                  // Enable TLS encryption, `ssl` also accepted
         $mail->Port       = 25;                                    // TCP port to connect to

         //Recipients
         $mail->setFrom('adolfochercoles@gmail.com', 'VICA A.O.I.');
         $mail->addAddress($_POST['email']);               // Name is optional
         $mail->addAddress('vicaargentinasrl@gmail.com');               // Name is optional
         $mail->isHTML(true);                                  // Set email format to HTML
         $mail->Subject = 'Consulta de: ' . $_POST['name'];
         $mail->Body    = 'Su consulta: ' . $_POST['comment'] . ' </br> Sitio: ' . $_POST['url'];

         $mail->send();

         echo "<script>alert('Muchas gracias por su consulta.\\nNos pondremos en contacto a la brevedad.')</script>";
         echo "<script>document.location.href= 'consultoria-tecnica.html'</script>";
      } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
   }
?>