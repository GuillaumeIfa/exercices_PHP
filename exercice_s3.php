<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>PHP_Exercice_S3</title>
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
				font-size: 25px;
			}
		</style>
	<body>
		<h1> Exercices S_III </h1>
		  <br><br><hr><br><br>

	<?php
		
		echo '<h2> Exercice I-II-III</h2>';


		echo '<p>Hello World !</p>';


		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice IV</h2>';

		$random = 'random';
		echo '<p>This is a ' .$random. ' sentence.</p>'; 


		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice V</h2>';

		$random = 'beautiful';
		echo '<p>This is a ' .$random. ' sentence.</p>';

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice VI</h2>';	

		$x = 10;
		$y = 2;
		$total = 0;

		$total = $x + $y;
		echo $x. ' + ' .$y. ' = ' .$total. '<br>';

		$total = $x - $y;
		echo $x. ' - ' .$y. ' = ' .$total. '<br>';

		$total = $x * $y;
		echo $x. ' * ' .$y. ' = ' .$total. '<br>';

		$total = $x / $y;
		echo $x. ' / ' .$y. ' = ' .$total. '<br>';

		$total = $x % $y;
		echo $x. ' % ' .$y. ' = ' .$total. '<br>';

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice VI</h2>';

		$sept = 7;

		echo 'Ma variable contient ' .$sept. '.<br>';
		echo 'J\'ajoute 3. Ma variable contient maintenant ' .($sept+=3).'.<br>';
		echo 'Je soustrais 4. Ma variable contient maintenant ' .($sept-=4).'.<br>';
		echo 'Je multiplie par 2. Ma variable contient maintenant ' .($sept*=2). '.<br>';
		echo 'Je divise par 3. Ma variable contient maintenant ' .($sept/=3). '.<br>';
		$sept++;
		echo 'J\'incrémente ma valeur de 1. Ma variable contient maintenant ' .$sept. '.<br>';
		$sept--;
		echo 'Je décrémente ma valeur de 1. Ma variable contient maintenant ' .$sept. '.<br>';

		echo '<br><br><hr><br><br>';
		echo '<h1>Execices CONTROL STRUCTURES</h1>';
		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice I</h2>';

		$date = date('F');
		
		if ($date == 'October') 
		{
			echo 'C\'est le mois d\'octobre, il commence à faire froid !';
		}
		else
		{
			echo 'Nous ne sommes pas au mois d\'octobre, il n\'y aura pas halloween :(';
		}

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice II</h2>';

		$x = 10;

		if ($x > 50) 
		{
			echo 'Mon nombre est plus grand que 50.';	
		}
		elseif ($x > 20) 
		{
			echo 'Mon nombre est plus grand que 20.';
		}
		elseif ($x > 10)
		{
			echo 'Mon nombre est plus grand que 10.';
		}
		else
		{
			echo 'Mon nombre est plus petit ou égal à 10.';
		}


		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice III</h2>';

		for ($i=1; $i < 11; $i++) 
		{ 
			echo $i. ' ';
		}


		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice IV</h2>';

		for ($i=1; $i < 11; $i++) 
		{ 
			echo '<li>Numéro ' .$i. '</li>';
		}

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice V</h2>';

		$i = 1;

		while ($i <= 10) 
		{
			echo '<li>Numéro ' .$i. '</li>';
			$i++;
		}

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice VI</h2>';


		$assiette = 0;

		while ( $assiette <= 9) 
		{
			echo 'J\'ai lavé ' .$assiette. ' assiette(s).<br>';
			$assiette++;
		}


		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice VII</h2>';


		$total = 0;

		for ($i=1; $i < 11; $i++) 
		{ 
			$total = $total + $i;
		}

		echo 'La somme de 1+2+3+4+5+6+7+8+9+10 = ' .$total;


		echo '<br><br><hr><br><br>';
		echo '<h1>Execices ARRAY</h1>';
		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice I</h2>';

		$kebab = array 
		(
			0 => 'salade',
			1 => 'tomate',
			2 => 'oignon',
			3 => 'chou rouge',
			4 => 'sauce blanche'
		);

		echo $kebab[3];
		echo '<br>';
		echo 'Je n\'aime pas le ' .$kebab[3]. '.<br>';

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice II</h2>';

		
		echo 'Dans un vrai kebab, il y a ';

		for ($i=0; $i < 5; $i++) 
		{ 
			echo $kebab[$i]. ' ';
		}

		echo '.';
		

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice III</h2>'; 


		$ingredients = '';

		foreach ($kebab as $key => $value) 
		{
			$ingredients .= $value. ' ';
		}

		echo 'Dans un vrai kebab, il y a: ' .$ingredients. '.';

		echo '<br><br><hr><br><br>';
		echo '<h2> Exercice IV</h2>';

		$ingredients = '';

		
			foreach ($kebab as $key => $value) 
			{
				if ($kebab[$key] != 'oignon') 
				{
					$ingredients .= $value. ' ';
				}
			}

		

		echo 'Dans un vrai kebab, il y a ' .$ingredients. '.';

		echo '<br><br><hr><br><br>';

	?>

		 
		
	</body>
</html>