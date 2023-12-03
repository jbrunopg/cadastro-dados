<?php

	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome'];
			$cpf = $_POST['cpf'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			$endereço = $_POST['endereço'];
			$senha = md5($_POST['senha']);

			$sql = "INSERT INTO usuarios (nome, cpf, telefone, email, endereço, senha) VALUES('{$nome}', '{$cpf}', '{$telefone}', '{$email}', '{$endereço}', '{$senha}')";

			$res = $connection->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com Sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";

			}else{
				print "<script>alert('Não Foi Possível Cadastrar!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;

		case 'editar':
			$nome = $_POST['nome'];
			$cpf = $_POST['cpf'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			$endereço = $_POST['endereço'];
			$senha = md5($_POST['senha']);

			$sql = "UPDATE usuarios SET
						nome='{$nome}',
						cpf='{$cpf}',
						telefone='{$telefone}',
						email='{$email}',
						endereço='{$endereço}',
						senha='{$senha}'
					WHERE 
						id=".$_REQUEST["id"];

			$res = $connection->query($sql);

			if($res==true){
				print "<script>alert('Editado com Sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";

			}else{
				print "<script>alert('Não Foi Possível Editar!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;

		case 'excluir':
			
			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST['id'];

			$res = $connection->query($sql);

			if($res==true){
				print "<script>alert('Excluído com Sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";

			}else{
				print "<script>alert('Não Foi Possível Excluir!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;
	}

?>