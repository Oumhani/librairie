<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylelib.css">
	<title></title>
</head>
<body>
	<h1>  Validation d'un lecteur </h1>
	<table>
			<tr>
				<td>
					Nom 
				</td >
				<td class="vert">
					: <?php  echo $_POST['nom'];
					$_SESSION['nom'] = $_POST['nom'];
					?>
				</td>
				
			</tr>
			<tr>
				<td>
					Prénom 
				</td>
				<td class="vert">
					: <?php echo $_POST['prenom'];
					$_SESSION['prenom'] = $_POST['prenom']; 
					?>
				</td>
			</tr>
			<tr>
				<td>
					Adresse
				</td>
				<td class="vert">
					: <?php echo $_POST['adresse'];
					$_SESSION['adresse'] = $_POST['adresse'];
					?>
				</td>
			</tr>
			<tr>
				<td>
					Ville
				</td>
				<td class="vert">
					: <?php 
					echo $_POST['ville'];
					$_SESSION['ville'] = $_POST['ville'];
					?>
				</td>
			</tr>
			<tr>
				<td>
					Code Postal 
				</td>
				<td class="vert">
					: <?php
					echo $_POST['code']; 
					$_SESSION['code'] = $_POST['code'];
					?>
				</td>
			</tr>
		</table>
		<p>Vous etes enregistré dans la base de la biblothèque,</p>
		<p>vous avez maintenant la possibilité de réserver de livres<a href="Enregistre_livre.php">ici</a></p>
		<a href="liste_livres.php">Cliquez ici pour voir la liste des livres disponibles</a>
</body>
</html>