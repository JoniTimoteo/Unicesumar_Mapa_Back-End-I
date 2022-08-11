<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mapa</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Arial";
		}
			html,body{
			height: 100%;
			color: #2f2518;
		}
		header{
			width: 100%;
			height: auto;
			padding: 35px;
			font-size: 25px;
			background-color: #f8e3c9;
			color: #e28743;
			border-bottom: 1px solid white;
		}
		header p{
			padding-bottom: 5px;
		}
		header ul{
			text-align: right;
			margin-top: 20px;
			margin-right: 20px;
		}
		header ul li{
			display: inline;
			padding-right: 25px;
		}
		header ul li a{
			text-decoration: none;
		}
		.one{
			width: 100%;
			height: 70px;
			background-color: #faead7;
		}
		.one p{
			font-size: 20px;
			padding: 20px;
			font-size: 25px;
		}
		.two{
			width: 100%;
			height: 550px;
			padding: 10px;
			font-size: 25px;
			background-color: #faead7;
		}
		.two P{
			padding-bottom: 25px;
		}
		.two ul{
			margin-top: 20px;
		}
		.two ul li{
			display: inline;
		}
		.two ul li a img{
			width: 300px;
			height: 250px;
		}
		footer{
			width: 100%;
			height: auto;
			background-color: #f8e3c9;
			border: 1px solid white;
		}
		footer p{
			font-size: 20px;
			padding: 15px;
			text-align: center;
		}
		footer ul{
			text-align: center;
			padding: 3px;
		}
		footer ul li{
			display: inline;
			padding-left: 10px;
		}
		footer ul li img{
			width: 40px;
			height: 40px;
		}
	</style>
</head>
<body>

	<?php
	$cardapio = array(0=>"1 - Bife Acebolado.",1=>"2 - Carne de Panela.",2=>"3 - Frango a Parmegiana.",3=>"4 - Filé de Frango Grelhado.",4=>"5 - Omelete.");
	?>

	<header>
		<p>Marmitas Dona Rita</p>
		<p>Sabor e Qualidade em um clique!</p>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Cardápio</a></li>
			<li><a href="">Contato</a></li>
		</ul>
	</header>

	<section class="one">
		<p>Peça sua marmita e nós entregamos rapidinho com Amor e Carinho!</p>
	</section><!--class one-->

	<section class="two">
		<p>Veja nosso Cardapio!</p>

		<?php 
		foreach ($cardapio as $cardapio) 
		{
			echo $cardapio;
			echo "<br />";
		}
		?>

		<ul>
			<li><a href="prato_1.html"><img src="img_mapa/bife-acebolado.jpg" /></a></li>
			<li><a href="prato_2.html"><img src="img_mapa/carne-panela.jpg" /></a></li>
			<li><a href="prato_3.html"><img src="img_mapa/frango-parmegiana.jpg" /></a></li>
			<li><a href="prato_4.html"><img src="img_mapa/file-frango.jpg" /></a></li>
			<li><a href="prato_5.html"><img src="img_mapa/omelete.jpg" /></a></li>
		</ul>
	</section><!--two-->

	<footer>
        <p>Fique a vontade para entrar em contato conosco! Teremos o maior prazer em atende-lo!</p>
        <ul>
        	<li><a href=""><img src="img_mapa/whats.png"></a></li>
        	<li><a href=""><img src="img_mapa/facebook.png"></a></li>
        	<li><a href=""><img src="img_mapa/instagram.png"></a></li>
        </ul>
		<p>Desenvolvido por Joni Timoteo</p>
	</footer>

</body>
</html>