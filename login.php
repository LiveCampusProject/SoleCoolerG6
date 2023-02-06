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

  <div class="left"></div>
  <div class="right">
    <form method="POST">
      <h1>Connexion</h1>

      <div>
        <input type="text" placeholder="Email" name="email" id="email">
        <label for="floatingInput">Email</label>
      </div>
      <div>
        <input type="password" placeholder="Password" name="password" id="password">
        <label>Motdepasse</label>
      </div>

      <div>
        <label>
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
      </div>
      <div>
      <label>
        <a href="">Mot de passe oublié ?</a>
      </label>
      </div>
      <button type="submit">Connexion</button>

    </form>
    <?php if ($messageErreur != "") : ?>
      <h1><?php echo $messageErreur ?> </h1>
    <?php endif 
    require_once("./inc/footer.php");
  ?>