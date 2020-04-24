<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylelib.css">
	<title>Interface de saisie d'un lecteur</title>
</head>
<body>
	<h1>  Enregistrement d'un lecteur </h1>
	<p>Si vous etes un nouveau lecteur, veuillez vous enregistrer en remplissant le formulaire ci-dessous :</p>
	<form method="POST" action="valide_lecteur.php">
	<table>
			<tr>
				<td>
					<label>Nom</label> 
				</td >
				<td>
					: <input type="text" name="nom"> 
				</td>
				
			</tr>
			<tr>
				<td>
					<label>Prénom</label> 
				</td>
				<td>
					: <input type="text" name="prenom">
				</td>
			</tr>
			<tr>
				<td>
					Adresse
				</td>
				<td>
					: <input type="text" name="adresse">
				</td>
			</tr>
			<tr>
				<td>
					Ville
				</td>
				<td>
					: <input type="text" name="ville">
				</td>
			</tr>
			<tr>
				<td>
					Code Postal
				</td>
				<td>
					: <input type="text" name="code">
				</td>
			</tr>
		</table>
			<input type="submit" name="enregistre" value="Enregistrer">
		</form>
</body>
</html>