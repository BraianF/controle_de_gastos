<?php
	require_once('class/FormaDePagamento.php');
	session_start();


?>

<html>
<head>
	<title>Pagina Principal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap align-items-center">
				<div class="col text-center">
					<h1 class="display-4 font-italic">Controle de gastos</h1>
				</div>
			</div>
		</header>

		<!-- <div class="nav-scroller py-1 mb-2 "> -->
		<div class="nav-scroller ">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" id="cadastroTipoGasto" href="#">Cadastro Tipo de Gasto</a>
				<a class="p-2 text-muted" id="cadastroGasto" href="#" >Cadastro de Gasto</a>
				<a class="p-2 text-muted" id="cadastroFormaPagamento" href="#">Cadastro Forma de Pagamento</a>
			</nav>
		</div>

		<!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
			<div class="col-md-6 px-0">
			<h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
			<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
			<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
			</div>
		</div> -->
		<?php
			include_once "cadastros/cadastroTipoDeGasto.html";
			include_once "cadastros/cadastroGasto.html";
			include_once "cadastros/cadastroFormaDePagamento.html";
		?>

		<div class="row mb-2">
			<div class="col-md-6">
			<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
				<div class="col p-4 d-flex flex-column position-static" >
					<strong class="d-inline-block mb-2 text-primary">Tipos de gasto cadastrados</strong>
					<div  id="cardTiposDeGasto"></div>
				</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
				<div class="col p-4 d-flex flex-column position-static" >
					<strong class="d-inline-block mb-2 text-success" >Formas de pagamento cadastradas</strong>
					<div id="cardFormasDePagamento"></div>
					
				</div>
			</div>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-12">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static" >
						<strong class="d-inline-block mb-2 text-success">Gastos cadastrados</strong>
						<div  id="cardGastos"></div>
					</div>
				</div>
			</div>
		</div>


		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">Braian Gabriel Antoniolli</p>
			<p class="mb-1">Projeto baseado no tema <a href="https://getbootstrap.com/docs/4.3/examples/blog/">Blog</a></p>
		</footer>
	</div>
	<script src="js/functionsFormaPagamento.js"></script>
	<script src="js/functionsTipoDeGasto.js"></script>
	<script src="js/functionsGasto.js"></script>
	<script src="js/funcoes.js"></script>
</body>
</html>
