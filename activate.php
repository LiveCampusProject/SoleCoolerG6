<?php

require_once("./inc/utils.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $email = filter_input(INPUT_GET, "email");
    $code = filter_input(INPUT_GET, "activation_code");

    if ($email && $code) {

        $user = find_unverified_user($code, $email);

        // if user exists and activate the user successfully
        if ($user && activate_user($user['userID'])) {
            $_SESSION["message"] = "Compte activé";
            redirection("./login.php");
        }
    }
}

// redirect to the register page in other cases
redirection("./login.php");

?>