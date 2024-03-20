<?php require_once 'main.php';?>
<?php require_once 'header.php';?>



<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center">
<div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-white mb-4">Suppression</h2>
      <form action="/delete" method="post">
        <div class="form-group">
          <label class="text-white" for="email">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Suppression</button>
      </form>
    </div>
  </div>
</div>
</body>
<?php require_once 'footer.php'?>