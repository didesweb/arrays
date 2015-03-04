<?php
include "textos.php";
?>
<!DOCTYPE HTML>
<!-- Didesweb -->  
<!-- Diseño y desarrollo web -->  
<!-- http://didesweb.com/-->  
<!-- Este obra está protegida bajo licencia Creative Commons Attribution --> 
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Didesweb, ejemplo de arrays en PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Didesweb, ejemplo de arrays en PHP</h1>
	<h4 class="<?php echo $estilos["enlaces_normales"];?>">
		<?php echo $titulos["enc_1"];?>
	</h4>
	<h5 class="<?php echo $estilos["enlaces_destacados"];?>">
		<?php echo $titulos["enc_2"];?>
	</h5>
	<ul>
		<li>
			<a class="
				<?php echo $estilos["enlaces_normales"];?>" href="">
				<?php echo $enlaces["link_1"];?>
			</a>
		</li>
		<li>
			<a class="
				<?php echo $estilos["enlaces_destacados"];?>" href="">
				<?php echo $enlaces["link_2"];?>
			</a>
		</li>
	</ul>
</body>
</html>
