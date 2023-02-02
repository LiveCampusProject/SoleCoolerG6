<?php 
    /**
     *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
     *  Puis on insère les élements redondants footer et head  
     */
    $js = "";
    $css="";
    $titre = "SoleCooler Connexion";
    require_once("./inc/head.php");
    require_once("./inc/nav.php");
    require_once("./inc/footer.php");
    require_once("./inc/utils.php");

    $messageErreur = login_user();    
?>
    
<main>
  <form method="POST">
    <h1>Connexion</h1>

    <div>
      <input type="text" placeholder="Email" name ="email" id="email">
      <label for="floatingInput">Email</label>
    </div>
    <div >
      <input type="password" placeholder="Password" name ="password" id= "password">
      <label>Motdepasse</label>
    </div>

    <div>
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <button type="submit">Connexion</button>
    
  </form>
  <?php if($messageErreur!=""): ?>
  <h1><?php echo $messageErreur ?> </h1>
  <?php endif ?>
</main>


    
