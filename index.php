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
							<p class="text-center">
								<a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'"class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalhes</a>&nbsp;&nbsp;
								<button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botaoCarrinho"><i class"fa fa-shopping-cart"></i>&nbsp; Adicionar</button>
								</p>

								</div>
								</div>
								</div>
								';
					}
				} else {
					echo '<h2>Nao ha produtos adicionado na lista</h2>';
				}
				?>
				
			</div>
		</div>
	</section>
	<section id="reg-info-index">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 text-center">
					<article style="margin-top:20%;">
						<p><i class="fa fa-users fa-4x"></i></p>
						<h3>Registrar</h3>
						<p>Registrar e adicionar cliente <span class="tittles-pages-logo">Dep.Vendas</span>para receber as melhores ofertas e descontos especiais de nossos produtos.</p>
						<p><a href="registration.php" class="btn btn-info btn-block">Registrar-se</a></p>
					</article>
				</div>
			</div class="col-xs-12 col-sm-6">
					<img src="assets/img/nomeda imagem" alt="" class="img-responsive">
				</div>
				</div>

		</div>
	</section>
	</section>

</body>
</html>