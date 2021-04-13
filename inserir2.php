<?php
	require_once 'produtos.php';
	if(isset($_POST['nome'])){
		$student = new produtos();
		$student->setNome($_POST['nome']);
		$student->setDescricao($_POST['descricao']);
		$student->setQuantidade($_POST['quantidade']);
		$student->setFornecedor($_POST['fornecedor']);
		if($student->inserir()){
			?>
			<script>
			   window.alert("Produto inserido com sucesso!");
			   window.location.href="./homeprodutos.php";
			</script>
			<?php
		}else{
			?>
			<script>
			   window.alert("Erro ao inserir o Produto!");
			   window.location.href="./homeprodutos.php";
			</script>
			<?php
		}
	}
?>
