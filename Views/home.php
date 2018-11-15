	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP-PDO</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h3>Formulário de Cadastro</h3>
			</div>
			<div class="row">	
					<div class="col-md-2">		
			</div>
					<div class="col-md-8">
						<form method="post">
						<div class="form-group">
							<label>Nome</label>
							<input class="form-control" type="text" name="nome">
						</div>
						<div class="form-group">
							<label>Email</label>	
							<input class="form-control" type="email" name="email">
							</div>
						<div class="form-group">
							<label>Senha</label>	
							<input class="form-control" type="password" name="senha">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary form-control"><i class="fa fa-floppy-o"></i> Salvar</button>
						</div>
					</form>
					</div>

					<div class="col-md-2">
						
					</div>
					</div>
				
				</div>
			
			<?php
			//error_reporting(0);
			include_once 'UsuarioDAO.php';
			include_once 'Usuario.php';

			$UsuarioDAO  = new UsuarioDAO();
			$usuario = new Usuario();

			if(isset($_POST)){

				$usuario->setNome($_POST['nome']);
				$usuario->setEmail($_POST['email']);
				$usuario->setSenha($_POST['senha']);

				$UsuarioDAO->InsereUsuario($usuario);
			}
			
			?>

			</body>
			</html>


