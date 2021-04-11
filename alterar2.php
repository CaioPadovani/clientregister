<?php
	require_once 'clientes.php';
	if(isset($_POST['nome'])){
		$student = new clientes();
		$student->setId($_POST['id']);
		$student->setNome($_POST['nome']);
		$student->setSobrenome($_POST['sobrenome']);
		$student->setSexo($_POST['sexo']);
		$student->setEmail($_POST['email']);
		$student->setTelefone($_POST['telefone']);
		$student->setCidade($_POST['cidade']);
		$student->setEstado($_POST['estado']);
		$student->setMensagem($_POST['mensagem']);
		if($student->alterar()){
			echo "Cliente alterado com sucesso!";
		}else{
			echo "Erro ao alterar o Cliente!";
		}
		echo "</br><a href='index.php'>Voltar</a>";
	}
?>
