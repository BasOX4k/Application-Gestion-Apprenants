<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="/../assets/script.js"></script>
<title>AGA</title>
</head>
<body>
    
</body>

</html>
<?php

include_once __DIR__ ."/Components/navbar.php";

// include_once __DIR__ ."/../../Components/form.php";

?>
<div class="container bg-light p-4  col-md-5 mt-5 shadow-lg p-3 mb-5">
  <form id="formConnexion" class="d-flex flex-column mb-3" method="post">
    <div class="text-center">
      <h2>Bienvenue</h2>
    </div>
    <div class="mb-3"> <label for="Email" class="form-label">Email*</label> <input type="Email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required> </div>
    <div class="mb-3"> <label for="Mot_De_Passe" class="form-label">Mot de passe*</label> <input type="password" name="mdp" class="form-control" id="mdp" placeholder="*****" required> </div>
    <div id="alertMessage" class="bg-danger text-white mb-3"></div> <button id="submissionButton" class="btn btn-primary">Connexion</button>
  </form>
</div>