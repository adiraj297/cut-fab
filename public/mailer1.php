<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/home/aebfwdn2r0df/public_html/PHPMailer-master/src/Exception.php';
require '/home/aebfwdn2r0df/public_html/PHPMailer-master/src/PHPMailer.php';
require '/home/aebfwdn2r0df/public_html/PHPMailer-master/src/SMTP.php';


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $phno=$_POST['phno'];
  $cemail=$_POST['email'];
  $contact=$_POST['contact'];
  $msg=$_POST['message'];

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'localhost';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'test@cutandfab.com.au';                     //SMTP username
    $mail->Password   = 'Cutandfab789!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('test@cutandfab.com.au', 'Quote Notification');
    $mail->addAddress('admin@cutandfab.com.au');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';

    $BodyEmail = "<img src='https://cutandfab.com.au/IMG/logo1.jpg'> <h2>New Quote Request</h2>                  <p> You have a new quote on the website.</p>                   <table> <tr>  <td><b>First Name: </b></td>  <td>.$firstname</td>  </tr>  <tr>  <td><b>Last Name: </b></td>   <td>.$lastname</td>                     </tr>
                    <tr>
                      <td><b>Phone: </b></td>
                      <td>.$phno</td>
                    </tr>
                     <tr>
                      <td><b>Preferred Method of contact: </b></td>
                      <td>.$contact</td>
                    </tr>
                    <tr>
                      <td><b>Message: </b></td>
                      <td>.$msg</td>
                    </tr>
                  </table>";

    $mail->Body    = $BodyEmail;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    echo "<script>setTimeout(\"location.href = 'contact_us.php';\",00);successful();</script>";
    } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }