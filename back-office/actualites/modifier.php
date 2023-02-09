<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    require_once '../inc/utils.php';

    $actualite = actuModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        <h1 class="text-center">Ajouter une actualité</h1>

        <form method="POST" enctype="multipart/form-data" id="addActualite-form">

            <div class="input">
                <label>
                    <div>Libelle</div>
                    <input type="text" name="libelle" id="libelle" placeholder="Libelle" value="<?= $actualite['libelle'] ?>" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Date de publication</div>
                    <input type="date" name="date" id="date" placeholder="Date de publication" value="<?= $actualite['date'] ?>" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Description</div>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Votre description..."  require=""><?= $actualite['description'] ?></textarea>
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Choisir un fichier</div>
                    <input type="file" id="actuFile" name="actuFile">
                </label>
            </div>
            <div class="">
                <input type="submit" value="Ajouter"/>
            </div>
        </form>
    </div>
</main>

<?php include_once '../inc/footer.php'; ?>