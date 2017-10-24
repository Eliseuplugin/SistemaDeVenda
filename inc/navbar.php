<?php
session_start();
error_reporting(E_PARSE);
if (!isset($_SESSION['contador'])) {
	$_SESSION['contador'] = 0;
}
?>
<section id="container-carrinho-compras">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div id="carrinho-loja-compras"></div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<p class="text-center" style="font-size: 80px;">
					<i class="fa fa-shopping-cart"></i>
				</p>
				<p class="text-center">
					<a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar">Confirmar o pedido</i></a>
					<a href="process/carrinhovazio.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>Esvaziar carrinho</a>
				</p>
			</div>
		</div>
	</div>
</section>
<nav id="navbar-auto-hidden">
	<div class="row hidden-xs">
		<div class="col-xs-4">
			<figure class="logo-navbar"></figure>
			<p class="text-navbar tittles-pages-logo">Dep.Vendas</p>
		</div>
		<div class="col-xs-8">
			<div class="tabela-conteudo pull-right">
				<div class="conteudo">
					
				</div>
				
			</div>
		</div>
	</div>
</nav>
