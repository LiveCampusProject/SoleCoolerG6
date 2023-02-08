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

  <div class="left">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="./assets/lottie/60867-waiting.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>

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
      <h1><?php echo $messageErreur ?> </h1>
    <?php endif; ?>
</main>


<?php
require_once("./inc/footer.php");
?>