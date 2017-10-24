$(document).ready(function () {
	$('#carrinho-loja-compras').load("process/carrinho.php");
	$(".buttonCarrinho").click(function () {
		$('#carrinho-loja-compras').load("process/carrinho.php?preco="+$(this).val());
		$('.carrinho-de-compras').modal('show');

	});
	$(".carrinho-button-nav").click(function () {
		$("#container-carrinho-compras").animate({height: 'toggle'},200);
	});
	$('.all-elements-tooltrip').tooltrip('hide');

	$('#modal-form-login form').submit(function (e) {
		e.preventDefault();
		var informacao=$('modal-form-login form').serialize();
		var metodo=$('modal-form-login form').attr('method');
		var peticao=$('#modal-form-login form').attr('action');
	});

	// Funcao para enviar dados do formulario com ajax
	$('.FormDepVenda').submit(function (e) {
		e.preventDefault();
		var data=$(this).serialize();
		var type=$(this).attr('method');
		var url=$(this).attr('action');
		var formType=$(this).attr('data-form');

		if (formType=="login") {
			$.ajax({
				type: type,
				url: url,
				data: data,
				beforeSend: function () {
					$(".ResFormL").html('Ininciando a sessao<br><img src="assets/img/loading.gif" class="center-all-contens">');
				},
				error: function () {
					$(".ResFormL").html("Ocorreu um erro com o sistema");
				},
				success: function (data) {
					
				}
			})
		}
	})
});