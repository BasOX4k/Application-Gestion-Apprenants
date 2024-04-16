<?php
namespace src\Repository;
use src\Models\Promo;
use src\Models\Database;
use PDO;


class PromotionRepository extends Database
{
    public function getAll()
    {
        $data = $this->getDB()->query('SELECT * FROM promo');

        $promotions = [];

        foreach ($data as $promo) {
            $newPromo = new Promo(
                $promo['id'],
                $promo['nom_promotion'],
                $promo['date_debut'],
                $promo['date_fin'],
                $promo['place'],
            );
            $promo[] = $newPromo;
        
        }

        return $promotions;
    

    }
    public function create($newPromo)
    {
        $request = 'INSERT INTO promo (nom_promotion, date_debut, date_fin, place) VALUES ( :nom_promotion, :date_debut, :date_fin, :place)';
        $query = $this->getDB()->prepare($request);
        

        $query->execute([
           'nom_promotion'=> $newPromo->getNomPromotion(),
            'date_debut'=> $newPromo->getDateDebut  (),
            'date_fin' =>$newPromo->getDateFin(),
            'palce' =>$newPromo->getPlace(),
            // 'Id' => $newUtilisateur->getId(),
        ]);
    }

}