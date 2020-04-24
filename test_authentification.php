<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php
	if ($_POST['nom']) {
		include("gestion_lecteur.php"); 
	}elseif ($_POST['nom']) {
		include("Enregistre_livre.php");
	}
?>