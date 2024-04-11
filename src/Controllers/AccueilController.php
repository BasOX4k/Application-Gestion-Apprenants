<?php
namespace src\Controllers;

use src\Service\Reponse;

class AccueilController
{
    use Reponse;

    public function homepage():void 
    { echo ('page accueil');
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);

        } else {
            $erreur = '';
        }

        $this->render("accueil", ["erreur"=> $erreur]);
    }

    public function auth(string $password): void
    {
        if ($password === 'admin') {
            $_SESSION['connecté'] = TRUE;
            header('location: '.HOME_URL.'dashboard');
            die();
        } else {
            header('location: '.HOME_URL.'?erreur=connexion');
        }
    }
}