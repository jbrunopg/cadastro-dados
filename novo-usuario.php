<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="card p-2">
		<div class="col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control">
		</div>
		<div class="col-md-6">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" placeholder="Insira seu CPF (SOMENTE NÚMEROS)!" pattern="[0-9]{11}" required>
		</div>
		<div class="col-md-6">
			<label>Telefone</label>
			<input type="telephone" name="telefone" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Endereço</label>
			<input type="text" name="endereço" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control">
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</div>	
</form>