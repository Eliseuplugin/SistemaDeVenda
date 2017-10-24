$(document).ready(function () {
	$('#carrinho-loja-compras').load("process/carrinho.php");
	$(".buttonCarrinho").click(function () {
		$('#carrinho-loja-compras').load("process/carrinho.php?preco="+$(this).val());
		$('.carrinho-de-compras').modal('show');

	});
	$(".carrinho-button-nav").click(function () {
		$("#container-carrinho-compras").animate({height: 'toggle'},200);
	});
});