<?php
namespace src\Repository;

use src\Models\Cours;
use  src\Models\Database;
use PDO;
{
    $data = $this->getDB()->query('SELECT * FROM cours');

    $courss = [];

    foreach ($data as $cours) {
        $newcours = new cours(
            $cours['id'],
            $cours['presence'],
            $cours['heure_debut'],
            $cours['code'],
            $cours['heure_fin'],
            $cours['date_cours']


        );

        $cours[] = $newcours;
    }

    return $courss;
}

function create($newcours)
{
    $request = 'INSERT INTO cours (presence, heure_debut, code, heure_fin, date_cours) VALUES ( :nom, :prenom, :email, :mdp)';
    $query = $this->getDB()->prepare($request);
    

    $query->execute([
       'presence'=> $newcours->getPresence(),
        'heure_debut'=> $newcours->getHeureDebut(),
        'code' =>$newcours->getCode(),
        'heure_fin' =>$newcours->getHeureFin(),
        // 'Id' => $newcours->getId(),
    ]);
}


public function update($cours)
{
$request = "UPDATE cours SET nom = ?, prenom = ?, email= ?, mdp cours WHERE id = ?";

$query = $this->getDB()->prepare($request);


$query->execute([
    $cours->getId(),
    $cours->getNom(),
    $cours->getPrenom(),
    $cours->getEmail(),
    $cours->getMDP(),
]);


} 

public function delete($cours)
{
$request = "DELETE FROM cours WHERE id = ?";

$query = $this->getDB()->prepare($request);

$query->execute([$cours]);
}
