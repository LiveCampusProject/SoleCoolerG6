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
// require_once("./inc/nav.php");
require_once '../inc/utils.php';

// On appelle avis() qui renverra la liste des avis
$users = users();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        

        <div class="content">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th class="text-center">isAdmin</th>
                        <th class="text-center">Date de création</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td scope="row"><?= $user['userID'] ?></td>
                            <td><?= $user['nom'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td class="text-center">
                                <?php 
                                    if($user['isAdmin'] == 1){
                                        echo 'Oui';
                                    }else if($user['isAdmin'] == 0){
                                        echo 'Non';
                                    }
                                ?>
                            </td>
                            <td class="text-center"><?= $user['registerDate'] ?></td>
                            <td class="text-center">
                                <a href="modifier.php?referenceUser=<?= $user['userID'] ?>"><i class="fa-solid fa-pencil"></i></a>
                            </td>
                            <td class="text-center">
                            <a href="supprimer.php?referenceUser=<?= $user['userID'] ?>"><i class="fa-solid fa-xmark"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>