<?php
session_start(); // On démarre la session AVANT toute chose
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestion du lecteur</title>
</head>
<body>
	<h1>Gestion du lecteur</h1>
	<p>Le lecteur n'est pas reconnu</p>
	<p>Cliquez <a href="authentification.php">ici</a> pour une nouvelle identification</p>
	<?php include("Enregistre_lecteur.php"); ?>
</body>
</html>