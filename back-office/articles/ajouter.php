<?php
$js = "";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
// require_once("./inc/nav.php");
require_once("../inc/footer.php");
require_once '../inc/utils.php';

ajouterArticle();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->

<div class="container mt-3">
    <div class="row">
        <h1 class="text-center">Ajouter un article</h1>
    </div>
    
    <!-- Message d'erreur ou de succès de l'ajout -->
    <div class="col">
        <?php 
            if( isset($info) && $info == 'Nouveau produit ajouté avec succès !'){
                echo '<div class="alert alert-success" role="alert">Nouveau produit ajouté avec succès !</div>';
            }else if(isset($info) &&  $info == "Une erreur est survenue lors de l'ajout du produit"){
                echo '<div class="alert alert-danger" role="alert">Nouveau produit ajouté avec succès !</div>';
            }else { 
                echo '<div></div>';
            } 
        
        ?>
    </div>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="libelle" class="form-label">Libelle</label>
                    <input type="text" name="libelle" id="libelle" class="form-control" required />
                </div>
                <div class="col">
                    <label for="date" class="form-label">Date de parution</label>
                    <input type="date" name="date" id="date" class="form-control" required />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="lien" class="form-label">Lien</label>
                    <input type="link" name="lien" id="lien" class="form-control" required />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <input type="submit" value="Envoyer" class="btn btn-success"/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../inc/footer.php'; ?>