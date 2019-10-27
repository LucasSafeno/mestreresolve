<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando Email</title>
</head>
<body>

	<?php
		
		if(isset($_POST['enviar'])){
			$nome	=	$_POST['nome'];
			$assunto = $_POST['assunto'];
			$telefone	=	$_POST['telefone'];
			$email 	=	$_POST['email'];
			$mensagem	=	$_POST['mensagem'];

			if($nome == ""){
				echo "<script>alert('Por favor, Informe seu nome');window.location.assign('index.html'); </script>";

			}else if($email == ""){
				echo "<script>alert('Por favor, Informe seu email');window.location.assign('index.html'); </script>";
			} else if($telefone == ""){
				echo "<script>alert('Por favor, Informe seu Telefone');window.location.assign('index.html'); </script>";
			} else if($assunto == "") {
				echo "<script>alert('Por favor, Informe o assunto da mensagem);window.location.assign('index.html'); </script>";
			} else if($mensagem == ""){
				echo "<script>alert('Não é possível enviar Mensagem em branco');window.location.assign('index.html'); </script>";
			} else {
				$headers = "MIME-Version: 1.1\r\n";
				$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
				$headers .= "From: $email\r\n"; // remetente
				$headers .= "Return-Path: contato@mresolve.com.br\r\n"; // return-path
				$para = "contato@mresolve.com.br";
				mail($para, $assunto, $mensagem, $headers);
				echo "Mensagem enviada";
		}
	}

	?>
    
</body>
</html>