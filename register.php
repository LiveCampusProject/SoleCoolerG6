<?php

/**
 *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
 *  Puis on insère les élements redondants footer et head  
 */
$js = "js/register.js";
$css = "./css/main.css";
$bodyId = "login";
$titre = "SoleCooler S'inscrire";
require_once("./inc/head.php");
require_once("./inc/header.php");
$messageErreur = create_user();
?>



<main class="container space-arround-m">

  <div class="left">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="./assets/lottie/solecooler.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>

    <a href="/login.php">
      Déjà un compte ?
    </a>

  </div>
  <div class="right">
    <h1>Inscrivez-vous</h1>
    <form method="POST">

      <div>
        <label for="nom">Nom & Prénom</label>
        <input type="text" placeholder="Nom & Prénom" name="nom" id="nom">
      </div>

      <div>
        <label for="email">Adresse email</label>
        <input type="email" placeholder="name@example.com" name="email" id="email">
      </div>

      <div>
        <label for="password">Mot de passe</label>
        <input name="password" type="password" placeholder="Mot de passe" onkeyup='validatePassword()' id="password">
      </div>

      <div>
        <label for="confirm">Confirmez le Mot de passe</label>
        <input name="confirm" type="password" placeholder="Confirmez Mot de passe" onkeyup='validatePassword()' id="confirm">
      </div>

      <button type="submit" class="button-2">Créer un compte</button>

    </form>
    <?php if ($messageErreur != "") : ?>
      
      <div style="display: flex; align-items: center;">
        <lottie-player src="./assets/lottie/error.json" background="transparent" speed="1" style="width: auto; height: 70px;" loop autoplay></lottie-player>
        <h3 style="width: 80%;"><?php echo $messageErreur ?>  </h3>
      </div>

    <?php endif; ?>
</main>

<?php require_once("./inc/footer.php"); ?>