$(document).ready(function () {
	atualizaCardTiposDeGasto();
	$("#cadastroTipoGasto").click(function () {
		$("#formaDePagamento").hide(900);
		$("#gasto").hide(900);
		$("#tipoDeGasto").slideToggle(900);

	});

	//Requisição ajax
	$("#formTipoDeGasto").submit(function (event) {

		// Pega os dados dos campos
		var dadosDoForm = {
			'descricao'	: $('#formTipoDeGastoDescricao').val(),
		};

		$.ajax(
			{
				url: "adicionaTipoDeGasto.php",
				type: "POST",
				data: dadosDoForm,
				dataType: 'json',
				async: true,
				success: function(dados) {

					alert(dados)
				},
				error: function (erro) {
					console.log(erro.responseText);
				}
			}
		);

		event.preventDefault();
		atualizaCardTiposDeGasto();
	});
});