<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */


$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';

$info = ajouterUser();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        

        <div class="content">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required />
                    </div>
                    <div class="col">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" name="mail" id="mail" class="form-control" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col align-items-center d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur">
                            <label class="form-check-label" for="administrateur">Administrateur</label>
                        </div>
                    </div>
                    <div class="col">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" required />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <input type="submit" value="Ajouter" class="btn btn-success"/>
                    </div>
                </div>
            </form>
        </div>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>