$(document).ready(function () {
	atualizaCardFormasDePagamento();
	$("#cadastroFormaPagamento").click(function () {
		$("#tipoDeGasto").hide(900);
		$("#gasto").hide(900);
		$("#formaDePagamento").slideToggle(900);
		
	});
	
	
	
	//Mostra o texto do valor so slider
	var sliderPrazo = $('#formFormaDePagamentoSliderPrazo');
	var textoParcelas = $('#formFormaDePagamentoTextoPrazo');
	textoParcelas.text(sliderPrazo.val());
	
	sliderPrazo[0].onchange = function () { 
		textoParcelas.text(this.value);
	};


	$(".formFormaDePagamentoRadio").change(function () { 
		if($("#formFormaDePagamentoRadioAPrazo:checked").length){
			$("#formFormaDePagamentoCampoPrazo").show();
		} else if($("#formFormaDePagamentoRadioAVista:checked").length){
			$("#formFormaDePagamentoCampoPrazo").hide();
			sliderPrazo.val("1");
			textoParcelas.text(sliderPrazo.val());
		}
	});


	//Requisição ajax
	$("#formFormaDePagamento").submit(function (event) {  
		
		if ($(".formFormaDePagamentoRadio:checked").length){
			// Pega os dados dos campos
			var dadosDoForm = {
				'descricao'	: $('#formFormaDePagamentoDescricao').val(),
				'avista'	: $('.formFormaDePagamentoRadio:checked').val(),
				'prazo'		: $('#formFormaDePagamentoSliderPrazo').val()
			};

			$.ajax(
				{
					url: "adicionaFormaDePagamento.php",
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
		} else{
			alert("Por favor, selecione a forma de pagamento")
		}
		

		event.preventDefault();
		atualizaCardFormasDePagamento();
	});
});