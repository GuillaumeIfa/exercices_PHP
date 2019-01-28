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

			$text = 'This is a random sentence, it is totally random';

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
				
				if ($var%2 != 0) 
				{
					for ($i=2; $i <  $var ; $i++) 
					{ 
							if ($var%$i == 1)
							{
								echo 'Premier !';
							}
					}
				}
				else
				{
					echo 'Pas Premier';
				}

			}

			premier(7);

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice IV</h2><br>';
			echo '<h3> Exercice IV.I </h3>';

			$John = array (2, 7, 9, 12, 6, 13);
			$dep = 0;

			foreach ($John as $key => $value) 
			{
				$dep += $value;
			}

			echo 'John a dépensé ' .$dep. ' euros.<br>';

			echo '<h3> Exercice IV.II </h3>';

			function depense($array)
			{
				$var = 0;
				foreach ($array as $key => $value) 
				{
					$var += $value;
				}
				return $var;
			}

			echo 'John a dépensé ' .depense($John). ' euros.<br>';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice V</h2><br>';

			

			function palindrome($var)
			{
				$lenth =  strlen($var);

				for ($i=0; $i < (strlen($var)/2) ; $i++) 
				{ 
					if ($var[$i] != $var[$lenth-1]) 
					{
						return 'Pas palindrome !';
					}
					elseif ($var[$i] == $var[$lenth-1]) 
					{
						$lenth--;
					}	
				}
				return 'Palindrome !';
			}

			echo palindrome('cedric');


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VI</h2><br>';

			function htmlImage($src)
			{
				return '<img src="'.$src.'">';
			}

			echo htmlImage('image.gif');

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VII</h2><br>';
			echo '<h3> Exercice VII.I </h3>';

			$x = 10;
			$y = 5;

			echo 'L\'aire du rectangle est de '.$x*$y.'.<br>';

			echo '<h3> Exercice VII.II </h3>';

			function aire($x, $y)
			{
				return $x*$y;
			}

			echo "L'aire du rectangle est de ".aire(5,10).".<br>";

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VIII</h2><br>';

			function multi($x=0,$y=0)
			{
				return $x*$y;
			}
			
			echo 'Résultat de la fonction avec 10 et 2: ' .multi(10,2). ".<br>";
			echo 'Résultat de la fonction avec 4: ' .multi(4). ".<br>";


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice IX</h2><br>';

			function countwords($text)
			{
				$tableau = explode(' ', $text);
				return count($tableau);
			}
		
			echo 'Il y a ' .countwords($text). ' mot(s) dans la phrase : "' .$text. '".<br>';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice X</h2><br>';
			
			function countEachWords($text)
			{
				$tableau = explode(' ', $text);
				$tableau2 = array ();

				foreach ($tableau as $key => $value) 
				{
					$tableau2[$value][$key] = $tableau[$key];
				}
				foreach ($tableau2 as $key => $value) 
				{
					$tableau2[$key] = count($tableau2[$key]);
				}
				
				return $tableau2;
			}

			echo '<pre>';
			print_r(countEachWords($text));
			echo '</pre>';


		?>

	</body>
</html>