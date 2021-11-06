<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tiaoalves252@gmail.com';
	$mail->Password = 'Jamais11!';
	$mail->Port = 587;

	$mail->setFrom('tiaoalves252@gmail.com');
	$mail->addAddress('tiaoalves251@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
   if($mail->send()){

echo '<strong>Email Enviado Com Sucesso Logo Retornaremos a Mensagem.</strong>';
   }else{

  echo 'Email Não Enviado.';

   }         
 } else {

    echo 'Não Enviado : Você Deve Informar Email e a Mensagem.
    Att. Espaço Gamer.';   

 }

 echo "<script>window.location='contato.php';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";