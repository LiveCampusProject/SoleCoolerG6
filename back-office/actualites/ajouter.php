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

ajouterActualite();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->

<div class="container">
    <div class="content">
    <div class="row">
        <h1 class="text-center">Ajouter une actualité</h1>
    </div> <br>
    
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

        <form method="POST" enctype="multipart/form-data">
            <div class="wrapper">
                <div class="group">
                    <input type="text" name="libelle" id="libelle"required />
                    <label for="libelle">Libelle</label>
                </div>
                <div class="group">
                    <label for="date" class="date">Date de publication</label>
                    <input type="date" name="date" id="date" required />
                </div>
            </div>
            <div class="wrapperRow">
                <div class="group">
                    <textarea name="description" id="description" required ></textarea>
                    <label for="description">Description</label>
                </div>
            </div>
            <div class="">
                <div class="text-center">
                    <input type="submit" value="Ajouter" class="button-1"/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../inc/footer.php'; ?>