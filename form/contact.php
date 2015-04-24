<?php
	require_once('mail.php');

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = "<strong>Nome: </strong>".$name;
	$message .= "<br><strong>Email: </strong>".$email;
	$message .= "<br><strong>Mensagem: </strong>".$_POST['message'];

	$mail = new Mail();
	$mail->protocol = 'smtp';
	$mail->hostname = 'ssl://smtp.gmail.com';
	$mail->username = 'sylviomartinsx@gmail.com';
	$mail->password = 'brasfoot2014';
	$mail->port = 465;
	$mail->timeout = 5;

	$mail->setTo('sylvio.hm@gmail.com');
	$mail->setFrom($email);
	$mail->setSender($name);
	$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
	$mail->setHtml($message);
	$mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
	$mail->send();

	$myemail = "sylvio.hm@gmail.com";
	$enviando = mail($myemail, $subject, $message);
	if($enviando) {
		echo "Mensagem enviada com sucesso!";
		echo "<script>alert(\"Mensagem enviada com sucesso!\")</script>";
		echo "<script>window.location = \"index.html\"</script>";
	}
	else {
		echo "<p><b>$name</b><br />Ouve um erro no envio, desculpe-nos pelo transtorno!!!</p>";
	}
?>