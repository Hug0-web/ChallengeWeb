<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
    <!-- TailwindCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <title>Accueil</title>
    <style>
        h1{
            font-size: 48px;
            font-weight:bold;
            color:white;
        }

        h2{
            color:white;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center">
    <h1 class="white text-6xl bold">Bienvenue sur Efreipedia</h1>
    <h2 class="white text-4xl">L'encyclopédie libre</h2>
    
    <div x-data="{ messages: ['Efreipedia est une encyclopédie sur laquelle vous pouvez publier et consulter des articles dans différents domaines et échanger vos connaissances avec toutes les personnes inscrites via le Forum !', 'Découvrez nos dernières actualités', '11/01: Inauguration de la première version du site !'], currentMessage: 0 }"
         x-init="() => { setInterval(() => { messages.push(messages.shift()); }, 5000); }" class="p-10">
        <p x-show="currentMessage === 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="text-2xl white">
            Efreipedia est une encyclopédie sur laquelle vous pouvez publier et consulter des articles dans différents domaines et échanger vos connaissances avec toutes les personnes inscrites via le Forum !
        </p>
        <p x-show="currentMessage === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="text-2xl white">
            Découvrez nos dernières actualités 
        </p>
        <p x-show="currentMessage === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="text-2xl white">
            11/01: Inauguration de la première version du site !
        </p>
        
        <button @click="currentMessage = (currentMessage + 1) % messages.length" class="text-white underline cursor-pointer mt-2">Toggle Slide</button>
    </div>
</body>

<?php require_once 'view/footer.php';?>  
</html>
