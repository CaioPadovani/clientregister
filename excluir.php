<?php
	require_once 'clientes.php';	
	if(isset($_GET['id'])){
		$student = new clientes();
		$student->setId($_GET['id']);
		if($student->apagar()){
			?>
			<script>
			   window.alert("Cliente Apagado com sucesso!");
			   window.location.href="./index.php";
			</script>
			<?php
		}else{
					?>
			<script>
			   window.alert("Erro ao excluir o Cliente!");
			   window.location.href="./index.php";
			</script>
			<?php
		}
	}
?>
