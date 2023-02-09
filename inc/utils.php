<?php

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

            $utilisateur = "root";
            $motdepasse = "root";
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
                redirection("./login.php");
            }
            }
        
            return $messageErreur;
    }

    /*
    *   Fonction qui enregistre un utilisateurs dans la base de données.
    */

    function register_user(array $user){

        $pdo = db_connect();
        $requete = $pdo->prepare("INSERT INTO `users` (`nom`, `email`, `password`) VALUES (:nom, :email, :password)");
        $requete->execute($user);
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

        // On vérifie que le formulaire à bien été rempli.
        if($email && $password){

            // On cherche le pseudo dans la base de donnée.
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
                
           
                session_regenerate_id();                            //On créer une session.
		        $_SESSION['loggedin'] = TRUE;
		        $_SESSION['email'] = $checkUser['email'];
		        $_SESSION['id'] = $checkUser['userID'];
                redirection("./index.php");                         // On redirige l'utilisateur connecté vers la page d'accueil.
            }
            else{
                $messageErreur="Email ou mot de passe incorrect";
            }
        }
        return $messageErreur;
    }

    /*
    * Fonction qui permet à l'utilisateur de se deconnecter
    */

    function logout_user(){
    session_start();
    session_destroy();
    // Redirect to the login page:
    redirection('/index.php');
    }

?>