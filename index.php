<html>
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
<body>
	<center><br><br><br><br>
		<form method="POST" action="classes/Processa.php">
			<div class="container container-fluid rounded p-4 bg-dark" style="width: 400px;">
				<h3 style="color: white;">Cadastro<span class="label label-default"></span></h3><br>
					<div class="form-row">
						<div class="form-group col-md-12">
						<label style="color: white;">Nome</label>
						<input type="text" name="nome" class="form-control"
						autocomplete="off" placeholder="Nome do produto">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
						<label style="color: white;">Tipo</label>
						<input type="text" name="tipo" class="form-control"
						autocomplete="off" placeholder="Tipo de produto">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
						<label style="color: white;">Quantidade</label>
						<input type="text" name="quantidade" class="form-control"
						autocomplete="off" placeholder="Quantidade de itens">
						</div>
					</div><br>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
		</form>
	</center>
</body>
</html>
	