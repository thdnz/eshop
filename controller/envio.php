<?php
$to      = Config::EMAIL_USER; 
$subject = 'Contato - ESHOP';
$message = $_GET['mensagem'];
$dest = $_GET['txtinputemail'];
$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso')</script>