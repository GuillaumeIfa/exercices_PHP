<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>PHP_Exercice_S4</title>
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

			h6
			{
				font-weight: 20;
				font-size: 10px;
				letter-spacing: 10px;
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
		<h1> Exercices S_IV </h1>
			<br><br><hr><br><br>

		<?php
			
			echo '<h2> Exercice I</h2>';

			$tab = array (9, 7, 18, 3, 8, -12, 4, 666, 13, 408);
			$max = $tab[2];
			$min = $tab[5];

			foreach ($tab as $value) 
			{
				if ($max < $value) 
				{
					$max = $value;
				}

				if ($min > $value) 
				{
					$min = $value;
				}

			}

			echo 'Le nombre maximum est ' .$max. '<br> Le nombre minimum est ' .$min;

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice II</h2>';

			$tab = array (9, 7, 18, 5, 3, 8, -12, 4, 666, 13, 408);
			$max = $tab[2];
			$min = $tab[5];
			$keyMax = 0;
			$keyMin = 0;

			foreach ($tab as $key => $value) 
			{
				if ($max < $value) 
				{
					$max = $value;
					$keyMax = $key;
				}
				
				if ($min > $value) 
				{
					$min = $value;
					$keyMin = $key;
				}
			}

			echo 'Le nombre maximum est ' .$max. ',<br>';
			echo 'Le nombre minimum est ' .$min. ',<br>';
			echo 'Le nombre maximum est placé en ' .$keyMax. 'ème position,<br>';
			echo 'Le nombre minimum est placé en ' .$keyMin. 'ème position.';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice III</h2>';

			$NbImp = 0;
			$NbPai = 0;

			foreach ($tab as $value) 
			{
				if ($value&1) 
				{
					$NbImp += 1;
				}

				if ($value%2 != 1) 
				{
					$NbPai += 1;
				}
			}

			echo 'Il y a ' .$NbPai. ' nombres pairs et ' .$NbImp. ' nombres impairs.';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice IV</h2>';
			
			$tab1 = array (9, 20, 10, 3, 25, 2, 4);
			$tab2 = array (2, 5, 13, 3, 1, 11, 7);
			$resultat = array ();

			foreach ($tab1 as $key => $value) 
			{
				$resultat[$key] = $tab1[$key] + $tab2[$key];
			}

			var_dump($resultat);

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice V</h2>';

			$students = array
			(
			    "john" => array
			    (
			        "classe" => "devweb",
			        "note"   => 12.5
			    ),

			    "bob" => array
			    (
			        "classe" => "devlog",
			        "note"   => 15
			    ),

			    "max" => array
			    (
			        "classe" => "devweb",
			        "note"   => 2.5
			    ),

			    "julien" => array
			    (
			        "classe" => "devweb",
			        "note"   => 4
			    ),

			    "stephane" => array
			    (
			        "classe" => "devlog",
			        "note"   => 8
			    ),

			    "julie" => array
			    (
			        "classe" => "devweb",
			        "note"   => 11
			    ),

			    "christelle" => array
			    (
			        "classe" => "devweb",
			        "note"   => 17
			    ),

			    "charles" => array
			    (
			        "classe" => "devweb",
			        "note"   => 14
			    )
			);

			echo '- - - - - - - - - - - - - - - - - - - - - - - -<br>';
			echo '(a)<br>';

			$moyenneWeb = 0;
			$moyenneLog = 0;
			$Log = 0;
			$Web = 0;

			foreach ($students as $key) 
			{
				foreach ($key as $key2 => $value) 
				{
					if ($value == 'devweb') 
					{
						$moyenneWeb += $key['note'];
						$Web++;
					}

					if ($value == 'devlog')
					{
						$moyenneLog += $key['note'];
						$Log++;
					}
				}
			}

			$moyenneWeb /= $Web;
			$moyenneLog /= $Log;

			echo 'La moyenne des DevWeb est de ' .$moyenneWeb. '.<br>';
			echo 'La moyenne des DevLog est de ' .$moyenneLog. '.<br>';

			echo '- - - - - - - - - - - - - - - - - - - - - - <br>';
			echo '(b)<br>';

			$etudiantsWeb = 0;
			$etudiantsLog = 0;

			foreach ($students as $key) 
			{
				foreach ($key as $key2 => $value) 
				{
					if ($value == 'devweb')
					{
						$etudiantsWeb += 1;
					}

					if ($value == 'devlog') 
					{
						$etudiantsLog += 1;
					}
				}
			}

			echo 'Il y a ' .$etudiantsWeb. ' étudiants en Oueb.<br>';
			echo 'Il y a ' .$etudiantsLog. ' étudiants en Logiciel.<br>';

			echo '- - - - - - - - - - - - - - - - - - - - - - - - -<br>';
			echo '(c)<br>';

			echo 'La moyenne en DevWeb est de: ' .$moyenneWeb. '.<br>';

			$NbEtu = 0;

			foreach ($students as $key)
			{
				if ($key['note'] > 10)
					{
						$NbEtu += 1;
					}			
			}

			echo 'Il y a ' .$NbEtu. ' étudiant.e.s qui ont une note au dessus de la moyenne.<br>';


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VI</h2>';



			$tab = array (9, 7, 18, 5, 3, 8, -12, 4, 666, 13, 408);
			$tabrev = array ();
			$compte = count($tab)-1;

			echo 'Avant:<br>';
			echo '<pre>';
			print_r($tab);
			echo '</pre>';

			foreach ($tab as $key => $value) 
			{
				$tabrev[$compte] = $tab[$key];
				$compte--;
			}

			ksort($tabrev);
			$tab = $tabrev;

			echo 'Après:';
			echo "<pre>";
			print_r($tab);
			echo "</pre>";


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VII</h2>';

			
			$caca = 7;
			$pipi = 0;

			for ($i= 0; $i < $caca; $i++) 
			{ 
				$pipi += $caca;
			}

			echo $caca. ' multiplié par ' .$caca. ' égal ' .$pipi;


			echo '<br><br><hr>';

			echo '<h6>Guillaume Ory</h6>';

		?>


	</body>
</html>