<?php

    $to = "renegadewebdev@outlook.com.au"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['subject'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['subject'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $output = mail($to,$subject,$message);
   //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
            $js_code = '<script>' . $js_code . '</script>';
            echo $js_code;


?>