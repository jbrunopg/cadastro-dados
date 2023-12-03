<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];
	$res = $connection->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="card p-2">
		<div class="col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
		</div>
		<div class="col-md-6">
			<label>CPF</label>
			<input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" placeholder="Insira seu CPF (SOMENTE NÚMEROS)!" pattern="[0-9]{11}" required>
		</div>
		<div class="col-md-6">
			<label>Telefone</label>
			<input type="telephone" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Email</label>
			<input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Endereço</label>
			<input type="text" name="endereço" value="<?php print $row->endereço; ?>" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" required>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</div>	
</form>