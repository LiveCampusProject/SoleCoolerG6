<?php 
    /**
     *  On définie le path de tout les fichier nécéssaire et le titre de notre page 
     *  Puis on insère les élements redondants footer et head  
     */
    $js = "js/register.js";
    $css="";
    $titre = "SoleCooler Connexion";
    require_once("./inc/head.php");
    require_once("./inc/header.php");
    require_once("./inc/utils.php");

        $email = filter_input(INPUT_GET, "email");
        $code = filter_input(INPUT_GET, "activation_code");
        
        if ($email && $code) {
    
            $user = find_user_pwd_token($code, $email);

            if ($user ): 
                
                $messageErreur = forgot_change_password($user);
            ?>
 
    
                <main>
                    <form method="POST">
                        <h1>Mot de passe oublié</h1>

                        <div>
                            <input type="password" placeholder="Password" name ="password" onkeyup='validatePassword()' id= "password">
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
        
                else: redirection("./login.php");?>
                
<?php   endif;
        } 
        else {
            redirection("./login.php");
        }
?>