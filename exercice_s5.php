<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice_s5</title>
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
		<h1> Exercice Formulaires I </h1>
		<br><br><hr><br><br>
		<h2> Exercice I</h2><br>
		<h3> Exercice I.I </h3><br>


		<form name="form1" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" name="prenom"><br>
			Nom:<br><input type="text" name="nom"><br>
			<input type="submit" name="submit1"><br>

		</form>

		<?php 

			$prenom = "";
			$nom = "";

			if (isset($_POST['submit1'])) 
			{
				$prenom = $_POST['prenom'];
				$nom = $_POST['nom'];
			}

			$prenom = strip_tags($prenom);
			$nom = strip_tags($nom);
			echo $prenom.' '.$nom;

			echo '<br><br><hr><br><br>';
			echo '<h3> Exercice I.II </h3><br>';


				$prenom2 = "";
				$nom2 = "";

				if (isset($_POST['submit2'])) 
				{
					$prenom = $_POST['prenom2'];
					$nom = $_POST['nom2'];
				}

				$prenom2 = strip_tags($prenom);
				$nom2 = strip_tags($nom);
				echo $prenom2.' '.$nom2;

		?>

		<form name="form2" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" value="<?php echo $prenom2; ?>" name="prenom2"><br>
			Nom:<br><input type="text" value="<?php echo $nom2; ?>" name="nom2"><br>
			<input type="submit" name="submit2"><br>

		</form>

	</body>
</html>