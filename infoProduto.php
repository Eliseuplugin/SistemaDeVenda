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
								<h3 class="text-center">Informacao do produtoto</h3>
								<br><br>
								<h4><strong>Nome: </strong>'.$fila['NomeProd'].'</h4><br><br>
								<h4><strong>Modelo: </strong>'.$fila['Modelo'].'</h4><br>
								<h4><strong>Marca: </strong>'.$fila['Marca'].'</h4><br>
								<h4><strong>Preco: </strong>$'.$fila['Preco'].'</h4>
							</div>
							<div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <img class="img-responsive"
                                	src="assets/nomedaimage/'.$fila['Imagem'].'">
                                	</div>
                                	<br><br><br>
                                	<div class="col-xs-12 text-center">
                                	<a href="produto.php"class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;De volta a loja</a>&nbsp;&nbsp;&nbsp;
                                	<button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botaoCarrinho"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Adicionar ao carrinho</button>
                                	</div>

						';
					}
					?>
			</div>
		</div>
	</section>
  <?php include './inc/rodape.php'; ?>
</body>
</html>