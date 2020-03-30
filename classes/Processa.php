<?php require_once "../conexao/conexao.php";?>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>
<body style="color: white;">
	<center><br><br>
		<div class="container container-fluid rounded p-4 bg-dark" style="width: 400px;">
<?php 
	class Processa{
		private $nome;
		private $tipo;
		private $quantidade;
		
	//--------------Encapsulamento com GET e SET------------------
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function getQuantidade(){
			return $this->quantidade;
		}
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}
	//--------------Regra de negocio-----------------
		public function insere($conexao, $nome, $tipo, $quantidade){
			$this->setNome($nome);
			$this->setTipo($tipo);
			$this->setQuantidade($quantidade);
			$sql = "insert into produtos (nome, tipo, quantidade)
					values ('$nome', '$tipo', '$quantidade')";
			$resultado = mysqli_query($conexao, $sql);
			return $resultado;
		}
	}

	$obj = new Processa;
		if($obj ->insere($conexao ,$_POST["nome"], $_POST["tipo"], $_POST["quantidade"])){ 
			echo "<h3>Adicionado com sucesso!<br></h3>";
			echo "Nome: ". $obj->getNome() ."<br>";
			echo "Tipo: ". $obj->getTipo() ."<br>";
			echo "Quantidade: ". $obj->getQuantidade() ."<br>";
		}else{
			$error = mysqli_error($conexao);
			echo "Não adicionado!";
			echo $error;
		}
?>
	<br><a href="../index.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
		</div>
	</center>
</body>
</html>