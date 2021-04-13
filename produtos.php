<?php
	require_once 'conexao.php';
	class produtos{
		private $id;
		private $nome;
		private $descricao;
		private $quantidade;
		private $fornecedor;
		
		public function setId($id){
			$this->id=$id;
		}
		public function getId(){
			return $this->id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function setQuantidade($quantidade){
			$this->quantidade=$quantidade;
		}
		public function getQuantidade(){
			return $this->quantidade;
		}
		public function setFornecedor($fornecedor){
			$this->fornecedor=$fornecedor;
		}
		public function getFornecedor(){
			return $this->fornecedor;
		}
		/*public function imprime(){
			echo "id=".$this->id."<br>";
			echo "nome=".$this->nome."<br>";
			echo "descricao=".$this->descricao."<br>";
			echo "quantidade=".$this->quantidade."<br>";
			echo "fornecedor=".$this->fornecedor."<br>";
		}*/
		public function inserir(){
			$conectado= new conexao();
			$st=$conectado->conn->prepare(
			"insert into produtos(nome,descricao,quantidade,fornecedor) ".
			"values(:n,:i,:t,:f)");
			$st->bindValue(":n",$this->getNome());
			$st->bindValue(":i",$this->getDescricao());
			$st->bindValue(":t",$this->getQuantidade());
			$st->bindValue(":f",$this->getFornecedor());
			return $st->execute();	
		}
		public function alterar(){
			$conectado= new conexao();
			$st=$conectado->conn->prepare(
			"update produtos set nome=:n,descricao=:i,".
			"quantidade=:t,fornecedor=:f where id=:id");
			$st->bindValue(":id",$this->getId());
			$st->bindValue(":n",$this->getNome());
			$st->bindValue(":i",$this->getDescricao());
			$st->bindValue(":t",$this->getQuantidade());
			$st->bindValue(":f",$this->getFornecedor());
			return $st->execute();	
		}
		public function apagar(){
			$conectado= new conexao();
			$st=$conectado->conn->prepare(
			"delete from produtos where id=:id");
			$st->bindValue(":id",$this->getId());
			return $st->execute();	
		}
		public function buscarTodos(){
			$conectado= new conexao();
			$st=$conectado->conn->prepare(
			"select * from produtos order by nome");
			$st->execute();	
			return $st->fetchAll();
		}	
		public function buscarId(){
			$conectado= new conexao();
			$st=$conectado->conn->prepare(
			"select * from produtos where id=:id");
			$st->bindValue(":id",$this->getId());
			$st->execute();	
			return $st->fetch();
		}	
	}
?>		