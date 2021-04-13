<html>
<head><title>Cadastro de Produtos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>
<style>
thead{
	background-color: #6D745F;
}


</style>
<?php
	require_once 'produtos.php';
	$student = new produtos();
	$resp=$student->buscarTodos();
	echo "<table class='table table-striped'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>ID</th><th>NOME</th>";
	echo "<th>DESCRICAO</th><th>QUATIDADE</th>";
	echo "<th>FORNECEDOR</th>";
	echo "<th></th><th></th>";
	echo "</tr>";
	echo "</thead>";
	foreach($resp as $linha){
		echo "<tr>";
		echo "<td id='id1'>".$linha['id']."</td>";
		echo "<td id='nome>".$linha['nome']."</td>";
		echo "<td id='descricao'>".$linha['descricao']."</td>";
		echo "<td id='quantidade'>".$linha['quantidade']."</td>";
		echo "<td id='fornecedor'>".$linha['fornecedor']."</td>";
		echo "<td><a href=excluir2.php?id="
			.$linha['id'].">Excluir</a></td>";
		echo "<td><a href=alterarp.php?id="
			.$linha['id'].">Alterar</td>";	
		echo "</tr>";
	}
	echo "</table>";
?>
	<script>
		$(document).ready(function(){
			$("#form1").hide();
			$("#bt1").click(function(){
				$("#form1").show();
				$("#bt1").hide();
				
			});
			$("#bt2").click(function(){
				$("#form1").hide();
				$("#bt1").show();
			});
		});
	</script>
	<button id="bt1" type="button" class="btn btn-secondary btn-sm">inserir</button>
	<div id='form1' style="background-color: grey; width: 400px; height: 300px">	
		<form action="inserir2.php" method="POST">
				<p><label for="nome">Nome:</label>
				<input type="text" name="nome" required></p>
				<p><label for="descricao">Descrição:</label>
				<input type="text" name="descricao"></p>
				<p><label for="quantidade">Quantidade:</label>
				<input type="number" name="quantidade"></p>
				<p><label for="fornecedor">Fornecedor:</label>
				<input type="text" name="fornecedor"></p>				
			    <p><button type="submit">Inserir</button>
				<button id='bt2'>Cancelar</button></p>						
		</form>
	</div>
</body>
</html>