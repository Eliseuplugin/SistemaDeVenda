<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Inicio</title>
	<?php include './inc/link.php'; ?>
</head>
<body id="container-page-index">
	<?php include './inc/navbar.php'; ?>
	<div class="jumbotron" id="jumbotron-index">
		<h1><span class="tittles-pages-logo">Departamento de Vendas</span><small style="color: #9796;">EquipMoz</small></h1>

		<p>
			Bem-vindo a plataforma de venda online
		</p>
	</div>
	<section id="new-prod-index">
		<div class="container">
			<div class="page-header">
				<h1>Novidades <small>dos nossos produtos</small></h1>
				
			</div>
			<div class="row">
				<?php 
				include 'configurar/configServer.php';
				include 'configurar/consulaSQL.php';
				$consulta= executarSQL::consultar("select * from produto where Stock >0 limit 4");
				$totalprodutos = mysql_num_rows($sconsulta);
				if ($totalprodutos>0) {
					while ($fila=mysql_fetch_array($consulta)) {
						echo '
						<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="thumbnail">
						<img src="assets/nomedaimage/'.$fila['Imagem'].'">
						<div class="caption">
							<h3>'.$fila['Marca'].'</h3>
							<p>'.$fila['NomeProd'].'</p>
							<p>$'.$fila['Preco'].'</p>
							<p class="text-center">'
					}
				} else {
					# code...
				}
				
				
			</div>
		</div>
	</section>

</body>
</html>