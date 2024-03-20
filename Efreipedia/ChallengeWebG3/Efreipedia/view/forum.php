<?php require_once './controller/ForumController.php';?>

<body x-data="{ nom: '', message: '' }"
    class="bg-gradient-to-r from-black via-blue-500 to-purple-500 flex flex-col items-center justify-center">

    <div class="flex items-center space-x-8"> <!-- Utilisation de flex pour aligner les éléments horizontalement -->
        <form method="post" action="/message" class="bg-white rounded-br-2xl text-xl w-96 p-8 space-y-4 mt-8">
            <div class="flex flex-col space-y-1">
                <label for="nom" class="text-lg">Nom:</label>
                <input type="text" id="nom" x-model="nom" name="nom" required
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500" />
            </div>
            <div class="flex flex-col space-y-1">
                <label for="message" class="text-lg">Message:</label>
                <textarea id="message" x-model="message" name="message" required
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500"></textarea>
            </div>
            <button type="submit" x-bind:disabled="!nom || !message"
                class="bg-green-700 rounded-br-2xl text-xl py-2 px-4 hover:bg-green focus:outline-none focus:ring focus:border-blue-500">Envoyer</button>
        </form>
        
        <div id="appar" x-data="{ open: false }" class="bg-white rounded p-4 mb-4">
            <?php foreach ($forum as $item) { ?>
                <div @click="open = !open" class="cursor-pointer">
                    <p class="font-bold underline"><?= $item['nom'] ?></p>
                    <div x-show="open" class="mt-2"><?= $item['contenu'] ?></div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

<?php require_once 'view/footer.php'; ?>
</html>
              