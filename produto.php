<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Produtos</title>
	<?php include './inc/link.php';?>
</head>

<body id="container-page-product">
	<?php include './inc/navbar.php'; ?>
	<section id="store">
		<br>
		<div class="container">
			<div class="page-header">
				<h1>Loja <small class="tittles-pages-logo">Dep.Vendas</small></h1>
			</div>
			<br><br>
			<div class="row">
				<div class="col-xs-12">
					<ul id="store-links" class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#all-product" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false">Todos os produtos</a></li>
						<li role="presentation" class="dropdown active">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Categorias <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
							<!-- Lista de categorias -->
							<?php 	
							$categorias= executarSQL::consultar("select * from categoria");
							while($cate=mysql_fetch_array($categorias)) {
								echo '
									<li>
										<a href="#'.$cate['CodigoCat'].'" tabindex="-1" role="tab" id="'.$cate['CodigoCat'].'-tab" data-toggle="tab" aria-controls="'.$cate['CodigoCat'].'" aria-expanded="false">'.$cate['Nome'].'
										</a>
									</li>';
								
							}
						?>
						</ul>
						
					</li>
							
					</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="all-product" aria-labelldby="all-product-tab">
								<br><br>
								<div class="row">
									<?php
									$consulta= executarSQL::consultar("select * from produto where Stock > 0");
									$totalprodutos = mysql_num_rows($consulta);
									if ($totalprodutos>0) {
										while ($fila=mysql_fetch_array($consulta)) {
											echo '
											<div class="col-xs-12 col-sm-6 col-md-4">
                                               <div class="thumbnail">	
                                               <img src="assets/nomedaimagem/'.$fila['Imagem'].'">
                                               <div class="caption">
                                               		<h3>'.$fila['Marca'].'</h3>
                                               		<p>'.$fila['NomeProd'].'</p>
                                               		<p>$'.$fila['Preco'].'</p>
                                               		<p class="text-center">
                                               			<a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'"
                                               			class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;
                                               			Detalhes</a>&nbsp;&nbsp;
                                               			<button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botaoCarrinho"><i class="fa fa-shopping-cart"></i>&nbsp; Adicionar<button>
                                               			</p>
                                               			</div>
                                               			</div>
                                               			</div>
											';
										}
									} else {
										echo '<h2>Nao existem produtos nesta categoria</h2>';
									}
									?>
								</div> <!-- fim dos conteudos do produto -->
								
							</div> 
							<?php
									$consulta_categorias= executarSQL::consultar("select * from categoria");
									while ($categ=mysql_fetch_array($consulta_categorias)) {
											echo '<div role="tabpanel" class="tab-pane fade active in" id="'.$categ['CodigoCat'].'" aria-labelldby="'.$categ['CodigoCat'].'-tab"><br>';
											$consultar_produtos= executarSQL::consultar("select * from produto where CodigoCat='".$categ['CodigoCat']."' and Stock > 0");
											$totalprod = mysql_num_rows($consultar_produtos);
											if($totalprod>0){
												while($prod=mysql_fetch_array($consultar_produtos)) {
													echo '
												<div class="col-xs-12 col-sm-6 col-md-4">
                                               <div class="thumbnail">	
                                               <img src="assets/nomedaimagem/'.$prod['Imagem'].'">
                                               <div class="caption">
                                               		<h3>'.$prod['Marca'].'</h3>
                                               		<p>'.$prod['NomeProd'].'</p>
                                               		<p>$'.$prod['Preco'].'</p>
                                               		<p class="text-center">
                                               			<a href="infoProd.php?CodigoProd='.$prod['CodigoProd'].'"
                                               			class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;
                                               			Detalhes</a>&nbsp;&nbsp;
                                               			<button value="'.$prod['CodigoProd'].'" class="btn btn-success btn-sm botaoCarrinho"><i class="fa fa-shopping-cart"></i>&nbsp; Adicionar<button>
                                               			</p>
                                               			</div>
                                               			</div>
                                               			</div>
											';
										}
									} else {
										echo '<h2>Nao existem produtos nesta categoria</h2>';
									}
									echo '</div>';
								}
									?>
						</div>
				</div>
			</div>
		</div>
	</section>
	<?php include './inc/rodape.php';?>
	<script>
		$(document).ready(function() {
			$('#store-links a:first').tab('show');
		})
	</script>

</body>
</html>