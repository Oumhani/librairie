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
	<h1>  Enregistrement d'un livre </h1>
	<form method="POST" action="valide_livre.php">
	<table>
			<tr>
				<td>
					<label>Nom de l'auteur</label> 
				</td >
				<td>
					: <input type="text" name="nom"> 
				</td>
			</tr>
			<tr>
				<td>
					<label>Prénom de l'auteur</label> 
				</td>
				<td>
					: <input type="text" name="prenom">
				</td>
			</tr>
			<tr>
				<td>
					Titre
				</td>
				<td>
					: <input type="text" name="titre">
				</td>
			</tr>
			<tr>
				<td>
					Catégorie
				</td>
				<td>
					: <input type="text" name="categorie">
				</td>
			</tr>
			<tr>
				<td>
					Numéro ISBN
				</td>
				<td>
					: <input type="text" name="numero">
				</td>
			</tr>
		</table>
			<input type="submit" name="enregistre" value="Enregistrer">
		</form>
</body>
</html>