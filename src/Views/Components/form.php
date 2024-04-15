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