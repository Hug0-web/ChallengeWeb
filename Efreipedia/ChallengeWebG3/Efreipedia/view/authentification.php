<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Alpine.js CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- TailwindCSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
  <title>auth</title>
  <style>

   
    form {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      margin: auto;
    }

    .container{
      margin:auto;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #007FFF;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #4caf50;
    }

    h2 {
      text-align: center;
      color: #333;
      margin: auto;
      font-size:32px; 
      font-weight: bold;
      }
  </style>
</head>
<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center">
<h2>Connexion</h2>
  <div class="container">
    <form action="" method="post">
        <input type="email" id="email" name="email" placeholder="Email"><br>
        <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe"><br>
        <button type="submit">Se connecter</button>
    </form>
    </div>
</body>

<?php require_once 'view/footer.php';?>  
</html>