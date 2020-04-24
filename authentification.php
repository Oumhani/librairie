<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Authentification du lecteur</h1>
	<form method="post" action="test_authentification.php">
	<table>
		<tr>
			<td>Nom du lecteur</td>
			<td>: <input type="text" name="nom_auteur"></td>
		</tr>
		<tr>
			<td>Mot de passe</td>
			<td>: <input type="password" name="password"></td>
		</tr>
	</table>
	</form>
	<input type="submit" name="login" value="Login">
</body>
</html>
