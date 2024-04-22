<?php
namespace src\Controllers;
use src\Service\Reponse;

class ValidationController
{

    use Reponse;

    public function homepage()
    { echo ('page validation');
        if(isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }

        $this->render("validationMdp", ["erreur" => $erreur]);

    }

    public function index()
    {
        include_once __DIR__ . "/../Views/validationMdp.php";
    }

    public function authUtilisateur()
    {
        $request = file_get_contents('php://input');

        if ($request) {
            $decodeRequest = json_decode($request);

            if ($decodeRequest) {
                $email = htmlspecialchars($decodeRequest->email);
                $mdp = htmlspecialchars($decodeRequest->mdp);
                    include_once __DIR__ . '/../Views/validationMdp.php';
                } else {
                  exit();
                }
            } else {
                header('Location: ' . HOME_URL . '?erreur=connexion');
                exit();
              }
                
                }
            }
        
