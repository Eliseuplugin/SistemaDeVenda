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
				<div class="conteudo-tr">
					<a href="index.php" class="table-cell-td">Inicio</a>
					<a href="produto.php" class="table-cell-td">Produtos</a>
					<?php 
					if (!$_SESSION['nomeAdmin']=="") {
						echo '
							<a href="configAdmin.php" class="table-cell-td">Administracao</a>
							<a href="#" class="table-cell-td carrinho-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver o carrinho de compras">
							<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
							</a>
							<a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
							<i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nomeAdmin'].'
							</a>
						';
					}else if (!$_SESSION['nomeUser']=="") {
						echo '
							<a href="pedido.php" class="table-cell-td">Pedido</a>
							<a href="#" class="table-cell-td carrinho-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver o carrinho de compras">
							<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
							</a>
							<a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
							<i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nomeUser'].'
							</a>
						';
					}else{
						echo '
							<a href="registro.php" class="table-cell-td">Registro</a>
							<a href="#" class="table-cell-td carrinho-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver o carrinho de compras">
							<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
							</a>
							<a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
							<i class="fa fa-user"></i>&nbsp;&nbsp;Login
							</a>
						';
					}
					?>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row visible-xs">
		<div class="col-xs-12">
			<button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
				<i class="fa fa-th-list"></i>&nbsp;&nbsp;Menu
			</button>
			<a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrinho-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrinho de compras">
				<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
			</a>
			<?php 
			if (!$_SESSION['nomeAdmin']=="") {echo '
					<a href="#" id="button-login-xs" class="elements-nav-xs" data-toggle="modal"
				data-target=".modal-logout">
				<i class="fa fa-user"</i>&nbsp; '.$_SESSION['nomeAdmin'].'
				</a>';
			}else if (!$_SESSION['nomeUser']=="") {
				echo '
					<a href="#" id="button-login-xs" class="elements-nav-xs" data-toggle="modal"
				data-target=".modal-logout">
				<i class="fa fa-user"</i>&nbsp; '.$_SESSION['nomeUser'].'
				</a>';
			}else{
				echo '
					<a href="#" id="button-login-xs" class="elements-nav-xs" data-toggle="modal"
				data-target=".modal-logout">
				<i class="fa fa-user"</i>&nbsp; Iniciar a sessao
				</a>
				';
				
			}
			?>
		</div>
	</div>
</nav>

<!-- Modelo de login -->

<div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" id="modal-form-login">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar a sessao no Departamento de Vendas</h4>
			</div>
			<form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormDepVendas" data-form="login" >
				<div class="form-group">
					<label><span class="glyphicon glyphicon-user"></span>&nbsp;Nome</label>
					<input type="text" class="form-control" name="nome-login" placeholder="Digite seu nome" required=""/>
				</div>
				<div class="form-group">
					<label><span class="glyphicon glyphicon-lock"></span>&nbsp;Senha</label>
					<input type="text" class="form-control" name="nome-login" placeholder="Digite sua senha" required=""/>
				</div>
			</form>
		</div>
	</div>
</div>
