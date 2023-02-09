<?php

/**
 *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
 *  Puis on insère les élements redondants footer et head  
 */
$js = "";
$css = "./css/main.css";
$titre = "SoleCooler Connexion";
$bodyId = "login";
require_once("./inc/head.php");
require_once("./inc/header.php");
require_once("./inc/utils.php");

$messageErreur = login_user();

?>

<main class="container space-arround-m">

<?php 
    if (isset($_SESSION["message"])):
?> 
    <div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="./assets/lottie/eclatsronds.json"  background="transparent"  speed="0.5"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
    <h2> <?php echo $_SESSION["message"] ?> </h2>
    <a href="/index.php">
      Revenir sur le site 
    </a>
    </div>
    <style>
      body {
        text-align: center;
      }

      div {
        margin-left: auto;
        margin-right: auto 
      }
      lottie-player {
        margin-left: auto;
        margin-right: auto 
      }

    </style>
    </main>

<?php 
    else:
?> 
  <div class="left">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="./assets/lottie/solecooler.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>

    <a href="/register.php">
      Pas encore de compte ?
    </a>

  </div>
  <div class="right">
    <h1>Connexion</h1>
    <form method="POST">

      <div>
        <label class="section" for="email">Email</label>
        <input type="email" placeholder="Email" name="email" id="email">
      </div>
      <div>
        <label class="section" for="password">Mot de passe</label>
        <input type="password" placeholder="Password" name="password" id="password">
      </div>

      <div>
        <label>
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
      </div>
      <div>
        <label>
          <a href="./forgot.php">Mot de passe oublié ?</a>
        </label>
      </div>
      <button type="submit" class="button-2">Connexion</button>

    </form>
    <?php if ($messageErreur != "") : ?>
      <div style="display: flex; align-items: center;">
        <lottie-player src="./assets/lottie/error.json" background="transparent" speed="1" style="width: auto; height: 70px;" loop autoplay></lottie-player>
        <h3 style="width: 80%;"><?php echo $messageErreur ?>  </h3>
      </div>
    <?php endif; ?>
</main>

<?php
endif;
unset($_SESSION["message"]);
require_once("./inc/footer.php");
?>