<?php

include_once 'Conexao.php';
include_once 'Usuario.php';

class UsuarioDAO {

	public function InsereUsuario(Usuario $usuario){

		$con = new Conexao();
		$stmt = $con->Con();

		$sql = $stmt->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)");

		$nome = $usuario->getNome();
		$email =  $usuario->getEmail();   

		$senha = $usuario->getSenha();
		$sql->bindParam(1, $nome);
		$sql->bindParam(2, $email);
		$sql->bindParam(3, $senha);
		
		if($sql->execute()){
			echo "
			<script>
				alert('Adicionado com Sucesso!');
				location.href = 'index.php';
			</script>";
		}

	}

	public function ListaUsuarios(){
		$con = new Conexao();
		$stmt = $con->Con();
		
		$sql = $stmt->prepare("SELECT * FROM usuarios");
		$usuarios = $sql->execute();
		return $sql->fetchAll();
	}
	
}


