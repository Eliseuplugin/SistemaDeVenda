<!DOCTYPE html>
<html>
<head>
	<title>Pedido</title>
	<?php include './inc/link.php'; ?>
</head>
<body id="container-page-index">
	<?php include './inc/navbar.php';?>
	<section id="container-pedido">
		<div class="container">
			<h1>Confirmar o pedido</h1>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive center-all-contens" src="assets/img/nomedaimagem.png" style="opacity: .4">
			</div>
			<div class="col-xs-12 col-sm-6">
				<div id="form-compra">
					<form action="process/confirmarcompra.php" method="post" role="form" class="FormDepVenda" data-form="save">
						<?php
						if (!$_SESSION['nomeusuario']=="" &&!$_SESSION['senhausuario']=="") {
							echo '
								<h2 class="text-center">Confirmar pedido</h2>
								<p class="text-center"> Para confirmar o seu pedido pressione o botao confirmar</p>
								<br>
								<img class="img-responsive center-all-contens" src="assets/img/nomedaimagem">
								<input type="hidden" naem="clien-name" value="'.$_SESSION['nomeusuario'].'">
								<input type="hidden" naem="clien-pass" value="'.$_SESSION['senhausuario'].'">
								<input type="hidden" name="clien-number" value="log">
								<br>
								<p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
							';
						} else {
							echo '
							<h3 class="text-center">Confirmar o pedido</h3>
							<p>
							Para confirmar sua compra deves iniciar a sessao e introduzir o seu nome de usuario e a contrasenha com a qual registraste em <span class="tittles-pages-logo">Departamento de Vendas</span>.
							</p>
							<br>
							<div class="form-group">
								<div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Digite o seu nome" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Digite o seu nome" pattern="[a-zA-Z]{1,9}" maxlength="9">
                                          </div>
                                          </div>
                                          <br>
                                          <div class="form-group">
                                          <div class="input-group">
                                          	<div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                          	<input class="form-contro all-elements-tooltip" type="password" placeholder="Digite a sua contrasenha" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Digite a sua contrasenha">	
                                          	</div>
                                          	</div>
                                          	<input type="hidden" name="clien-number" value="notlog">
                                          	<br>
                                          	<p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
							';
						}
						?>
						<div class="ResForm" style="width: 100%; text-align: center; margin: 0;"></div>
						
					</form>
				</div>
				
			</div>
		</div>
	</section>
<?php include './inc/rodape.php';?>
</body>
</html>