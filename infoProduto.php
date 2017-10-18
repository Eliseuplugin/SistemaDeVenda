<?php
include './configurar/configServer.php';
include './configurar/consultSQL.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Produtos</title>
	<?php include './inc/link.php';?>
</head>
<body id ="container-page-product">
	<?php include './inc/navbar.php'; ?>
	<section id="infoproduto">
		<div  class="container">
			<div class="row">
				<div class="page-header">
					<h1>Online <small class="tittles-pages-logo">Dep.Vendas</small></h1>
				</div>
				<?php 
					SCodigoProduto=$_GET['CodigoProd'];
					$produtoinfo= executarSQL::consultar("select * form produto where CodigoProd ='".$CodigoPoduto."
						'");
					while ($fila=mysql_fetch_array($produtoinfo)) {
						echo '
							<div class="col-xs-12 col-sm-6"> 
								<h3></h3>
								<h3></h3>
								<h3></h3>
							</div>
						';
					}
			</div>
		</div>
	</section>

</body>
</html>