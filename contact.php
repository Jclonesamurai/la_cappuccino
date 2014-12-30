<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>La cappuccino en France</title>
    </head>

    <body>
		<?php 
			include("en_tete.php");	
		?>
		<form action="traitement.php" method="post">
		
		<fieldset>
				<legend>Vos Coordonnées </legend>
				
				<label for="nom">Nom : </label> 
				<input type="text" name="nom" id="nom" autofocus /><br /><!--mets le curseur automatiquement à l'endroit où on le souhaite-->
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom" required /><br /> 
				
				<label for="email">E-mail ?</label>
				<input type="email" name="email" id="email" /> <br /> 
			   
			    
			</form>
		</fieldset>
    </body>
</html>