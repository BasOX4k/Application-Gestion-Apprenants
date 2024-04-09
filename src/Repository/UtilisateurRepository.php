<?php
namespace src\Repository;

use src\Models\Utilisateur;
use src\Models\Database;
use PDO;

class UtilisateurRepository extends Database 
{
    public function getAll()
    {
        $data = $this->getDB()->query('SELECT * FROM user');

        $utilisateurs = [];

        foreach ($data as $utilisateur) {
            $newUtilisateur = new Utilisateur(
                $utilisateur['id'],
                $utilisateur['nom'],
                $utilisateur['prenom'],
                $utilisateur['email'],
                $utilisateur['mdp'],


            );

            $utilsateur[] = $newUtilisateur;
        }

        return $utilisateurs;
    }

    public function create($newUtilisateur)
    {
        $request = 'INSERT INTO utilisattilisateur (nom, prenom, email, mdp) VALUES ( :nom, :prenom, :email, :mdp)';
        $query = $this->getDB()->prepare($request);
        

        $query->execute([
           'nom'=> $newUtilisateur->getNom(),
            'prenom'=> $newUtilisateur->getPrenom(),
            'email' =>$newUtilisateur->getEmail(),
            'mdp' =>$newUtilisateur->getMDP(),
            // 'Id' => $newUtilisateur->getId(),
        ]);
    }


    public function update($Utilisateur)
{
    $request = "UPDATE user SET nom = ?, prenom = ?, email= ?, mdp utilisateur WHERE id = ?";
    
    $query = $this->getDB()->prepare($request);


    $query->execute([
        $Utilisateur->getId(),
        $Utilisateur->getNom(),
        $Utilisateur->getPrenom(),
        $Utilisateur->getEmail(),
        $Utilisateur->getMDP(),
    ]);
    

    } 

    public function delete($Utilisateur)
{
    $request = "DELETE FROM user WHERE id = ?";
    
    $query = $this->getDB()->prepare($request);

    $query->execute([$Utilisateur]);
}
}
