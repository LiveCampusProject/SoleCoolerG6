<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    require_once '../inc/utils.php';
    // On appelle voirProduit qui renverra le produit recherché
    $avis = voirAvis()
?>

<!-- On voit le produit ici -->
<main class="main">
    <div class="container">
        

        <div class="content">
            <h1><?= $avis['userID'] ?></h1>
            <p><?= $avis['note'] ?></p>
            <em><?= $avis['description'] ?></em>
        </div>                       
    </div>
<main class="main">

<?php include_once '../inc/footer.php'; ?>