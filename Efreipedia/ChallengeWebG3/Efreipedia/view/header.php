<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
    <!-- TailwindCSS CDN -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Formation alpine.js | Use API</title>
    <title>EFREIPEDIA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #007FFF;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size:32px; 
            font-weight: bold;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
        }

        header a:hover {
            text-decoration: underline;
        }

        footer h2{
            font-size:1rem;
            bottom:0;
            position:absolute;
            background-color: grey;
        }

        #sub{
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<?php 
      $url = $_SERVER['REQUEST_URI'];
?>



    <header class="w-full">
        <h1>EFREIPEDIA</h1>
        <nav>
            <a href="/accueil">Accueil</a>
            <a href="/article">Nos articles</a>
            <a href="/forum">Forum</a>
    
            <?php if(!isset($_SESSION['pseudo'])) { ?>
                <nav id="sub">
                    <a href="/inscription">S'inscrire</a>
                    <a href="/connexion">Se connecter</a>
                </nav>
            <?php } else { ?>
                <a href="/profil"><?=@$_SESSION['pseudo']?></a>
                <a href="/deconnexion">déconnexion</a>
            <?php } ?>
        </nav>    
        <?php if($url === '/article' || $url === '/animaux' || $url === '/sport' || $url === '/anime' || $url === '/jeux' || $url === '/film' || $url === '/1' || $url === '/2' || $url === '/3' || $url === '/4' || $url === '/5' || $url === '/6' || $url === '/7' || $url === '/8' || $url === '/9' || $url === '/10' || $url === '/11' || $url === '/12' || $url === '/13' || $url === '/14' || $url === '/15' || $url === '/16' || $url === '/17' || $url === '/18' || $url === '/19' || $url === '/20' || $url === '/21' || $url === '/22' || $url === '/23' || $url === '/24' || $url === '/25') {?>
            <a href="/article">Tous nos article</a>
            <a href="/animaux">Nos article sur les animaux</a>
            <a href="/sport">Nos article sur le sport</a>
            <a href="/anime">Nos article sur les animes</a>
            <a href="/jeux">Nos articles sur les jeux video</a>
            <a href="/film">Nos articles sur les films</a>
        <?php } ?>
    </header>


