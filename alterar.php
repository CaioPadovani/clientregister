<?php
	require_once 'clientes.php';	
	if(isset($_GET['id'])){
	   $student = new clientes();
	   $student->setId($_GET['id']);
	   $resp=$student->buscarId();
	   ?>
	        <h3>Alterar Cliente</h3>
	       <form action="alterar2.php" method="POST">
		<p>Id: <input type="number" value="<?php echo $resp['id']?>" name="id" readonly="true"></p>
		<p>Nome: <input type="text" value="<?php echo $resp['nome']?>"	name="nome" required></p>
		<p>Sobrenome: <input type="text" value="<?php echo $resp['sobrenome']?>" name="sobrenome"></p>
		<p>Sexo: <input type="text" value="<?php echo $resp['sexo']?>" name="sexo"></p>
		<p>Email: <input type="email" value="<?php echo $resp['email']?>" name="email" readonly="true"></p>
		<p>Telefone: <input type="number" value="<?php echo $resp['telefone']?>"	name="telefone" ></p>
		<p>Cidade: <input type="text" value="<?php echo $resp['cidade']?>" name="cidade"></p>
		<p>Estado: <input type="text" value="<?php echo $resp['estado']?>" name="estado"></p>
		<p>Mensagem: <input type="text" value="<?php echo $resp['mensagem']?>" name="mensagem"></p>
		<p><input type="submit" value="Alterar"></p>
   	       </form>
	<?php
	}
?>