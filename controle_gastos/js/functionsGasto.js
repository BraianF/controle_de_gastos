$(document).ready(function () {
	atualizaCardGastos();
	atualizaCamposDoForm();
	verificaCamposvazios();
	$("#cadastroGasto").click(function () {
		$("#formaDePagamento").hide(900);
		$("#tipoDeGasto").hide(900);
		$("#gasto").slideToggle(900);

	});

	//Requisição ajax
	$("#formGasto").submit(function (event) {

		// Pega os dados dos campos
		var dadosDoForm = {
			'tipoGasto'	: $('#formGastoTipoGasto option:selected').val(),
			'dataGasto' : $("#formGastoDataGasto").val(),
			'custoGasto'		: $("#formGastoCustoGasto").val(),
			'pagamentoGasto'	: $('#formGastoFormaPagamentoGasto option:selected').val()
		};

		$.ajax(
			{
				url: "adicionaGasto.php",
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
		atualizaCardGastos();
	});

	function atualizaCamposDoForm() {
		$.ajax(
			{
				url: "functions/getDadosOption.php",
				type: "POST",
				async: true,
				success: function(dados) {

					$(dados[0]).each(function (index, dado) {
						$("#formGastoFormaPagamentoGasto").append(
							$("<option>").val(dado).text(dado)
						)
					});

					$(dados[1]).each(function (index, dado) {
						$("#formGastoTipoGasto").append(
							$("<option>").val(dado).text(dado)
						)
					});
					verificaCamposvazios();
				},
				error: function (erro) {
					console.log(erro.responseText);
				}
			}
		);
	}

	function verificaCamposvazios(){
		if($('#formGastoTipoGasto option:selected').length > 0){
			$("#alertaOpcoesTipoDeGasto").hide();
		} else {
			$("#alertaOpcoesTipoDeGasto").show();
		}
		if($('#formGastoFormaPagamentoGasto option:selected').length > 0){
			$("#alertaOpcoesFormaPagamento").hide();
		} else {
			$("#alertaOpcoesFormaPagamento").show();
		}
	}
});