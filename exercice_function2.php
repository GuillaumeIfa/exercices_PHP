<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Exercice_Fonction_II</title>
	</head>
		<style> 
			body 
			{
				text-align: center; 
				background-color: black; 
				color: deeppink; 
				font-family: monospace; 
				font-size: 20px
			}
			h3
			{
				color: black;
				text-decoration: underline ;
				text-shadow: 0px 0px 5px deeppink;
			}
			h2
			{
				color: black;
				text-decoration: underline ;
				letter-spacing: -5px;
				text-shadow: 0px 0px 20px deeppink;
				text-decoration-style: wavy;			
			}
			h1
			{
				color: black;
				text-decoration: underline ;
				letter-spacing: 15px;
				text-shadow: 0px 0px 20px deeppink;
				text-decoration-style: wavy;
				text-transform: uppercase;			
			}
			p
			{
				font-size: 55px;
				font-weight: bolder;
			}
		</style>
	<body>
		<h1> Exercice Fonction II </h1>
			<br><br><hr><br><br>
			
		<?php

			echo '<h2> Exercice I</h2><br>';


			function compte ($x)
			{
				echo $x.' ';
				$x++;

				if ($x <= 50) 
				{
					compte($x);
				}
			}

			compte(60);

			echo '<br><hr><br>';
			echo '<h2> Exercice II</h2><br>';
			
			function MultAdd($x)
			{
				static $z = 0;
				static $y = 0;
				$z++;
				$y += $x;

				if ($z < $x) 
				{
					MultAdd($x);
				}

				return $y;	
			}

			echo MultAdd(5);

			echo '<br><hr><br>';
			echo '<h2> Exercice III</h2><br>';

			function facto($x)
			{
				static $y = 1;
				
				if ($x >= 1)
				{
					$y *= ($x);
					$x--;
					facto($x);
				}
				
				return $y;
			}

			echo facto(5);


	 	 ?>
	</body>
</html>
