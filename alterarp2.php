<?php
	require_once 'produtos.php';
	if(isset($_POST['nome'])){
		$student = new produtos();
		$student->setId($_POST['id']);
		$student->setNome($_POST['nome']);
		$student->setQuantidade($_POST['quantidade']);
		$student->setFornecedor($_POST['fornecedor']);

		if($student->alterar()){
			echo "Produto alterado com sucesso!";
		}else{
			echo "Erro ao alterar o Produto!";
		}
		echo "</br><a href='index.php'>Voltar</a>";
	}
?>
