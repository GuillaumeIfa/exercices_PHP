<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>PHP_Exercice_S2</title>
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
				font-size: 55px;
				font-weight: bolder;
			}
		</style>
	<body>
		<h1> Exercices S_II </h1>
			<br><br><hr><br><br>

		<?php 

			echo '<h2> Exercice I</h2>';

			$TabPays = array
			( 
				"France"      => "Paris", 
				"Italy"       => "Rome", 
				"Luxembourg"  => "Luxembourg", 
				"Belgium"     => "Brussels", 
				"Denmark"     => "Copenhagen", 
				"Finland"     => "Helsinki", 
				"Slovakia"    => "Bratislava", 
				"Slovenia"    => "Ljubljana", 
				"Germany"     => "Berlin", 
				"Greece"      => "Athens", 
				"Ireland"     => "Dublin", 
				"Netherlands" => "Amsterdam", 
				"Portugal"    => "Lisbon", 
				"Spain"       => "Madrid", 
				"Sweden"      => "Stockholm"
			);


			foreach ($TabPays as $pays => $capitale) 
			{
				echo 'La capitale de ' .$pays. ' est ' .$capitale. '.<br>';
			}


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice II</h2>';


			$courses = array
			(
				"Salade" 	 => "1.03",
				"Tomate" 	 => "2.3",
				"Oignon" 	 => "1.85",
				"Chou rouge" => "0.85"
			);

			asort($courses);
			echo '<b>asort:</b><br>';
			foreach ($courses as $ingredient => $prix) 
			{
				echo $ingredient. ' coûte: ' .$prix. '€.<br>';
			}

			echo '<br>';
			echo '<b>ksort:</b><br>';
			ksort($courses);

			foreach ($courses as $ingredient => $prix) 
			{
				echo $ingredient. ' coûte: ' .$prix. '€.<br>';
			}

			echo '<br>';
			echo '<b>arsort</b>:<br>';
			arsort($courses);

			foreach ($courses as $ingredient => $prix) 
			{
				echo $ingredient. ' coûte: ' .$prix. '€.<br>';
			}

			echo '<br>';
			echo '<b>krsort</b>:<br>';
			krsort($courses);

			foreach ($courses as $ingredient => $prix) 
			{
				echo $ingredient. ' coûte: ' .$prix. '€.<br>';
			}

			
			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice III</h2>';

			$total_prix = 0;

			foreach ($courses as $prix) 
			{
				$total_prix = $total_prix + $prix;
			}

			echo 'Le prix total des courses est de '.$total_prix. ' euros. <br>';

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice IV</h2>';

			echo 'Suite de chiffre avec <b>FOR</b>: <br>';
			for ($i=2; $i < 21; $i+=2) 
			{ 
				echo $i.' ';
			}


			$i = 2; // Réinitialisation Variable
			echo '<br><br>Suite de chiffre avec <b>WHILE</b>: <br>';
			while ($i <= 20) 
			{
				echo $i. ' ';
				$i+=2;
			}

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice V</h2>';

			$gens = array
			(
				"Marie"     => "Adulte", 
				"Stephane"  => "Enfant", 
				"Alexandre" => "Adulte", 
				"Julie"     => "Adolescent",
				"Sarah"     => "Adulte",
				"Remi"      => "Enfant"
			);


			echo 'Les adultes sont: ';
			foreach ($gens as $key => $value) 
			{
				if ($value == 'Adulte')
				{
					echo  $key. ' ';
				}
			}
			echo '<br>Les enfants sont: ';
			foreach ($gens as $key => $value) 
			{
				if ($value == 'Enfant')
				{
					echo  $key. ' ';
				}
			}


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VI</h2>';

			$multi = array();

			for ($i=0; $i <= 10; $i++) 
			{ 
				$multi["2x$i"] = $i*2;
			}

			echo '<pre>';
			print_r($multi);
			echo '</pre>';


			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VII</h2>';


			for ($i=1; $i < 6; $i++) 
			{ 
				for ($j=0; $j < $i; $j++) 
				{ 
					echo '*';
				}
				echo '<br>';
			}



			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice VIII</h2>';




			
			for ($i=1; $i < 6; $i++) 
			{ 
				for ($j=0; $j < $i; $j++) 
				{ 
					echo '*';
				}
				echo '<br>';
			}

			for ($i=5; $i > 1; $i--) 
			{ 
				for ($j=1; $j < $i; $j++) 
				{ 
					echo '*';
				}
				echo '<br>';
			}

			echo '<br><br><hr><br><br>';
			echo '<h2> Exercice IX</h2>';


			$artistes = array
			(
       			0 => array("Eminem", "IAM"), 
		        1 => array("Madonna", "Katy Perry"), 
		        2 => array("Pink Floyd", "AC/DC")
    		);
    
    
    
		    $styles = array
		    (
		        0 => "Rap",
		        1 => "Pop", 
		        2 => "Rock"
		    );

		    $musique = array ();


/*		    for ($i=0; $i < (count($styles)); $i++) { 
		    	$musique[$styles[$i]] = $artistes[$i];
		    }*/

		    foreach ($styles as $key => $value) 
		    {
		    	$musique[$value] = $artistes[$key];
		    }

		    var_dump($musique);


		    echo '<br><br><hr><br><br>';
			echo '<div><h2> Exercice X</h2>';

			$transactions = array
			(
			    "Marie" => array
			    (
			        "debit"  => 6,
			        "credit" => 9
			    ),

			    "Julien" => array
			    (
			        "debit"  => 21,
			        "credit" => 19
			    ),

			    "Sophie" => array
			    (
			        "debit"  => 15,
			        "credit" => 14
			    ),
			    "John" => array
			    (
			        "debit" => 10,
			        "credit"=> 14
			    )
			);

			foreach ($transactions as $key => $value) 
			{
				$transactions[$key]['amount'] = $transactions[$key]['credit'] - $transactions[$key]['debit'];
			}
			

			var_dump($transactions);


			echo '</div><br><br><hr><br><br>';
			echo '<h2> Exercice XI</h2>';

			$cities = array
			(
			    "Paris" => array
			    (
			        "people"=>2244621,
			        "surface"=>105.4
			    ),

			    "Marseille" => array
			    (
			        "people"=>852516,
			        "surface"=>240.6
			    ),

			    "Lyon" => array
			    (
			        "people"=>496343,
			        "surface"=>47.87
			    ),

			    "Toulouse" => array
			    (
			        "people"=>453317,
			        "surface"=>118.3
			    ),

			    "Nice" => array
			    (
			        "people"=>343629,
			        "surface"=>71.92
			    ),

			    "Nantes" => array
			    (
			        "people"=>291604,
			        "surface"=>65.19
			    ),

			    "Strasbourg" => array
			    (
			        "people"=>274394,
			        "surface"=>78.26
			    ),

			    "Montpellier" => array
			    (
			        "people"=>2244621,
			        "surface"=>105.4
			    ),

			    "Bordeaux" => array
			    (
			        "people"=>241287,
			        "surface"=>49.36
			    ),

			    "Rennes" => array
			    (
			        "people"=>209860,
			        "surface"=>50.39
			    )
			);


			foreach ($cities as $key => $value) 
			{
				$cities[$key]['density'] = $cities[$key]['people'] / $cities[$key]['surface'];
			}

			var_dump($cities);


			echo '</div><br><br><hr><br><br>';
			echo '<h2> Exercice XII</h2>';


			$array = array(5, 1, 3, 2, 9, 6, 8, 4, 10);

			$var = 0;


			for ($i=1; $i <= (count($array)+1); $i++) 
			{  
				$var += $i;
			}

			foreach ($array as $key => $value) 
			{
				$var = $var - $value;
			}

			echo  '<p>'.$var.'<p>';
			 

		 ?>
		
	</body>
</html>


