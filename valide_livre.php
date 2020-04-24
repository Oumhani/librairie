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
	<h1>  Validation d'un livre </h1>
	<table>
			<tr>
				<td>
					Nom de l'auteur
				</td >
				<td class="vert">
					: <?php  echo $_POST['nom'];
					?>
				</td>
				
			</tr>
			<tr>
				<td>
					Prénom de l'auteur 
				</td>
				<td class="vert">
					: <?php echo $_POST['prenom']; 
					?>
				</td>
			</tr>
			<tr>
				<td>
					Titre
				</td>
				<td class="vert">
					: <?php 
					echo $_POST['titre'];
					?>
				</td>
			</tr>
			<tr>
				<td>
					Catégorie
				</td>
				<td class="vert">
					: <?php 
					echo $_POST['categorie'];
					?>
				</td>
			</tr>
			<tr>
				<td>
					Numéro IBSN 
				</td>
				<td class="vert">
					: <?php
					echo $_POST['numero']; 
					?>
				</td>
			</tr>
		</table>
</body>
</html>