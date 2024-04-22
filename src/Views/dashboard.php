<?php


include_once __DIR__ . "/../Models/Promo.php";


?>

<div class="content">
<ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Accueil</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Promotions</button>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



        <div class="card-body">
          <h5 class="card-title d-flex justify-content-start">Cours du jour</h5>
          <div class="card-text mb-3 bg-light">
            <p class="card-text d-flex justify-content-start">DWWM3 - matin</p>
            <p class="card-text d-flex justify-content-end"><?php echo date('d-m-Y'); ?></p>

            <div class="d-flex justify-content-end">
              <!-- <span class="badge text-bg-success ">ajouter les cas</span> -->
              <button id="validerPresence" class="btn btn-info">Valider présence</button>
            </div>
          </div>
          <div class="card-text mb-3 bg-light">
            <p class="card-text d-flex justify-content-start">DWWM3 - après midi</p>
            <p class="card-text d-flex justify-content-end"><?php echo date('d-m-Y'); ?></p>
            <div class="d-flex justify-content-end">
              <!-- <span class="badge text-bg-warning ">ajouter les cas</span> -->
              <button id="signature" class="btn btn-success">Signatures recueillies</button>
            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <div id="contentPromotion">


          <div class="d-flex flex-column justify-content-between my-3 mx-2">
            <div>
              <h3>Toutes les promotions</h3>
            </div>
            <!-- <button id="ajouterPromotion" type="submit" class="btn btn-success">Ajouter promotion</button> -->

<h3 class="m-3">Création d’une promotion</h3>
<p class="my-3 mx-2">tableau des promotions de Simplon</p>

<table class="table  my-3 mx-2">
  <thead>
    <tr>
    <th class="d-none" scope="col">IDPromo</th>
      <th scope="col">Promotions</th>
      <th scope="col">Début</th>
      <th scope="col">Fin</th>
      <th scope="col">Place</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

<p class="m-3">tableau des promotions de Simplon</p>


<form  data-set="id" class="p-3 m-5 bg-light text-dark" method="post">

    <input type="hidden" name="form_id" value="1">

    <div class="mb-3">
        <label for="promoNom" class="form-label">Nom de la promotion</label>
        <input type="text" name="promoNom" class="form-control" id="promoNom" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="dateDebut" class="form-label">Date de début</label>
        <input type="date" name="dateDebut" class="form-control" id="dateDebut" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="dateFin" class="form-label">Date de fin</label>
        <input type="date" name="dateFin" class="form-control" id="dateFin" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="placeDispo" class="form-label">Place(s) disponible(s)</label>
        <input type="number" name="place" class="form-control" id="place" aria-describedby="emailHelp">
    </div>

    <div class="  d-flex justify-content-between mb-3">
        <input id="btnRetourVersTousLesPromo" class=" mb-3 btn btn-primary" value="Retour"  > 

        <input id="createNewPromoBtn" type="submit" class="mb-3 btn btn-primary" value="Sauvegarder"  > 

    </div>

   </form>
   </div>

          </div>
      
           
          </table>


        </div>
      </div>

    </div>
    

</div>
