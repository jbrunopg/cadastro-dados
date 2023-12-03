<h1>Listar Usuário</h1>

<?php

	$sql = "SELECT * FROM usuarios";

	$res = $connection->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-hover table-striped table-bordered'>";
			print '<tr>';
				print '<th>#</th>';
				print '<td>Nome</td>';
				print '<td>CPF</td>';
				print '<td>Telefone</td>';
				print '<td>Email</td>';
				print '<td>Endereço</td>';
				print '<td>Ações</td>';
				print '</tr>';
		while($row = $res->fetch_object()){
				print '<tr>';
				print '<td>'.$row->id.'</td>';
				print '<td>'.$row->nome.'</td>';
				print '<td>'.$row->cpf.'</td>';
				print '<td>'.$row->telefone.'</td>';
				print '<td>'.$row->email.'</td>';
				print '<td>'.$row->endereço.'</td>';
				print "<td>
						<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
						</td>";
				print '</tr>';
		}
		print '</table>';
	}else{
		print "<p class='alert alert-danger'>Não Encontrou Resultados!</p>";
	}

?>