<?php
$data = json_decode(file_get_contents('php://input'), true);

$trainer = $data['trainer'];
$phone = $data['phone'];
$reason = $data['reason'];

$to = 'kbhmedhjaelp@gmail.com';
$subject = 'Kontakt din træner';
$message = "Email: $email\nTræner: $trainer\nTelefon: $phone\nÅrsag: $reason";
$headers = "From: $email";

mail($to, $subject, $message, $headers);
?>