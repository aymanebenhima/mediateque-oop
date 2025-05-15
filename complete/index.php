<?php
require __DIR__ . '../../vendor/autoload.php';

$bibliotheque = require __DIR__ . '/data/seed.php';

$filtreAuteur = $_GET['auteur'] ?? '';
$filtreType = $_GET['type'] ?? '';

$livresFiltres = array_filter($bibliotheque->getLivres(), function($livre) use ($filtreAuteur, $filtreType) {
    $okAuteur = $filtreAuteur === '' || stripos($livre->getAuteur()->getNomComplet(), $filtreAuteur) !== false;
    $okType = $filtreType === '' || $livre->getType() === $filtreType;
    return $okAuteur && $okType;
});
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue des Livres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-xl p-8">
        <h1 class="text-3xl font-bold text-center text-indigo-700 mb-8">
            📚 <?= $bibliotheque->getNom(); ?> (<?= $bibliotheque->getAdresse(); ?>)
        </h1>

        <!-- Formulaire de filtre -->
        <form method="GET" class="mb-6">
            <div class="flex flex-col md:flex-row items-center gap-4">
                <input type="text" name="auteur" placeholder="Nom de l'auteur" value="<?= htmlspecialchars($filtreAuteur) ?>" class="border p-2 rounded w-full md:w-1/2" />
                <select name="type" class="border p-2 rounded w-full md:w-1/3">
                    <option value="">Tous les types</option>
                    <option value="Livre" <?= $filtreType === 'Livre' ? 'selected' : '' ?>>Livre</option>
                    <option value="LivreNumerique" <?= $filtreType === 'LivreNumerique' ? 'selected' : '' ?>>Livre Numérique</option>
                </select>
                <div class="flex gap-2">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Filtrer</button>
                    <a href="?" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Réinitialiser</a>
                </div>
            </div>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach($livresFiltres as $livre): ?>
                <div class="border border-gray-200 rounded-lg p-4 bg-white shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">📖 <?= $livre->getTitre(); ?> <span class="text-sm text-gray-500">(<?= $livre->getAnnee(); ?>)</span></h2>
                    <p class="text-gray-700 text-sm">👉 <?= $livre->afficherInfo(); ?></p>
                    <span class="mt-2 inline-block text-xs text-white bg-indigo-500 rounded-full px-2 py-1">Type : <?= $livre->getType(); ?></span>
                </div>
            <?php endforeach; ?>
            <?php if (empty($livresFiltres)): ?>
                <div class="col-span-full">
                    <p class="text-center text-gray-500 italic">Aucun livre trouvé pour les filtres donnés.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
