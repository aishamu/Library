<?php
    // Here we get all the information from the fields sent over by the form.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg= $_POST['message'];

    $to = 'no-reply@google.com';
    $subject = 'Quick Contact Form Inquiry';
    $message = '<html><body>';
    $message .= '<b>FROM:</b> '.$name. "<br>";
    $message .= '<b>Email:</b> '.$email. "<br>";
    $message .= '<b>Message:</b> '.$msg. "<br>";
    $message .= '</html></body>';

    $headers = 'From: no-reply@google.com' . "\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h4>    تم ارسال الرسالة  
	</br>
	    سوف نتواصل معك قريبا   </h4>";
	  
    }else{
    echo "Invalid Email, please provide an correct email.";
    }
?>