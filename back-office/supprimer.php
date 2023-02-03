<?php
	require_once './inc/utils.php';
	produitSupprimer();
	avisSupprimer();
	userSupprimer();
	commandeSupprimer();
	header('Location: index.php')
?>
