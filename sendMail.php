<?php
    
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$surname=$_POST['surname'];
$message=$_POST['message'];
$phone=$_POST['phone'];


$to = 'do-not-reply@agpetroleum.ae';
$subject = 'Vistor Query From Website';
$from = 'do-not-reply@agpetroleum.ae';
$cc = 'asad6410@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'CC: '.$cc."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$txt ="surname = ". $surname . "\r\n  Name = " . $name . "\r\n Phone =" . $phone . "\r\n Email =" . $visitor_email . "\r\n Message =" . $message;
 
$txt = '<html><body>';
$txt .= '<h1 style="color:#023359;">'.$surname. '  ' .$name . '</h1>';
$txt .= '<p style="color:#023359;font-size:18px;">Phone   : '. $phone . '</p>';
$txt .= '<p style="color:#023359;font-size:18px;">Email   : '. $visitor_email . '</p>';
$txt .= '<p style="color:#023359;font-size:18px;">Message : '. $message . '</p>';
$txt .= '</body></html>';

// Sending email
mail($to, $subject, $txt, $headers);
header("Location:contact.html");
?>