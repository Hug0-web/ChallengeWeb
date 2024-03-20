<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<?php require_once './controller/ArticleController.php';?>
<?php 
    $urlInfo = str_replace('/', '', $_SERVER['REQUEST_URI'])
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- TailwindCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <title>articleclik</title>
</head>

<body x-data="{ showFullDescription: false }" class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center">
    <?php foreach($articles as $article){ ?>
        <?php $articleInfo = $article['idarticle']; ?>
        <?php if ($articleInfo == $urlInfo) {?>
         <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="md:w-1/2 mb-4">
                <img src=<?= $article['image'] ?> class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 flex flex-col items-start">
                <h1 class=" white text-2xl font-semibold mb-2 ml-4"><?= $article['titre'] ?></h1>
                <p x-show="!showFullDescription" class="text-white text-lg ml-4"><?= $article['description'] ?></p>
                <p x-show="showFullDescription" class="text-white text-lg ml-4"><?= $article['description'] ?></p>
                <button @click="showFullDescription = !showFullDescription" class="text-blue-500 underline cursor-pointer">
                    {{ showFullDescription ? 'Afficher moins' : 'Afficher plus' }}
                </button>
            </div>
         </div>
        <?php } ?>
    <?php } ?>
</body>
