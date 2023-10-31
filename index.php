<!DOCTYPE html>
<html>
<head>
	<title>Caucular_Gorjeta</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">

</head>
<body>
	<div id="Forms">
	<form method="get"><h2>Cauculadora de Gorjetas</h2><br/>

		<p><input type="numero" name="valorconta" placeholder="Valor" required></p>
		
		<p><select name="qualidade" >
			<option value="10"> Excelente–10% </option>
			<option value="8"> Otimo–8% </option>
			<option value="5"> Bom–5% </option>
			<option value="2"> Ruim–2% </option></select></p>
	
		<p><button type="submit">Caucular</button></p>
		
	</form>
</div>

<?php
 	
 	if (isset($_GET['valorconta'],$_GET['qualidade'])) {
 	$valorconta = $_GET['valorconta'];
 	$qualidade = $_GET['qualidade'];
 	$valorgorgeta = 0;
 	$total = 0;
	

		switch ($qualidade) {
			case '10':

			$valorgorgeta = $valorconta  * 0.1 ;
			$total = $valorconta + $valorgorgeta;

			break;
			case '8':
				
			$valorgorgeta = $valorconta  * 0.08 ;
			$total = $valorconta + $valorgorgeta;	
			
			break;
			case '5':
				
			$valorgorgeta = $valorconta  * 0.05 ;
			$total = $valorconta + $valorgorgeta;

			break;
			case '2':
			
			$valorgorgeta = $valorconta  * 0.02 ;
			$total = $valorconta + $valorgorgeta;

			break;
			
		}
}
?>
	<div id="Forms">
	 <p><input type="number" placeholder="Valor Gorjeta:" value="<?= $valorgorgeta ?>" ></p>
	<p><input type="number" placeholder="Valor Gorjeta:" value="<?= $total ?>" ></p>
</div>
</body>
<div id="footer">
	<p>Programação Web - Todos Direitos Reservados 2023
	Created by :  
	Gabriel Augusto RM 22674
	

</div>
</html>


