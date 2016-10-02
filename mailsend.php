<?php

$email="princeajit771@gmail.com";
$username=$email;

echo"<h5>Soon you will get the mail </h5>";

require "PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->IsSMTP();

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587; 

$mail->SMTPAuth = true;

$mail->SMTPSecure = 'tls';

$mail->Username = "princeajit771@gmail.com";

$mail->Password = "9938444419";

$mail->SetFrom("princeajit771@gmail.com","ssssss");

$mail->addReplyTo("princeajit771@gmail.com", "Admin");

//$mail->WordWrap = 50;

$mail->IsHTML(true);

$mail->AddAddress($username);

$mail->Subject = "complain:";

$mail->Body = "complain: <font 

color='#FF0000'><h2>".$activatecode."</h2></font> 

change your password security purpose.<br/><br/>

<h5>Thankyou<h5><font color='FF0000'><h3>CUTM</h3></font>";

//$mail->addAttachment("/opt/lampp/htdocs/show2/images");

if(!$mail->send()) {

   echo "Message could not be sent.";

   echo "Mailer Error: " . $mail->ErrorInfo;

}

else

echo" message sent.";

?>
