function atualizaCardFormasDePagamento (){
	$.ajax(
		{
			url: "functions/getFormaPagamentoSession.php",
			type: "POST",
			async: true,
			success: function(dados) {
				$("#cardFormasDePagamento").empty();
				$("#cardFormasDePagamento").append(dados)
			},
			error: function (erro) {
				console.log(erro.responseText);
			}
		}
	);
}

function atualizaCardTiposDeGasto(){
	$.ajax(
		{
			url: "functions/getTipoGastoSession.php",
			type: "POST",
			async: true,
			success: function(dados) {
				$("#cardTiposDeGasto").empty();
				$("#cardTiposDeGasto").append(dados)
			},
			error: function (erro) {
				console.log(erro.responseText);
			}
		}
	);
}

function atualizaCardGastos() {
	$.ajax(
		{
			url: "functions/getGastoSession.php",
			type: "POST",
			async: true,
			success: function(dados) {
				$("#cardGastos").empty();
				$("#cardGastos").append(dados)
			},
			error: function (erro) {
				console.log(erro.responseText);
			}
		}
	);
}