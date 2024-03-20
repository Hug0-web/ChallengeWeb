<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
    <!-- TailwindCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <title>My Website</title>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Your content goes here -->

    

    <footer x-data="{ open: false }" class="bg-gray-800 text-white p-5 fixed bottom-0 w-full">
        <div x-show="open" class="grid grid-cols-2 gap-4">
        <div class="">
            <div>
               <h2>Hugo LUCAS</h2>
               <p>LinkdIn: Hugo LUCAS</p>
            </div>
            <div>
               <h2>Staël ELANGMANE</h2>
               <p>LinkdIn: Staël ELANGMANE</p>
            </div>
            <div>
               <h2>Koussai LARIBI</h2>
               <p>LinkdIn: Koussai LARIBI</p>
            </div>
            <div>
               <h2>Jailson De Morrais Correia</h2>
               <p>LinkdIn: Jailson De Morrais Correia</p>
            </div>
            <div>
               <h2>Kalyl THERA</h2>
               <p>LinkdIn: Kalyl THERA</p>
            </div>
       </div>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

</body>
</html>