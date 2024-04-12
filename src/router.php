<?php
use src\Controllers\AccueilController;
$accueilControler = new AccueilController;

$route = $_SERVER['REQUEST_URI'];
$methode = $_SERVER['REQUEST_METHOD'];

switch ($route){
    case HOME_URL:
        if (isset($_SESSION['connecté'])) {
            // header('location:' .HOME_URL. 'dashboard');
            // die;
        } elseif($methode == "POST") {
            var_dump($_POST);
        }

        else {
            $accueilControler->index();
        }
        break;

        case HOME_URL. 'connexion':
            if (isset ($_SESSION['connecté'])) {
                header('location:/dashboard');
                die;

            } else {
                if ($methode === 'POST') {
                    $accueilControler->index();
                }
            }
            break;

            case HOME_URL. 'deconnexion':
                
}
