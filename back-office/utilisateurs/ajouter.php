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
        <form method="POST" id="addUser">
            <div class="input">
                <label>
                    <div>Nom</div>
                    <input type="text" name="name" id="name" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Email</div>
                    <input type="email" name="mail" id="mail" required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Administrateur</div>
                    <input type="checkbox" name="administrateur" id="administrateur">
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Mot de passe</div>
                    <input type="password" name="password" id="password" required />
                </label>
            </div>

            <div>
                <input type="submit" value="Ajouter"/>
            </div>
        </form>                     
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>