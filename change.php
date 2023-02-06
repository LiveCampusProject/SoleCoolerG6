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

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $email = filter_input(INPUT_GET, "email");
        $code = filter_input(INPUT_GET, "pwd_code");
    
        if ($email && $code) {
    
            $user = find_user_pwd_token($code, $email);
    
            if ($user ): ?>
 
    
                <main>
                    <form method="POST">
                        <h1>Mot de passe oublié</h1>

                        <div>
                            <input type="password" placeholder="Password" name ="password" id= "password">
                            <label> Nouveau Motdepasse</label>
                        </div> 
                        <div>
                            <input name="confirm" type="password" placeholder="ConfirmezMotdepasse" onkeyup='validatePassword()' id="confirm">
                            <label>Confirmez nouveau le Motdepasse</label>
                        </div>

                        <button type="submit">Changer le mot de passe</button>
                        
                    </form>
                    <?php if($messageErreur!=""): ?>
                    <h1><?php echo $messageErreur ?> </h1>
                    <?php endif ?>
                </main>

<?php
        
            endif;
        }
    } 
redirection("./login.php");
?>