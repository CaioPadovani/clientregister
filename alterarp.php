<?php
	require_once 'produtos.php';	
	if(isset($_GET['id'])){
	   $student = new produtos();
	   $student->setId($_GET['id']);
	   $resp=$student->buscarId();
	   ?>
	        <h3>Alterar Produto</h3>
	       <form action="alterarp2.php" method="POST">
		<p>Id: <input type="number" value="<?php echo $resp['id']?>" name="id" readonly="true"></p>
		<p>Nome: <input type="text" value="<?php echo $resp['nome']?>"	name="nome" required></p>
		<p>Descrição: <input type="text" value="<?php echo $resp['descricao']?>" name="descricao"></p>
		<p>Quantidade: <input type="number" value="<?php echo $resp['quantidade']?>" name="quantidade"></p>
		<p>Fornecedor: <input type="text" value="<?php echo $resp['fornecedor']?>" name="fornecedor" ></p>
		<p><input type="submit" value="Alterar"></p>
   	       </form>
	<?php
	}
?>