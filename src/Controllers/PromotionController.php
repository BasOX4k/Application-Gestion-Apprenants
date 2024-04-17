<?php

namespace src\Controller;

use src\Models\Promo;
use src\Repository\PromotionRepository;

class PromotionController
{
    private $promoRepository;

    public function __construct()
    {
        $this->promoRepository = new PromotionRepository();
    }

    public function index()
    {
        $promotions = $this->promoRepository->getAll();
        // Faire quelque chose avec les promotions, par exemple les afficher
        foreach ($promotions as $promo) {
            echo "Promotion: " . $promo->getNomPromotion() . ", Date de début: " . $promo->getDateDebut() . ", Date de fin: " . $promo->getDateFin() . ", Lieu: " . $promo->getPlace() . "<br>";
        }
    }

    public function create($nom_promotion, $date_debut, $date_fin, $place)
    {
        // Créer un nouvel objet Promo avec les données fournies
        $newPromo = new Promo($nom_promotion, $date_debut, $date_fin, $place);

        // Appeler la méthode create du repository pour ajouter la nouvelle promotion à la base de données
        $this->promoRepository->create($newPromo);
    }
}

// Exemple d'utilisation du contrôleur
$promoController = new PromotionController();

// Afficher toutes les promotions
$promoController->index();

// Créer une nouvelle promotion
$promoController->create("Nouvelle Promotion", "2024-04-17", "2024-04-30", "Lieu de la nouvelle promotion");

?>
