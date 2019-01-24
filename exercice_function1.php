<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Exercice_Fonction_I</title>
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
		<h1> Exercice Fonctions I </h1>
			<br><br><hr><br><br>
			
		<?php

			echo '<h2> Exercice I</h2><br>';
			echo '<h3> Exercice I.I </h3><br>';

			$text = 'This is a random sentence';

			echo $text. '<br>';

			echo '<h3> Exercice I.II </h3><br>';

			function affiche($var)
			{
				echo $var. '<br>';
			}

			affiche($text);


			echo '<h3> Exercice I.III </h3><br>';


			function concat($var1, $var2)
			{
				echo $var1.$var2. '<br>';
			}

			$caca = 'caca';
			$boudin = 'boudin';

			concat($caca, $boudin);
			echo '<br>';
			concat('caca','boudin');
			echo '<br>';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice II</h2><br>';

			function grand($var1, $var2)
			{
				if ($var1 > $var2) 
				{
					echo 'Le premier nombre est plus grand que le deuxieme.';
				}
				elseif ($var1 < $var2) 
				{
					echo 'Le premier nombre est plus petit que le deuxième.';
				}
				else
				{
					echo 'Les deux nombres sont identiques.';
				}
			}

			grand(25, 12);

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice III</h2><br>';

			function premier($var)
			{
				for ($i=3; $i <  $var ; $i++) 
				{ 
					if ($var%2 != 1) 
					{
						if ($var/$i)
						{
							echo 'Premier !';
						}
					}
				}
			}

			premier(11);


		?>
	</body>
</html>