<?php
$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';

ajouterArticle();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->

<div class="container">
   <h1 class="text-center">Ajouter un article</h1>

   <form method="POST" enctype="multipart/form-data" id="addArticle-form">
        <div class="input">
            <label>
                <div>Libelle</div>
                <input type="text" name="libelle" id="libelle" placeholder="Libelle" required />
            </label>
        </div>
        <div class="input">
            <label>
                <div>Date de parution</div>
                <input type="text" name="libelle" id="libelle" placeholder="Libelle" required />
            </label>
        </div>
        <div class="input">
            <label>
                <div>Lien</div>
                <input type="link" name="lien" id="lien" placeholder="Lien" required />
            </label>
        </div>

       <div>
            <input type="submit" value="Envoyer" class="btn btn-success"/>
       </div>
   </form>

</div>

<?php include_once '../inc/footer.php'; ?>