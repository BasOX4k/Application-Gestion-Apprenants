<?php

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

switch ($route){
    case HOME_URL:
        if (isset($_SESSION['connecté'])) {
            header('location:' .HOME_URL. 'dashboard');
            die;
        } else {
            $AcueilControler->index();
        }
        break;

        case HOME_URL. 'connexion':
            if (isset ($_SESSION['connecté'])) {
                header('location:/dashboard');
                die;

            } else {
                if ($methode === 'POST') {
                    $AccueilControler->index();
                }
            }
            break;

            case HOME_URL. 'deconnexion':
                
}
