$(document).ready(function () {
	// Envio de formulario com Ajax para eliminar o produto
	$('#del-prod-form form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#del-prod-form form').serialize();
		var metodo=$('#del-prod-form form').attr('method');
		var peticao=$('#del-prod-form form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-del-prod").html('Eliminando o produto <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-del-prod").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("res-form-del-prod").html(data);
			}
		});
		return false;
	});


	// Envio de formulario com Ajax para adicionar uma categoria
	$('#add-categori form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#add-categori form').serialize();
		var metodo=$('#add-categori form').attr('method');
		var peticao=$('#add-categori form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-add-categori").html('Adicionar uma categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-add-categori").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("#res-form-add-categori").html(data);
			}
		});
		return false;
	});


	// Envio de formulario com Ajax para eliminar categoria
	$('#del-categori form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#del-categori form').serialize();
		var metodo=$('#del-categori form').attr('method');
		var peticao=$('#del-categori form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-del-cat").html('Eliminando a categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-del-cat").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("res-form-del-cat").html(data);
			}
		});
		return false;
	});


	// Envio de formulario com ajax para adicionar o provedor
	$('#add-provee form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#add-provee form').serialize();
		var metodo=$('#add-provee form').attr('method');
		var peticao=$('#add-provee form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-add-prove").html('Adicionar um provedor <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-add-prove").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("#res-form-add-prove").html(data);
			}
		});
		return false;
	});


	// Envio de formulari com ajax para eliminar provedor
	$('#del-prove form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#del-prove form').serialize();
		var metodo=$('#del-prove form').attr('method');
		var peticao=$('#del-prove form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-del-prove").html('Eliminando o provedor <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-del-prove").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("res-form-del-prove").html(data);
			}
		});
		return false;
	});


	// Atualizar categoria com ajax
	$('.button-UC').click(function () {
	var myId = $(this).val();
		$('#update-categoria form#' +myId).submit(function (e) {
			e.preventDefault();
		var informacao=$('#update-categoria form#' +myId).serialize();
		var metodo=$('#update-categoria form#' +myId).attr('method');
		var peticao=$('#update-categoria form#' +myId).attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Atualizando...');
			},
			error: function () {
				$("div#"+myId).html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("div#"+myId).html(data);
			}
		});
		return false;
		});
		
	});


	// Atualizar provedor com ajax
	$('.button-UP').click(function () {
	var myId = $(this).val();
		$('#update-provedor form#' +myId).submit(function (e) {
			e.preventDefault();
		var informacao=$('#update-provedor form#' +myId).serialize();
		var metodo=$('#update-provedor form#' +myId).attr('method');
		var peticao=$('#update-provedor form#' +myId).attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Atualizando...');
			},
			error: function () {
				$("div#"+myId).html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("div#"+myId).html(data);
			}
		});
		return false;
		});
		
	});



	// Atualizar produto com ajax
		$('.button-UPR').click(function () {
	var myId = $(this).val();
		$('#update-produto form#' +myId).submit(function (e) {
			e.preventDefault();
		var informacao=$('#update-produto form#' +myId).serialize();
		var metodo=$('#update-produto form#' +myId).attr('method');
		var peticao=$('#update-produto form#' +myId).attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Atualizando...');
			},
			error: function () {
				$("div#"+myId).html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("div#"+myId).html(data);
			}
		});
		return false;
		});
		
	});


		// Envio do formulario com ajax para adicionar administrador
			$('#add-admin form').submit(function (e) {
				e.preventDefault();
				var informacao=$('#add-admin form').serialize();
				var metodo=$('#add-admin form').attr('method');
				var peticao=$('#add-admin form').attr('action');
				$.ajax({
				type: metodo,
				ur: peticao,
				data: informacao,
				beforeSend: function () {
					$("#res-form-add-admin").html('Adicionando um Administrador <br><img src="assets/img/enviando.gif" class="center-all-contens">');
				},
				error: function () {
					$("#res-form-add-admin").html("Ocorreu um erro com o sistema");
				},
				sucess: function (data) {
					$("#res-form-add-admin").html(data);
				}
			});
			return false;
		});



		// Envio de formulario com ajax para eliminar o administrador
		$('#del-admin form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#del-admin form').serialize();
		var metodo=$('#del-admin form').attr('method');
		var peticao=$('#del-admin form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-del-admin").html('Eliminando o Administrador <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-del-admin").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("res-form-del-admin").html(data);
			}
		});
		return false;
	});


		// Atualizar pedido com ajax
		$('.button-UPPE').click(function () {
		var myId = $(this).val();
		$('#update-pedido form#' +myId).submit(function (e) {
			e.preventDefault();
		var informacao=$('#update-pedido form#' +myId).serialize();
		var metodo=$('#update-pedido form#' +myId).attr('method');
		var peticao=$('#update-pedido form#' +myId).attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Atualizando...');
			},
			error: function () {
				$("div#"+myId).html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("div#"+myId).html(data);
			}
		});
		return false;
		});
		
	});


		// Envio de formulario com ajax para eliminar pedido
		$('#del-pedido form').submit(function (e) {
		e.preventDefault();
		var informacao=$('#del-pedido form').serialize();
		var metodo=$('#del-pedido form').attr('method');
		var peticao=$('#del-pedido form').attr('action');
		$.ajax({
			type: metodo,
			ur: peticao,
			data: informacao,
			beforeSend: function () {
				$("#res-form-del-pedido").html('Eliminando o Pedido... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
			},
			error: function () {
				$("#res-form-del-pedido").html("Ocorreu um erro com o sistema");
			},
			sucess: function (data) {
				$("res-form-del-pedido").html(data);
			}
		});
		return false;
	});

})