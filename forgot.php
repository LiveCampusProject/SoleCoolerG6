<?php

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "login";
require_once("./inc/head.php");
require_once("./inc/header.php");

/*
*   Formulaire de réinisiatlisation de mot de passe 
*/
$messageErreur = forgot_password();
?>

<main class="container space-arround-m">

    <div class="left">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="./assets/lottie/forgot.json" background="transparent" speed="1" style="width: 100%; height: 300px;" loop autoplay></lottie-player>

    </div>
    <div class="right">
        <form method="POST">
            <h1>Réinitialiser le mot de passe</h1>

            <div>
                <label for="email"> Email </label>
                <input type="email" placeholder="Email" name="email" id="email">
            </div>

            <button class="button-2" type="submit">Envoyer le mail</button>

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
require_once("./inc/footer.php");
?>