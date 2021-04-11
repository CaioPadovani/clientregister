<?php
require_once 'conexao.php';
class clientes
{
	private $id;
	private $nome;
	private $sobrenome;
	private $sexo;
	private $email;
	private $telefone;
	private $cidade;
	private $estado;
	private $mensagem;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function setSobrenome($sobrenome)
	{
		$this->sobrenome = $sobrenome;
	}
	public function getSobrenome()
	{
		return $this->sobrenome;
	}
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}
	public function getSexo()
	{
		return $this->sexo;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}
	public function getTelefone()
	{
		return $this->telefone;
	}
	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
	}
	public function getCidade()
	{
		return $this->cidade;
	}
	public function setEstado($estado)
	{
		$this->estado = $estado;
	}
	public function getEstado()
	{
		return $this->estado;
	}
	public function setMensagem($mensagem)
	{
		$this->mensagem = $mensagem;
	}
	public function getMensagem()
	{
		return $this->mensagem;
	}
	public function imprime()
	{
		echo "id=" . $this->id . "<br>";
		echo "nome=" . $this->nome . "<br>";
		echo "sobrenome=" . $this->sobrenome . "<br>";
		echo "sexo=" . $this->sexo . "<br>";
		echo "email=" . $this->email . "<br>";
		echo "telefone=" . $this->telefone . "<br>";
		echo "cidade=" . $this->cidade . "<br>";
		echo "estado=" . $this->estado . "<br>";
		echo "mensagem=" . $this->mensagem . "<br>";
	}
	public function inserir()
	{
		$conectado = new conexao();
		$st = $conectado->conn->prepare(
			"insert into clientes(nome,sobrenome,sexo,email,telefone,cidade,estado,mensagem) " .
				"values(:n,:s,:se,:e,:t,:c,:es,:m,)"
		);
		$st->bindValue(":n", $this->getNome());
		$st->bindValue(":s", $this->getSobrenome());
		$st->bindValue(":se", $this->getSexo());
		$st->bindValue(":e", $this->getEmail());
		$st->bindValue(":t", $this->getTelefone());
		$st->bindValue(":c", $this->getCidade());
		$st->bindValue(":es", $this->getEstado());
		$st->bindValue(":m", $this->getMensagem());
		return $st->execute();
	}
	public function alterar()
	{
		$conectado = new conexao();
		$st = $conectado->conn->prepare(
			"update clientes set nome=:n,sobrenome=:s,sexo=:se,email=:e,telefone=:t,cidade=:c,estado=:es,mensagem=:m" .
				"tele where id=:id"
		);
		$st->bindValue(":id", $this->getId());
		$st->bindValue(":n", $this->getNome());
		$st->bindValue(":s", $this->getSobrenome());
		$st->bindValue(":se", $this->getSexo());
		$st->bindValue(":e", $this->getEmail());
		$st->bindValue(":t", $this->getTelefone());
		$st->bindValue(":c", $this->getCidade());
		$st->bindValue(":es", $this->getEstado());
		$st->bindValue(":m", $this->getMensagem());
		return $st->execute();
	}
	public function apagar()
	{
		$conectado = new conexao();
		$st = $conectado->conn->prepare(
			"delete from clientes where id=:id"
		);
		$st->bindValue(":id", $this->getId());
		return $st->execute();
	}
	public function buscarTodos()
	{
		$conectado = new conexao();
		$st = $conectado->conn->prepare(
			"select * from clientes order by nome"
		);
		$st->execute();
		return $st->fetchAll();
	}
	public function buscarId()
	{
		$conectado = new conexao();
		$st = $conectado->conn->prepare(
			"select * from clientes where id=:id"
		);
		$st->bindValue(":id", $this->getId());
		$st->execute();
		return $st->fetch();
	}
}
