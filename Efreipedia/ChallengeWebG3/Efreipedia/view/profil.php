<?php require_once 'main.php';?>
<?php require_once 'header.php';?>


<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center" >
<div>
  <div>
    <div class="col-md-6">
      <h2 class="text-white mb-4">information : </h2>
      <form action="" method="post">
        <div class="form-group">
          <label class="text-white" for="username">pseudo : <?=@ $_SESSION['pseudo']?></label>
        </div>
        <div class="form-group">
          <label class="text-white" for="telephone">Téléphone : </label>
        </div>
        <div class="form-group">
          <label class="text-white" for="email">Adresse e-mail : <?=@ $_SESSION['email']?></label>
        </div>
        <div class="form-group">
          <label class="text-white" for="email">Mot de passe:</label>
        </div>
        <a href="/suppression"><button  id="Delete" type="button" class="btn btn-primary me-2">Supprimer son compte</button></a>
        <a href="/miseAjour"><button  id="update" type="button" class="btn btn-primary me-2">Modifier</button></a>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>