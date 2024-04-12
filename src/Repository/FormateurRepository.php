<?php
session_start();
require_once __DIR__ . "/../Models/Utilisateur.php";
require_once __DIR__ . "/../Repository/UtilisateurRepository.php";
require_once __DIR__ . "/../Models/Database.php";

function ConnexionRepo() 
{ if (
    isset($_POST['email']) &&
    isset($_POST['mdp']) &&
    !empty($_POST['email']) &&
    !empty($_POST['mdp'])
) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    
    $DB = new Database();
    $connexion = $DB->getDB();

    $request = "SELECT * FROM Utilisateur WHERE email = ?";
    $statement = $connexion->prepare($request);

    $statement->bindvalue(1, $email);

    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if(password_verify($mdp, $row['mdp']))

        $_SESSION['utilisateur'] = $row ['utilisateurID'];
        $_SESSION['connecté'] = true;
        header ('location:../');
    }
    
}

}
