<?php

/**
 *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
 *  Puis on insère les élements redondants footer et head  
 */
$js = "js/register.js";
$css = "./css/main.css";
$titre = "SoleCooler Connexion";
$bodyId = "login";
require_once("./inc/head.php");
require_once("./inc/header.php");
require_once("./inc/utils.php");

$email = filter_input(INPUT_GET, "email");
$code = filter_input(INPUT_GET, "activation_code");

if ($email && $code) {

    $user = find_user_pwd_token($code, $email);

    if ($user) :

        $messageErreur = forgot_change_password($user);
?>
        <main class="container space-arround-m">
            <div class="right">
                <form method="POST">
                    <h1>Mot de passe oublié</h1>

                    <div>
                        <label for="password"> Nouveau mot de passe</label>
                        <input type="password" placeholder="Mot de passe" name="password" onkeyup='validatePassword()' id="password">
                    </div>
                    <div>
                        <label for="confirm">Confirmez le nouveau Motdepasse</label>
                        <input name="confirm" type="password" placeholder="Confirmez Mot de passe" onkeyup='validatePassword()' id="confirm">
                    </div>

                    <button class="button-2" type="submit">Changer le mot de passe</button>

                </form>
            </div>
            <?php if ($messageErreur != "") : ?>
                <div style="display: flex; align-items: center;">
                    <lottie-player src="./assets/lottie/error.json" background="transparent" speed="1" style="width: auto; height: 70px;" loop autoplay></lottie-player>
                    <h3 style="width: 80%;"><?php echo $messageErreur ?> </h3>
                </div>
            <?php endif ?>
        </main>

    <?php
    else :

        redirection("./login.php"); ?>

<?php
    $_SESSION["message"] = "Votre mot de passe à été changé avec succès";
    redirection("./login.php");
    endif;
} else {
    redirection("./login.php");
}
require_once("./inc/footer.php");
?>