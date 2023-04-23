 <?php
	
	include('config.php');
	Mysql::creatorInfo();
 
 ?>
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="styleseet" >
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <div class="form-container">
	<form method="post" >
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" placeholder="Insira o nome..."><br><br>
		<label for="email" >Email:</label>
		<input type="email" id="email" name="email" placeholder="Insira seu melhor email..."><br><br>
		<input type="submit" value="Cadastrar">
	</form> 
</div> 
<!-- form-container close    -->
</body>
</html>