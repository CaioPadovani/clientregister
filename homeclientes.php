<html>

<head>
	<title>Cadastro de Clientes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
thead{
	background: rgb(131,58,180);
	background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
}
</style>

<body>
	<?php
	require_once 'clientes.php';
	$student = new clientes();
	$resp = $student->buscarTodos();
	echo "<table class='table table-striped'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>id</th><th>nome</th>";
	echo "<th>sobrenome</th><th>email</th>";
	echo "<th>telefone</th><th>sexo</th>";
	echo "<th></th><th></th>";
	echo "</tr>";
	echo "</thead>";
	foreach ($resp as $linha) {
		echo "<tr>";
		echo "<td>" . $linha['id'] . "</td>";
		echo "<td>" . $linha['nome'] . "</td>";
		echo "<td>" . $linha['sobrenome'] . "</td>";
		echo "<td>" . $linha['email'] . "</td>";
		echo "<td>" . $linha['telefone'] . "</td>";
		echo "<td>" . $linha['sexo'] . "</td>";
		echo "<td><a href=excluir.php?id="
			. $linha['id'] . ">Excluir</a></td>";
		echo "<td><a href=alterar.php?id="
			. $linha['id'] . ">Alterar</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<script>
		$(document).ready(function() {
			$("#form1").hide();
			$("#bt1").click(function() {
				$("#form1").show();
				$("#bt1").hide();

			});
			$("#bt2").click(function() {
				$("#form1").hide();
				$("#bt1").show();
			});
		});
	</script>
	<button id='bt1'>Inserir</button>
	<div id='form1' style="background-color: grey; width: 400px;">
		<h4>Inserir Cliente</h4>
		<form action="inserir.php" method="POST">
			<p><label for="nome">Nome:</label>
				<input type="text" name="nome" required>
			</p>
			<p><label for="sobrenome">Sobrenome:</label>
				<input type="text" name="sobrenome">
			</p>
			<p><label for="sexo">Sexo:</label>
				<input type="text" name="sexo">
			</p>
			<p><label for="email">Email:</label>
				<input type="email" name="email">
			</p>
			<p><label for="telefone">Telefone:</label>
				<input type="number" name="telefone">
			</p>
			<p><label for="cidade">Cidade:</label>
				<input type="text" name="cidade">
			</p>
			<p><label for="estado">Estado:</label>
				<input type="text" name="estado">
			</p>
			<p><label for="mensagem">Mensagem:</label>
				<input type="text" name="mensagem">
			</p>
			<p><button type="submit">Inserir</button>
				<button id='bt2'>Cancelar</button>
			</p>
		</form>
	</div>
</body>

</html>