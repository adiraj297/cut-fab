<?php
require 'PHPMailer/class.phpmailer.php';

if (!empty($_POST) && isset($_POST['submit']))
{
    try {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $phno=$_POST['phno'];
            $cemail=$_POST['email'];
            $contact=$_POST['contact'];
            $msg=$_POST['message'];

            $mail = new PHPMailer(true);

        	$mail->IsSMTP();
        	$mail->SMTPAuth   = false;
        	$mail->Port       = 25;
        	$mail->Host       = "localhost";
        	$mail->Username   = "testemail@domain.com";//Enter Username of Webmail
        	$mail->Password   = "password";  //Password of webmail

        	$mail->IsSendmail();

        	$mail->From       = "testemail@domain.com";// Erom Email Address
        	$mail->FromName   = "Quote Notification"; //Name

        	$mail->AddAddress('admin@cutandfab.com.au');

        	$mail->Subject  = "New quote query from ".$firstname;


            $BodyEmail = "<img src='https://cutandfab.com.au/IMG/logo1.jpg'> <h2>New Quote Request</h2>                  <p> You have a new quote request.</p>                   <table> <tr>  <td><b>First Name: </b></td>  <td>$firstname</td>  </tr>  <tr>  <td><b>Last Name: </b></td>   <td>$lastname</td>                     </tr>
                    <tr>
                      <td><b>Phone: </b></td>
                      <td>$phno</td>
                    </tr>
                    <tr>
                      <td><b>Email: </b></td>
                      <td>$cemail</td>
                    </tr>
                     <tr>
                      <td><b>Preferred Method of contact: </b></td>
                      <td>$contact</td>
                    </tr>
                    <tr>
                      <td><b>Message: </b></td>
                      <td>$msg</td>
                    </tr>
                  </table>";

        	$mail->MsgHTML($BodyEmail);
        	$mail->IsHTML(true);
        	$mail->Send();

            echo "<script>setTimeout(\"location.href = 'quotes.php?success=true';\",00);</script>";
        } catch (Exception $e) {
            echo "<script>setTimeout(\"location.href = 'quotes.php?success=false';\",00);</script>";

    }
}
else
{
    echo "<script>setTimeout(\"location.href = 'quotes.php?success=invalid';\",00);</script>";
}
