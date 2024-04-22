<?php
namespace src\Controllers;

use src\Service\Reponse;

class AccueilController
{
    use Reponse;

    public function homepage()
    { echo ('page accueil');
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);

        } else {
            $erreur = '';
        }

        $this->render("connexion", ["erreur"=> $erreur]);
    }
public function index()
{
    include_once __DIR__ . "/../Views/connexion.php";}    
    
    public function authAdmin()
  {
    $request = file_get_contents('php://input');

    if ($request) {
      $decodedRequest = json_decode($request);

      if ($decodedRequest) {
        $email = htmlspecialchars($decodedRequest->email);
        $mdp = htmlspecialchars($decodedRequest->mdp);
        
        if ($email === 'mams@gmail.com' && $mdp === '$') {
          $_SESSION['connecté'] = true;
          $_SESSION['role'] = 'admin';

          
          

          include_once __DIR__ . '/../Views/dashboard.php';
        } else {
          exit();
        }
      } else {
        header('Location: ' . HOME_URL . '?erreur=connexion');
        exit();
      }
    } else {
      header('Location: ' . HOME_URL . '?erreur=request');
      exit();
    }
  }

  
    // public function auth()
    // {
        
        
    //     if 
    //     (   $email == "mams@gmail.com" &&
    //         $mdp === 'admin') {
    //         $_SESSION['connecté'] = TRUE;
    //         header('location: '.HOME_URL.'dashboard');
    //         die();
    //     } else {
    //         header('location: '.HOME_URL.'?erreur=connexion');
    //     }
    // }
}
