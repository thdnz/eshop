<?php
$to      = Config::EMAIL_USER; 
$subject = 'Contato - ESHOP';
$message = $_POST['mensagem'];
$headers = 'From: '. $_GET['email'] . ''. "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>