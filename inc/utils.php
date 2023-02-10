<?php
    const APP_URL = 'http://vps-f1409149.vps.ovh.net/';
    const SENDER_EMAIL_ADDRESS = 'no-reply@solecooler.fr';
    require_once './vendor/autoload.php';
    use Symfony\Component\Mailer\Transport;
    use Symfony\Component\Mailer\Mailer;
    use Symfony\Component\Mime\Email;
    
    ob_start();
    ob_clean();

    /*
    *   Fonction utilitaire, redirige l'utilisateur et arrête PHP.
    */

    function redirection(string $url) {
        header('Location: ' . $url);
    }
    
    /*
    *   Fonction permettant de se connecter à la base de donnée.
    */

    function db_connect(): PDO {
        try {

            $utilisateur = "nouveau_utilisateur";
            $motdepasse = "mot_de_passe";
            $hote = "localhost";
            $port = 3306;
            $moteur = "mysql";
            $bdd = "solecooler";
            $pdo = new PDO("$moteur:host=$hote:$port;dbname=$bdd", $utilisateur, $motdepasse, [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ]);
            }
            catch( PDOException $e) {
                echo "<h1> Erreur de connexion à la base de données </h1>".$e->getMessage();
            exit();
            }

            return $pdo;
    }

    /*
    *   Fonction qui vérifie si le formulaire est complet
    */

    function create_user(): string {
        
        // On se connecte à  la base de donnée
        $pdo=db_connect();
        // On définie la variable qui affichera un message d'erreur si il ya eu une erreur dans le formulaire.
        $messageErreur="";
        // Récuperation des données du formulaire

        $nom = filter_input(INPUT_POST, "nom");
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST, "password");
        $confirm = filter_input(INPUT_POST,"confirm");

        // On créer le tableau avec les informations du nouvel utilisateur 

        $user = [
            "nom" => $nom,
            "email" => $email,
            "password" => password_hash($password,PASSWORD_DEFAULT),  // On hash le mot de passe avant de le mettre dans la base de donnée.
        ];

        

        if($nom && $email && $password && $confirm){     // On vérifie que le formulaire soit rempli 
            
            /*
            *  Vérification des différents champs
            *  TO DO : amélioré la fonctionalité 
            */
            if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)) {
                $messageErreur="Adresse email non valide.";
                
            }

            if (preg_match('/^[a-zA-Z0-9]+$/', $nom == 0)) {
                $messageErreur="Le pseudo n'est pas valide!";
            
            }
            if (strlen($_POST['password']) > 20 || strlen($password) < 5) {
                $messageErreur='Password must be between 5 and 20 characters long!';
            
            }
            if ($password != $confirm){
                $messageErreur='Les mots de passe doivent être identique';
            }
            /*
            *   Fin de la Vérification
            */

            //On cherche le mail dans la base de donnée
            $requete = $pdo->prepare("SELECT * FROM users WHERE `users`.`email` = :email");
            $requete->execute(
                [
                "email" => $email
                ]
            );
            $checkEmail = $requete->fetchAll(PDO::FETCH_ASSOC);

            // Si il existe erreur 
            if($checkEmail){
                $messageErreur='Le Mail est déjà utilisé';
            }
            
            // Si il n'y a aucune erreur on enregistre dans la base de donnée.
            if($messageErreur==""){
                register_user($user);
                $_SESSION["message"] = "Votre compte à été créer avec succès un lien de connexion va vous être envoyer";
                redirection("./login.php");
            }
            }
        
            return $messageErreur;
    }

    /*
    *   Fonction qui enregistre un utilisateurs dans la base de données.
    */

    function register_user(array $user){
        $activation_code = generate_activation_code();
        $user["activation_expiry"] = date('Y-m-d H:i:s',  time() + (1 * 24  * 60 * 60));
        $user["activation_code"] = password_hash($activation_code, PASSWORD_DEFAULT);
        $pdo = db_connect();
        $requete = $pdo->prepare("INSERT INTO `users` (`nom`, `email`, `password`, `activation_code`, `activation_expiry`) VALUES (:nom, :email, :password, :activation_code, :activation_expiry)");
        $requete->execute($user);
        send_activation_email($user["email"], $activation_code);
        
    }
    /*
    *   Fonction qui permet à l'utilisateur de se connecter.
    */

    function login_user(): string{
         // On se connecte à  la base de donnée
        $pdo=db_connect();
        // On définie la variable qui affichera un message d'erreur si il ya eu une erreur dans le formulaire.
        $messageErreur="";
        // Récuperation des données du formulaire

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $rememberMe = filter_input(INPUT_POST, "remember-me");

        // On vérifie que le formulaire à bien été rempli.
        if($email && $password){

            // On cherche le mail dans la base de donnée.
            $requete = $pdo->prepare("SELECT * FROM users WHERE `users`.`email` = :email");
            $requete->execute(
                [
                "email" => $email
                ]
            );

            $checkUser= $requete->fetch(PDO::FETCH_ASSOC);
            // On check si il n'existe pas au quel cas on retourne une erreur 
            if(!($checkUser)){
                $messageErreur="email ou mot de passe incorrect";
            }

            // Si le pseudo existe on check si le mot de passe correspond 
            elseif (password_verify($password,$checkUser['password'])) {
                
                // On vérifie si l'utilisateur à activer son compte par mail
                if (!(is_user_active($checkUser))) {
                    $messageErreur="Vous devez activer votre compte pour vous connecter";
                }
                else {
                log_user_in($checkUser);
                    if ($rememberMe == "on") {
                        remember_me($checkUser["userID"]);
                    }
                redirection("./index.php");                    // On redirige l'utilisateur connecté vers la page d'accueil.
                }                   
            }
           
            else{
                $messageErreur="email ou mot de passe incorrect";
            }
        }
        return $messageErreur;
    }

    function is_user_logged_in(): bool
    {
        // check the session
        if (isset($_SESSION['loggedin'])) {
            return true;
        }

        // check the remember_me in cookie
        $token = filter_input(INPUT_COOKIE, 'remember_me', FILTER_SANITIZE_STRING);
        if ($token && token_is_valid($token)) {

            $user = find_user_by_token($token);
            log_user_in($user); 
            if ($user) {
                return log_user_in($user);
            }
        }
        return false;
    }

    function log_user_in(array $user): bool
    {
        // prevent session fixation attack
        if (session_regenerate_id()) {
            // set username & id in the session
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['userID'];
            return true;
        }

        return false;
    }

    function logout_user(){
        session_start();
        if (is_user_logged_in()) {

            // delete the user token
            delete_user_token($_SESSION['id']);

            // delete session
            unset($_SESSION['username'], $_SESSION['id`']);

            // remove the remember_me cookie
            if (isset($_COOKIE['remember_me'])) {
                unset($_COOKIE['remember_me']);
                setcookie('remember_me', null, -1);
            }
        }
        session_destroy();
        // Redirect to the login page:
        redirection('/index.php');
    }

    function remember_me(int $user_id, int $day = 30)
    {
        [$selector, $validator, $token] = generate_tokens();

        // remove all existing token associated with the user id
        delete_user_token($user_id);

        // set expiration date
        $expired_seconds = time() + 60 * 60 * 24 * $day;

        // insert a token to the database
        $hash_validator = password_hash($validator, PASSWORD_DEFAULT);
        $expiry = date('Y-m-d H:i:s', $expired_seconds);

        if (insert_user_token($user_id, $selector, $hash_validator, $expiry)) {
            setcookie('remember_me', $token, $expired_seconds);
        }
    }

    function generate_tokens(): array
    {
        $selector = bin2hex(random_bytes(16));
        $validator = bin2hex(random_bytes(32));

        return [$selector, $validator, $selector . ':' . $validator];
    }

    function parse_token(string $token): ?array
    {
        $parts = explode(':', $token);

        if ($parts && count($parts) == 2) {
            return [$parts[0], $parts[1]];
        }
        return null;
    }

    function token_is_valid(string $token): bool 
    { 
        // parse the token to get the selector and validator 
        [$selector, $validator] = parse_token($token);

        $tokens = find_user_token_by_selector($selector);
        if (!$tokens) {
            return false;
        }
        
        return password_verify($validator, $tokens['hashed_validator']);
    }

    function find_user_by_token(string $token)
    {
        $pdo = db_connect();
        $tokens = parse_token($token);
        if (!$tokens) {
            return null;
        }
        $requete = $pdo->prepare(   "SELECT users.`userID`
                                    FROM users
                                    INNER JOIN user_tokens ON user_tokens.`userID` = users.`userID`
                                    WHERE `selector` = :selector AND
                                    expiry > now()
                                    LIMIT 1"
        );
        $requete->execute(
            [
            "selector" => $tokens[0],
            ]
        );
        $user= $requete->fetch(PDO::FETCH_ASSOC);

        return $user;
    }



    function find_user_token_by_selector(string $selector)
    {
        $pdo = db_connect();
        $requete = $pdo->prepare(   "SELECT `tokenID`, `selector`, `hashed_validator`, `userID`, `expiry`
                                    FROM user_tokens
                                    WHERE selector = :selector AND
                                    expiry >= now()
                                    LIMIT 1"
        );

        $requete->execute(
            [
            "selector" => $selector,
            ]
        );

        $userToken= $requete->fetch(PDO::FETCH_ASSOC);

        return $userToken;
    }

    function insert_user_token(int $userID, string $selector, string $hashed_validator, string $expiry): bool
    {   
        $pdo = db_connect();
        $requete = $pdo->prepare("INSERT INTO `user_tokens` (`userID`, `selector` , `hashed_validator`, `expiry`)
                VALUES(:userID, :selector, :hashed_validator, :expiry)");

        return $requete->execute(
            [
                "userID" => $userID,
                "selector" => $selector,
                "hashed_validator" => $hashed_validator,
                "expiry" => $expiry,
            ]
        );

    }

    function delete_user_token(int $user_id): bool
    {
        $pdo = db_connect();
        $requete = $pdo->prepare("DELETE FROM user_tokens WHERE userID = :userID");
        return $requete->execute(
            [
            "userID" => $user_id
            ]
        );
    }

    function generate_activation_code(): string
    {
        return bin2hex(random_bytes(16));
    }
    function is_user_active($user)
    {
        if ((int)$user['active'] === 1) {
            return true;
        }
        else {
            return false;
        }
       
    }

    function send_activation_email(string $useremail, string $activation_code): void
    {
        // create the activation link
        $activation_link = APP_URL . "activate.php?email=$useremail&activation_code=$activation_code";
        // Create a Transport object 
        $transport = Transport::fromDsn('smtp://charly.rousseau@livecampus.tech:mpvruxmfmibkvilk@smtp.gmail.com:587');
        // Create a Mailer object 
        $mailer = new Mailer($transport); 
        // Create an Email object 
        $email = (new Email());
        // Set the "From address" 
        $email->from(SENDER_EMAIL_ADDRESS);
        // Set the "From address" 
        $email->to($useremail);
        // Set a "subject" 
        $email->subject('Please activate your account');
        // Set the plain-text "Body" 
        $email->text('');
        // Set HTML "Body" 
        $email->html($activation_link);
        // Send the message 
        $mailer->send($email);


    }

    function find_unverified_user(string $activation_code, string $email)
    {

        $pdo = db_connect();
       
        $requete = $pdo->prepare(   "SELECT `userID`, `activation_code`, `activation_expiry` < now() as expired
                                    FROM users
                                    WHERE `active` = 0 AND `email`= :email"
        );
        $requete->execute(
            [
            "email" => $email,
            ]
        );

        $user = $requete->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            
            // Si le code d'activation est expiré
            if ((int)$user['expired'] === 1) {
                return null;
            }
            // Vérification du code d'activation
            if (password_verify($activation_code, $user['activation_code'])) {
                return $user;
            }
        }

        return null;
    }

    function activate_user(int $user_id): bool
    {
        $pdo = db_connect();
        $requete = $pdo->prepare(   "UPDATE users
                                    SET `active` = 1, `activated_at` = CURRENT_TIMESTAMP
                                    WHERE `userID`=:userID;"
        );
        return $requete->execute(
            [
            "userID" => $user_id,
            ]
        );
    }

    function forgot_change_password($user) {
        
        $messageErreur="";
        $password = filter_input(INPUT_POST, "password");
        $confirm = filter_input(INPUT_POST,"confirm");

        if ($password && $confirm) {

            if (strlen($_POST['password']) > 20 || strlen($password) < 5) {
                $messageErreur='Password must be between 5 and 20 characters long!';
            }
            else if ($password != $confirm){
                $messageErreur='Les mots de passe doivent être identique';
            }
            else {

                $password = password_hash($password,PASSWORD_DEFAULT);
                save_password($password,$user);
                deldelete_pwd_token($user["userID"]);
                $_SESSION["message"] = "Votre mot de passe à été changé avec succès";
                //redirection("./login.php");              

            }
        }

        return $messageErreur;
        
    }
    
    function change_password(array $user) {

        $messageErreur="";
        $oldPassword = filter_input(INPUT_POST, "oldPassword");
        $password = filter_input(INPUT_POST, "password");
        $confirm = filter_input(INPUT_POST,"confirm");

        if ($user && $oldPassword && $password && $confirm ) {

            if (password_verify($password,$user['password'])){
            
                if (strlen($_POST['password']) > 20 || strlen($password) < 5) {
                    $messageErreur='Password must be between 5 and 20 characters long!';
                
                }
                if ($password != $confirm){
                    $messageErreur='Les mots de passe doivent être identique';
                }
                else {

                    $password = password_hash($password,PASSWORD_DEFAULT);
                    save_password($password, $user["userID"]);

                }
            }
            else {
                $messageErreur='Mot de passe incorect.';
            }
        }
        return $messageErreur;
    }

    function save_password($password, $user) {

        $pdo = db_connect();
        $requete = $pdo->prepare("UPDATE `users` SET `password`= :password WHERE `userID` = :userID ");
        $requete->execute(
            [
                "password" => $password,
                "userID" => $user["userID"],
            ]
        );
    }

    function deldelete_pwd_token($userID) {

        $pdo = db_connect();
        $requete = $pdo->prepare("UPDATE `users` SET `pwd_token`= :pwd WHERE `userID` = :userID ");
        $requete->execute(
            [
                "pwd" => NULL,
                "userID" => $userID,
            ]
        );
    } 

    function forgot_password() {
        
        $pdo = db_connect();
        $messageErreur="";
        $email = filter_input(INPUT_POST, "email");

            if($email) {

                $requete = $pdo->prepare("SELECT * FROM users WHERE `users`.`email` = :email");
                $requete->execute(
                    [
                    "email" => $email
                    ]
                );
                $checkEmail = $requete->fetch(PDO::FETCH_ASSOC);
                // Si il existe erreur 
                if(!$checkEmail){
                    $messageErreur='Le Mail fourni ne correspond à aucun compte ';
                }
                else {
        
                    $token = generate_activation_code();
                    send_recovery_email($checkEmail["email"], $token);

                    $requete = $pdo->prepare("UPDATE `users` SET `pwd_token`= :token WHERE `userID` = :userID ");
                
                    $requete->execute(
                        [
                            "token" => password_hash($token,PASSWORD_DEFAULT),
                            "userID" => $checkEmail["userID"],
                        ]
                    );
                    $_SESSION["message"] = "Vous allez recevoir un mail pour changer votre mot de passe";
                    redirection("./login.php");
                }
            }

            return $messageErreur;
    }

    function send_recovery_email(string $useremail, string $activation_code): void
    {
        // create the activation link
        $activation_link = APP_URL . "change.php?email=$useremail&activation_code=$activation_code";
        // Create a Transport object 
        $transport = Transport::fromDsn('smtp://charly.rousseau@livecampus.tech:mpvruxmfmibkvilk@smtp.gmail.com:587');
        // Create a Mailer object 
        $mailer = new Mailer($transport); 
        // Create an Email object 
        $email = (new Email());
        // Set the "From address" 
        $email->from(SENDER_EMAIL_ADDRESS);
        // Set the "From address" 
        $email->to($useremail);
        // Set a "subject" 
        $email->subject('Reset your account');
        // Set the plain-text "Body" 
        $email->text('');
        // Set HTML "Body" 
        $email->html($activation_link);
        // Send the message 
        $mailer->send($email);

    }

    function find_user_pwd_token(string $activation_code, string $email)
    {

        $pdo = db_connect();
       
        $requete = $pdo->prepare(   "SELECT `userID`, `pwd_token`
                                    FROM users
                                    WHERE `email`= :email"
        );
        $requete->execute(
            [
            "email" => $email,
            ]
        );

        $user = $requete->fetch(PDO::FETCH_ASSOC);
        if ($user) {

            // Vérification pwdToken
            if (password_verify($activation_code, $user['pwd_token'])) {
                return $user;
            }
        }

        return null;
    }

?>