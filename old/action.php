<?php
session_start();
$text_send = '';
if(isset($_POST['name']) and $_POST['name'] != ''){
	$name = addslashes($_POST['name']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$message = addslashes($_POST['message']);
	$url = $_SERVER['SERVER_NAME'];
	
	$headers ="";
	$headers .= "Reply-To: <contact@e-apply.us.com>\r\n";
	$headers .= "Return-Path:<contact@e-apply.us.com>\r\n";
	$headers .= "From: ".$url." <contact@e-apply.us.com>\r\n";
	$headers .= "Organization: url.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=\"UTF-8\"";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP ".phpversion()." \r\n";
	$sujet = 'Contact Formulaire Site : '.$url;
	
	$message_mail = '<p style="margin: 0;">URL : '.$url.' - e-Visitor AUSTRALIE EN</p><br>
				<p style="margin: 0;">Nom : '.$name.'</p><br>
				<p style="margin: 0;">Téléphone : '.$phone.'</p><br>
				<p style="margin: 0;">E-Mail : '.$email.'</p><br>
				<p style="margin: 0;">Message : '.$message.'</p><br>';

	$counr_send = (isset($_SESSION['SEND_MAIL']))? intval($_SESSION['SEND_MAIL']) : 0;
	
	if($counr_send < 3){
		mail('technique@kendo-center.com', $sujet, $message_mail, $headers);
		mail('info@electronic-visa.com', $sujet, $message_mail, $headers);
	}
	
	$text_send = 'ok';
    $_SESSION['SEND_MAIL'] = $counr_send + 1;
}
echo $text_send;
?>