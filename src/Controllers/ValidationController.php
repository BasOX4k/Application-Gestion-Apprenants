<?php
namespace src\Controllers;
use src\Service\Reponse;

class ValidationController
{

    use Reponse;

    public function homepage()
    { echo ('page vaidation');
        if(isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }

        $this->render("validationMdp", ["erreur" => $erreur]);

    }
}