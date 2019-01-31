<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice_s7</title>
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
	<h1> Exercice_VII </h1>
		<br><br><hr><br><br>
	<h2> Exercice I</h2><br>

	<?php 

		$mail = 'simon@yopmail.com';
		$positionArobase = strpos($mail, '@');

		if ($positionArobase) 
		{
			echo "Valid email, symbol found at position " .$positionArobase. ".<br>";
		}else
		{
			echo "Invalid Email !";
		}

		echo   '<br><br><hr><br><br>';
		echo '<h2> Exercice II</h2><br>';

		$sentence = 'This is a random sentence';
		$change = str_replace('random', 'beautiful', $sentence);

		echo $change. '<br>';

		echo   '<br><br><hr><br><br>';
		echo '<h2> Exercice III</h2><br>';

		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
		$tuerSlash = str_replace('/', ' ', $movies);

		echo $tuerSlash. '<br>';

		echo   '<br><br><hr><br><br>';
		echo '<h2> Exercice IV</h2><br>';

		$explose = explode(' ', $sentence);
		$compte = count($explose);

		echo 'La phrase est: "' .$sentence.'".<br>';
		echo 'Le dernier mot de la phrase est "' .$explose[$compte-1].'".<br>';


	?>
</body>
</html>