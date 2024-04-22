<?php
use src\Controllers\AccueilController;
$accueilController = new AccueilController;

$route = $_SERVER['REQUEST_URI'];
$methode = $_SERVER['REQUEST_METHOD'];

switch ($route){
    case HOME_URL:

        if($methode == "POST") {
           
            // $accueilController->authAdmin();
            $accueilController->authAdmin();
        }

        else {
            $accueilController->index();
        }
        break;

        case HOME_URL. 'connexion':
            if (isset ($_SESSION['connecté'])) {
                header('/dashboard');
                die;

            } else {
                if ($methode === 'POST') {
                    $accueilController->index();
                }
            }
            break;

            case HOME_URL. 'deconnexion':
                if(isset ($_SESSION['déconnecté'])) {
                    header('location:/connexion');
                    die;
                }
                
}
