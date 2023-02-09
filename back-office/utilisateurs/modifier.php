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

$user = userModifier();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        
        <form method="POST">
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nom'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $user['email'] ?></h6>
                            <p class="card-text"><?= $user['registerDate'] ?></p>
                            <div class="form-check card-link">
                                <?php if($user['isAdmin'] == 1){?>
                                    <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur" checked>
                                <?php } else { ?>
                                    <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur">
                                <?php } ?>
                                <label class="form-check-label" for="administrateur">Administrateur</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <input type="submit" value="Envoyer" class="button-1"/>
                    </div>
                </div>
        </form>                     
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>