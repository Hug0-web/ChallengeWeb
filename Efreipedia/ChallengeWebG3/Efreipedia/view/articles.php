<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<?php require_once './controller/ArticleController.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
    <!-- TailwindCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <title>article</title>
</head>
<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 min-h-screen flex flex-col items-center justify-center">
     
       
    <h1 class="text-white">Nos articles</h1>   
<?php foreach ($articles as $article) { ?>
            <div id="container1" class="border border-color-white p-4">
                <div id="product" class="col-lg-4">
                    <img src=<?= $article['image'] ?> class="w-full h-40 object-cover mb-2">
                    <h2 class="text-black text-lg font-semibold"><?= $article['titre'] ?></h2> 
                    
                    <?php if ($article['idarticle'] === 1) { ?> 
                        <a href="/1"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>
                    <?php if ($article['idarticle'] === 2) { ?> 
                        <a href="/2"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 3) { ?> 
                        <a href="/3"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 4) { ?> 
                        <a href="/4"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 5) { ?> 
                        <a href="/5"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 6) { ?> 
                        <a href="/6"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 7) { ?> 
                        <a href="/7"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 8) { ?> 
                        <a href="/8"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 9) { ?> 
                        <a href="/9"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 10) { ?> 
                        <a href="/10"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?> 
                    <?php if ($article['idarticle'] === 11) { ?> 
                        <a href="/11"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 12) { ?> 
                        <a href="/12"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 13) { ?> 
                        <a href="/13"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 14) { ?> 
                        <a href="/14"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 15) { ?> 
                        <a href="/15"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>
                    <?php if ($article['idarticle'] === 16) { ?> 
                        <a href="/16"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 17) { ?> 
                        <a href="/17"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 18) { ?> 
                        <a href="/18"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 19) { ?> 
                        <a href="/19"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 20) { ?> 
                        <a href="/20"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?> 
                    <?php if ($article['idarticle'] === 21) { ?> 
                        <a href="/21"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 22) { ?> 
                        <a href="/22"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 23) { ?> 
                        <a href="/23"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 24) { ?> 
                        <a href="/24"><button>Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>   
                    <?php if ($article['idarticle'] === 25) { ?> 
                        <a href="/25"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <a href="/favoris"><button>favoris</button></a>
                    <?php } ?>       
                </div> 
            </div></br>
    
<?php } ?>        
</body>
<?php require_once 'view/footer.php';?>  