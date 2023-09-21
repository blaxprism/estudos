<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
	<style>
		img.nota{
			height: 50px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<?php
		//forma de fazer com internacionalização
		//definindo o padrão de lingua do código
		$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
		$reais = $_POST['reais'] ?? 180;
		//cem reais
		$cem = intdiv($reais, 100);
		$resto_cem = $reais % 100;
		//cinquenta reais
		$cinquenta = intdiv($resto_cem, 50);
		$resto_cinquenta = $resto_cem % 50;
		//vinte reais
		$vinte = intdiv($resto_cinquenta, 20);
		$resto_vinte = $resto_cinquenta % 20;
		//dez reais
		$dez = intdiv($resto_vinte, 10);
		$resto_dez = $resto_vinte % 10;
		//cinco reais
		$cinco = intdiv($resto_dez, 5);
		$resto_cinco = $resto_dez % 5;
		//dois reais
		$dois = intdiv($resto_cinco, 2);
		//um real
		$um = $dois % 2;
	?>
    <main>    
        <h1>
            Caixa eletronico
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<input type="number" name="reais" id="reais" value="<?=$reais?>">
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Saque de <?=numfmt_format_currency($padrao, $reais, "BRL")?> realizado</h2>
			<p>Os <?=$reais?> reais que você inseriu equivalem a:</p>
			<ul>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/100-reais.jpg?raw=true" alt="Nota de cem reais" class="nota"> X <?=$cem?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/50-reais.jpg?raw=true" alt="Nota de cinquenta reais" class="nota"> X <?=$cinquenta?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/20-reais.jpg?raw=true" alt="Nota de vinte reais" class="nota"> X <?=$vinte?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/10-reais.jpg?raw=true" alt="Nota de dez reais" class="nota"> X <?=$dez?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/5-reais.jpg?raw=true" alt="Nota de cinco reais" class="nota"> X <?=$cinco?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/2-reais.jpg?raw=true" alt="Nota de dois reais" class="nota"> X <?=$dois?></li>
				<li><img src="https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/d013/imagens/1-real.jpg?raw=true" alt="Moeda de um real " class="nota"> X <?=$um?></li>
			</ul>
		</section>
    </main>
</body>
</html>