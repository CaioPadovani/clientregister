<?php
require_once 'clientes.php';
if (isset($_POST['nome'])) {
	$student = new clientes();
	$student->setNome($_POST['nome']);
	$student->setSobrenome($_POST['sobrenome']);
	$student->setSexo($_POST['sexo']);
	$student->setEmail($_POST['email']);
	$student->setTelefone($_POST['telefone']);
	$student->setCidade($_POST['cidade']);
	$student->setEstado($_POST['estado']);
	$student->setMensagem($_POST['mensagem']);
	if ($student->inserir()) {
		?>
		<script>
			window.alert("Cliente inserido com sucesso!");
			window.location.href = "./index.php";
		</script>
		<?php
	} else {
		?>
		<script>
			window.alert("Erro ao inserir o cliente!");
			window.location.href = "./index.php";
		</script>
		<?php
	}
}
?>