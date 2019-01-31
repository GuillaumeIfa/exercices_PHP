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

		?>

		<form name="form3" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" value="<?php echo $prenom3; ?>" name="prenom3"><br>
			Nom:<br><input type="text" value="<?php echo $nom3; ?>" name="nom3"><br>
			<input type="submit" name="submit3"><br><br>

		</form>	

		<?php 

			if ($test == 1) 
			{
				echo 'Bienvenue ' .$prenom3. ' ' .$nom3. ' !';
			}

		 ?>


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


	    ?>

		<form name="form4" method="POST" action="exercice_s5.php">

			Prenom:<br><input type="text" value="<?php echo $prenom4; ?>" name="prenom4"><br>
			Nom:<br><input type="text" value="<?php echo $nom4; ?>" name="nom4"><br>
			<input type="submit" name="submit4"><br><br>

		</form>	  

		<?php 

			if (connexion($users, $nom4) == 1)
	        {
	            echo 'Bienvenue ' .$nom4. ' !';
	        } 

	    ?>         

	    <!-- ///////////////////////////////////////////////////////////////////////// --> 

		<br><br><hr><br><br>
	    <h2> Exercice II</h2><br>
		<h3> Exercice II.I </h3><br>

		<?php 

			$mail = 'simon@yopmail.com';

			$pos = strpos($mail, '@');

			if ($pos) 
			{
				echo $mail. ' est une adresse valide !';
			}
			else
			{
				echo $mail. ' n\'est pas une adresse valide !';
			}

		 ?>

		<br><br><hr><br><br>
		<h3> Exercice II.II </h3><br>

		<?php 

			function VerifiMail($mail)
			{
				$test = 0;
				$position = strpos($mail, '@');

				if ($position) 
				{
					$test = 1;
				}

				return $test;
			}

			if (VerifiMail($mail) == 1) 
			{
				echo $mail. ' est une adresse valide !';
			}

		 ?>


		 <br><br><hr><br><br>
		<h3> Exercice II.III </h3><br>

		<form name="form5" method="POST" action="exercice_s5.php">

			Mail:<br><input type="text" value="" name="mail"><br>
			<input type="submit" name="submit5"><br><br>

		</form>


		<?php 

			if (isset($_POST['submit5'])) 
			{
				$mail2 = $_POST['mail'];

				if (VerifiMail($mail2) == 1) 
				{
					echo '<div style="color:chartreuse";>' .$mail2. ' est une adresse mail valide !</div>';
				}
				else
				{
					echo '<div style="color:magenta";>' .$mail2. ' n\'est pas une adresse mail valide !</div>';
				}
			}

		 ?>


		 	<br><br><hr><br><br>
		<h3> Exercice III </h3><br>
		<h3> Exercice III.I </h3><br>

		<?php 
			echo 2*4;
		 ?>
		
			<br><br><hr><br><br>
		<h3> Exercice III.II </h3><br>

		<?php 
			function multiplic($x, $y)
			{
				$resul = $x * $y;
				echo $resul;
			}

			multiplic(2, 4);
		 ?>

			<br><br><hr><br><br>
		<h3> Exercice III.III </h3><br>

		<form name="form6" method="POST" action="exercice_s5.php">

			Premier nombre:<br><input type="text" value="" name="premier"><br>
			Deuxième nombre:<br><input type="text" value="" name="deuxieme"><br>
			<input type="submit" name="submit6"><br><br>

		</form>

		<?php 

			if (isset($_POST['submit6'])) 
			{
				$x = $_POST['premier'];
				$y = $_POST['deuxieme'];

				multiplic($x, $y);
			}

		 ?>
			<br><br><hr><br><br>
		<h3> Exercice IV </h3><br>
		<h3> Exercice IV.I </h3><br>

		<?php 

			for ($i=0; $i < 11; $i++) 
			{ 
				echo $i. ' multiplié par deux est égal à ' .($i*2). '.<br>';
			}

			 ?>

			<br><br><hr><br><br>
		<h3> Exercice IV.II </h3><br>

		<?php 

			$x = 4;
			$multi = array ();

			for ($i=0; $i < 11; $i++) 
			{ 
				$multi[$i] = ($i*$x);
			}

			var_dump($multi);
		 ?>

			<br><br><hr><br><br>
		<h3> Exercice IV.III </h3><br>

		<?php 

			function tabMulti($var)
			{
				$tableau = array ();

				for ($i=0; $i < 11; $i++) 
				{ 
					$tableau[$i] = ($i*$var);
				}

				return $tableau;
			}

			var_dump(tabMulti(3));

		 ?>

			<br><br><hr><br><br>
		<h3> Exercice IV.IV </h3><br>

		<form name="form7" method="POST" action="exercice_s5.php">

			Entrez le nombre a multiplier:<br><br>
			<input type="text" value="" name="nombre"><br>
			<input type="submit" name="submit7"><br>

		</form>

		<?php

			if (isset($_POST['submit7'])) 
			{
				$x = $_POST['nombre'];

				var_dump(tabMulti($x));
			}

		 ?>

	</body>
</html>
