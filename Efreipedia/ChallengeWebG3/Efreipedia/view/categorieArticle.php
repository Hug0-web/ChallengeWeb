<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<?php require_once './controller/ArticleController.php';?>
<?php 
      $urlCategorie = str_replace('/', '', $_SERVER['REQUEST_URI']);
?>

<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-wrap items-center justify-center">
    <?php 
    foreach ($articles as $articles) {?>
        
        <?php 
        $addedCategories=[];
        $articlesCategorie = $articles['categorie'];
        if (!in_array($articlesCategorie, $addedCategories)) {
            
            $addedCategories[] = $articlesCategorie;
        
        }
        if($articlesCategorie === $urlCategorie) {?>
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-20">
            <img src=<?= $articles['image'] ?> class="w-full h-40 object-cover mb-2">
            <h2 class="text-white text-lg font-semibold"><?= $articles['titre'] ?></h2>
                        <?php if ($articles['idarticle'] === 1) { ?> 
                            <a href="/1"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>
                        <?php if ($articles['idarticle'] === 2) { ?> 
                            <a href="/2"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 3) { ?> 
                            <a href="/3"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 4) { ?> 
                            <a href="/4"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 5) { ?> 
                            <a href="/5"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 6) { ?> 
                            <a href="/6"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 7) { ?> 
                            <a href="/7"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 8) { ?> 
                            <a href="/8"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 9) { ?> 
                            <a href="/9"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 10) { ?> 
                            <a href="/10"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?> 
                        <?php if ($articles['idarticle'] === 11) { ?> 
                            <a href="/11"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 12) { ?> 
                            <a href="/12"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 13) { ?> 
                            <a href="/13"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 14) { ?> 
                            <a href="/14"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 15) { ?> 
                            <a href="/15"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>
                        <?php if ($articles['idarticle'] === 16) { ?> 
                            <a href="/16"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 17) { ?> 
                            <a href="/17"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 18) { ?> 
                            <a href="/18"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 19) { ?> 
                            <a href="/19"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 20) { ?> 
                            <a href="/20"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?> 
                        <?php if ($articles['idarticle'] === 21) { ?> 
                            <a href="/21"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 22) { ?> 
                            <a href="/22"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 23) { ?> 
                            <a href="/23"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 24) { ?> 
                            <a href="/24"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>   
                        <?php if ($articles['idarticle'] === 25) { ?> 
                            <a href="/25"><button class="bg-green rounded-full text-white py-1 px-4 mt-2">Plus d'infos</button></a>
                        <?php } ?>
            </div>
        <?php }?>     
    <?php } ?>
</body>

<?php require_once 'view/footer.php';?>  