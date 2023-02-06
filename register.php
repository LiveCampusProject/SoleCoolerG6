<?php 
    /**
     *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
     *  Puis on insère les élements redondants footer et head  
     */
    $js = "js/register.js";
    $css="";
    $titre = "SoleCooler S'inscrire";
    require_once("./inc/head.php");
    require_once("./inc/nav.php");
    require_once("./inc/footer.php");
    require_once("./inc/utils.php");
    $messageErreur = create_user();    
?>

<main>
  <form method="post" >
    
    <!--<img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <h1>Inscrivez-vous</h1> 

    <div>
      <input type="text" placeholder="Nom Prénom" name = "nom" id="nom">
      <label >Nom</label>
    </div>

    <div>
      <input type="email" placeholder="name@example.com" name="email" id="email">
      <label>Adresse email</label>
    </div>


    <div>
      <input name="password" type="password" placeholder="Motdepasse" onkeyup='validatePassword()' id="password">
      <label>Motdepasse</label>
    </div>

    <div>
      <input name="confirm" type="password" placeholder="ConfirmezMotdepasse" onkeyup='validatePassword()' id="confirm">
      <label>Confirmez le Motdepasse</label>
    </div>

    <button type="submit">Créer un compte</button>
  </form>

  <?php if($messageErreur!=""): ?>
  <h1><?php echo $messageErreur ?> </h1>
  <?php endif ?>

</main>
