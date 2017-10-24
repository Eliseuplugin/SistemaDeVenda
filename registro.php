<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Registro</title>
	<?php include './inc/link.php'; ?>
</head>
<body id="container-page-registration">
		<?php include './inc/navbar.php'; ?>
		<section id="form-registration">
			<div class="container">
				<div class="row">
					<div class="page-header">
						<h1>Registro de usuarios <small class="tittles-pages-logo">Dep.Vendas</small></h1>
					</div>
					<div class="col-xs-12 col-sm-6 text-center">
						<br><br><br>
						<p><i class="fa fa-users fa-5x"></i></p>
						<p class="lead">
							Todos os registrados receberao notificacoes de nossos produtos e ofertas mais recentes em nossa loja
						</p>
						<br>
						<img src="assets/img/nomedaimagem.png" alt="pastas" class="img-responsive">
					</div>
					<div class="col-xs-12 col-sm-6">
						<br><br>
						<div id="container-form">
							<p style="color:#fff;" class="text-center lead">Voce deve preencher todos os campos para se registrar</p>
							<br><br>
							<form class="form-horizontal FormDepVenda" action="process/regra.php" role="form" method="post" data-form="save">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-credit-card"></i>
											
										</div>
										<input class="form-control all-elements-tooltip" type="text" placeholder="Digite o seu NUIT" required name="clien-nuit" data-toggle="tooltip" data-placement="top" title ="Digite seu numero de NUIT. apenas numeros e tracos(-)" maxlength="30" pattern="[0-9-]{14,30}">
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-user"></i>
											
										</div>
										<input class="form-control all-elements-tooltip" type="text" placeholder="Digite o nome do usuario" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Digite seu nome. Maximo 9 caracteres (apenas letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Digite seus nomes" required name="clien-fullname" data-toggle="tooltip" data-placement="top" title="Digite os seus nomes. (Apenas letras)" pattern="[a-zA-Z]{1,50}" maxlength="50">
								</div>
							</div>
							<br>
								<div class="form-group">
									<div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Digite uma senha" required name="clien-pass">
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</section>
</body>
</html>