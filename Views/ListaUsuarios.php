<?php
	include_once 'UsuarioDAO.php';

	$usuarios = $UsuarioDAO->ListaUsuarios();
			echo "Nome: ".$usuarios[0]['nome'];

				echo '
				<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<td>#</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Senha</td>
						<td>Ações</td>
					</tr>
				</thead>
				<tbody>';

				for($i = 0; $i < count($usuarios); $i++){
					echo '
					<tr>
						<td>'.$usuarios[$i]['id'].'</td>
						<td>'.$usuarios[$i]['nome'].'</td>
						<td>'.$usuarios[$i]['email'].'</td>
						<td>***********</td>
						<td><a href="/usuario/del/'.$usuarios[$i]['id'].'"><i class="fa fa-trash"></i></a></td>
					</tr>';
				}
				echo "
				</tbody>
			</table>";
?>