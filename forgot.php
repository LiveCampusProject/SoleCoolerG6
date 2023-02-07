<?php

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "";
require_once("./inc/head.php");
require_once("./inc/header.php");

/*
*   Formulaire de réinisiatlisation de mot de passe 
*/
$messageErreur=forgot_password();
?>

    <main>
        <form method="POST">
            <h1>Reset mot de passe</h1>

            <div>
                <input type="email" placeholder="email" name ="email" id= "email">
                <label> Email </label>
            </div> 

            <button type="submit">Envoyer le mail</button>
            
        </form>
        <?php if($messageErreur!=""): ?>
        <h1><?php echo $messageErreur ?> </h1>
        <?php endif ?>
    </main>
