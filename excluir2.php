<?php
	require_once 'produtos.php';	
	if(isset($_GET['id'])){
		$student = new produtos();
		$student->setId($_GET['id']);
		if($student->apagar()){
			?>
			<script>
			   window.alert("Produtos Apagado com sucesso!");
			   window.location.href="./index.php";
			</script>
			<?php
		}else{
					?>
			<script>
			   window.alert("Erro ao excluir o Produtos!");
			   window.location.href="./index.php";
			</script>
			<?php
		}
	}
?>
