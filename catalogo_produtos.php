<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catálogo de produtos</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<h1>Catálogo de produtos</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
				<form role="form">
					<div class="form-group" action="catalogo_produtos.php" method="get">
						<label for="Produto">Nome do produto:</label>
						<select class="form-control" name="id_produto" id="id_produto">
							<option value="1">Cadeira</option>
							<option value="2">Fogão</option>
							<option value="3">Roteador wi-fi</option>
							<option value="4">TV 29"</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default">Ver detalhes</button>
				</form>
			</div>

			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>

		<div class="row">
			<h1>Detalhes do produto</h1>
		</div>

		<div class="row">
			<div class="col-md-4">
				<?php 

				  $id_produto = $_GET['id_produto'];
          
					$detalhes[1] = "Apresentamos as nossas espetaculares cadeiras de aço inoxidável, uma síntese perfeita de elegância contemporânea, durabilidade excepcional e conforto ergonômico. Cada cadeira é uma obra-prima que transcende as expectativas, oferecendo muito mais do que apenas um assento; é uma declaração de estilo e qualidade.";
					$detalhes[2] = "
					Apresentamos o nosso extraordinário fogão, uma obra-prima de inovação e design que transformará a sua experiência culinária. Mais do que um simples eletrodoméstico, este fogão é uma promessa de praticidade, eficiência e elegância na sua cozinha.";
					$detalhes[3] = "
					Apresentamos o nosso roteador WiFi de última geração, uma revolução na conectividade doméstica que redefine os padrões de desempenho, confiabilidade e velocidade. Este dispositivo inovador é muito mais do que um simples roteador; é a ponte para um mundo conectado, onde a velocidade ultrarrápida e a estabilidade são a norma.";
					$detalhes[4] = "Introduzindo a nossa incrível Smart TV de 29 polegadas Full HD, uma verdadeira obra-prima de tecnologia e entretenimento em casa. Combinando design elegante, desempenho avançado e uma experiência de visualização envolvente, esta TV é a escolha perfeita para quem busca qualidade excepcional.";

					echo $detalhes[$id_produto];

				?>
			</div>
		</div>

	</div>
</body>

</html>