<?php
namespace src\Repository;
use src\Models\Promotion;
use src\Models\Database;
use PDO;


class PromotionRepository extends Database
{
    public function getAll()
    {
        $data = $this->getDB()->query('SELECT * FROM promotion');

        $promotions = [];

        foreach ($data as $promotion) {
            $newPromotion = new Promotion(
                $promotion['id'],
                $promotion['nom_promotion'],
                $promotion['date_debut'],
                $promotion['date_fin'],
                $promotion['place'],
            );
            $promotion[] = $newPromotion;
        
        }

        return $promotions;
    

    }
    public function create($newPromotion)
    {
        $request = 'INSERT INTO utilisattilisateur (nom_promotion, date_debut, date_fin, place) VALUES ( :nom_promotion, :date_debut, :date_fin, :place)';
        $query = $this->getDB()->prepare($request);
        

        $query->execute([
           'nom'=> $newPromotion->getNomPromotion(),
            'prenom'=> $newPromotion->getDateDebut  (),
            'email' =>$newPromotion->getDateFin(),
            'mdp' =>$newPromotion->getPlace(),
            // 'Id' => $newUtilisateur->getId(),
        ]);
    }

}