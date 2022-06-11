<?php

/*    if(isset($_POST['email'] && !empty($_POST['email'])){}*/
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);
$go_to_url = "https://blackscalcados.com.br/formulario";
$pgagradecimento = "https://blackscalcados.com.br/agradecimento";

/* Passar dados do proprietario*/
$to = "alissonvieira02313102@gmail.com";
$subject = "Contato - NomeDoSite";

$body = "Nome: " . $nome . "\n" .
    "Email: " . $email . "\n" .
    "Mensagem: " . $mensagem;


$header = "From: " . $email . "\r\n". "reply-to: " . $email . "\r\n". "X=Mailer:PHP/" . phpversion();

if (mail($to, $subject, $body, $header)) {
    /* echo "<script> alert('Email enviado com Sucesso')</script>";*/
    echo "<script>window.open('" . $pgagradecimento . "', '_blank');</script>";
    $last_url = $_SERVER['HTTP_REFERER'];
    echo "<script>window.location.replace('" . $last_url . "');</script>";
} else {
    echo ("o Email não pode ser enviado");
};
