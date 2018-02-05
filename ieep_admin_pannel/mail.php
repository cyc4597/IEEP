<?php
require_once ('phpMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->isHTML();
$mail->Username = "ieep.bpccs@gmail.com";
$mail->Password='ieep_jadmin';
$mail->setFrom('admin_ieep@bpccs.org','admin');
$mail->Subject = "hello World";
$mail->Body = "A test mail";
$mail->addAddress('cyc4404@gmail.com');
$mail->send();
?>
