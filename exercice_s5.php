<!DOCTYPE html>
<html lang="fr">
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
		?>
		
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

		   <br><br><hr><br><br>
		<h3> Exercice I.II </h3><br>


		<?php

			$prenom2 = "";
			$nom2 = "";

			if (isset($_POST['submit2']))
			{
				$prenom2 = $_POST['prenom2'];
				$nom2 = $_POST['nom2'];
			}

			$prenom2 = strip_tags($prenom2);
			$nom2 = strip_tags($nom2);

			echo $prenom2.' '.$nom2.'<br>';

		?>

		<form name="form2" method="POST" action="exercice_s5.php">

			Prenom:<br>
			<input type="text" value="<?php echo $prenom2; ?>" name="prenom2"><br>
			Nom:<br>
			<input type="text" value="<?php echo $nom2; ?>" name="nom2"><br>
			<input type="submit" name="submit2"><br>

		</form>



		<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->

		<br><br><hr><br><br>
		<h3> Exercice I.III </h3><br>




		<?php

			$nom3 = '';
			$prenom3 = '';

			if (isset($_POST['submit3']))
			{
				$prenom3 = $_POST['prenom3'];
				$nom3 = $_POST['nom3'];
			}

			$prenom3 = strip_tags($prenom3);
			$nom3 = strip_tags($nom3);
			$test = 0;
			
			$users = array
			(
				"johnny hallyday", 
				"simon bertrand", 
				"tom hanks", 
				"toto tata", 
				"john john"
			);

			foreach ($users as  $value) 
			{
				if ($value == $prenom3.' '.$nom3) 
				{
					$test = 1;
				}
			}

			$prenom3 = ucfirst($prenom3);
			$nom3 = ucfirst($nom3);

			if ($test == 1) 
			{
				echo 'Bienvenue ' .$prenom3. ' ' .$nom3. ' !';
			}
		?>

		<form name="form3" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" value="<?php echo $prenom3; ?>" name="prenom3"><br>
			Nom:<br><input type="text" value="<?php echo $nom3; ?>" name="nom3"><br>
			<input type="submit" name="submit3"><br><br>

		</form>	


<!-- 		//////////////////////////////////////////////////////////////////////////// -->		
		
		<?php

			$nom4 = '';
			$prenom4 = '';


            if (isset($_POST['submit4']))
            {
                $prenom4 = $_POST['prenom4'];
                $nom4 = $_POST['nom4'];
                $nom4 = $prenom4.' '.$nom4;
            }

            $users = array
            (
                "johnny hallyday",
                "simon bertrand",
                "tom hanks",
                "toto tata",
                "john john"
            );

            function connexion($tab, $str)
            {
                $test = 0;

                foreach ($tab as $value)
                {
                    if ($value == $str)
                    {
                        $test = 1;
                    }
                }

                return $test;
            }

            if (connexion($users, $nom4) == 1)
            {
                echo 'Bienvenue ' .$nom4. ' !';
            }
        ?>

		<form name="form4" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" value="<?php echo $prenom4; ?>" name="prenom4"><br>
			Nom:<br><input type="text" value="<?php echo $nom4; ?>" name="nom4"><br>
			<input type="submit" name="submit4"><br><br>

		</form>	            



	</body>
</html>
