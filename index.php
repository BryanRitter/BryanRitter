<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Bryan Ritter">
	<meta name="description" content="Página de registro de emails">
 	<meta name="keywords" content="ecologia, registro, salvar, planeta">
	<title>Livro Reciclar em Casa</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

if(isset($_POST['registrar'])){
	$email_de = "bryanrittercimol@gmail.com";
	$email_para = $_POST['email'];
	$guardaRegistros = fopen("guardaRegistros.txt","a+");
	$nomeCompleto = $_POST['name'];
	$estado = $_POST['estado'];
	$email_para;
	$subject = "REGISTRO - PDF Aprenda a Reciclar em Casa";



	$body = "
		Obrigado por se registrar. O mundo agradece seus esforços.\n
		arquivo do livro:  https://pedagogia.paginas.ufsc.br/files/2021/02/Manual-de-Reciclagem-em-Casa.pdf

	";
	
	
	
	
	$headers = "From: $from";
	mail($email_para, $subject, $body, $headers);
	fwrite($guardaRegistros,"$nomeCompleto|$email_para|$estado\n");	
	fclose($guardaRegistros);
	header("location: index.php");
}





?>
		<div id="container">
			<h1>Faça parte dos Salvadores do Planeta</h1>

			<form action="index.php" method="POST">
				
				<p>Faça do mundo um lugar melhor, aprenda a reciclar em casa com nosso novo livro digital.</p>
				<p>Você recebera um link de acesso ao livro no seu email registrado.</p>
				<hr>	
				<label for="name"> Por favor insira seu nome completo:</label><br>
				<input type="text" pattern="[a-zA-Z]+" required placeholder="ex: joão da Silva" name="name" id="name"><br>
				<label for="email"> Digite seu E-mail:</label><br>
				<input type="email" required placeholder="seuemail@gmail.com" name="email" id="email"><br>
				<select required name="estado">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
				<input type="submit" value="registrar-se" name="registrar" id="registrar">

				<input required type="checkbox" name="termos" id="termos">
				<label for="termos"> Eu aceito receber Emails relacionados a este site, e estou ciente que posso cancelar esse serviço a qualquer momento.</label>
			</form>
			<div id="grafico"><img src="imagens/grafico.png"></div>
			<div id="lorem-div">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, quos quisquam quasi optio tenetur inventore fuga soluta similique modi aliquam saepe, fugit est velit error officiis atque deserunt! Pariatur, ipsum.</p>
				<p>Nesciunt omnis dolor esse rem libero quasi! Eius natus error tempore voluptate iste deleniti, animi odit reprehenderit repudiandae quas officiis illo, saepe omnis deserunt fugiat inventore ad harum fuga dolorum?</p>
			</div>
		</div>
		<footer>
			Bryan Ritter &copy; 2021
		</footer>
	</body>
</html>
