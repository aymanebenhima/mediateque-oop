<?php
use App\Classes\Auteur;
use App\Classes\Editeur;
use App\Classes\Livre;
use App\Classes\LivreNumerique;
use App\Classes\Bibliotheque;

require __DIR__ . '/../../vendor/autoload.php';

$auteur1 = new Auteur("Taha", "Yassine", "Écrivain marocain contemporain");
$auteur2 = new Auteur("Sara", "Benali", "Professeure de littérature");

$editeur1 = new Editeur("Édition Maghreb", "Rabat");

$livre1 = new Livre("PHP Avancé", 2022, $auteur1, $editeur1);
$livre2 = new LivreNumerique("POO Moderne", 2023, $auteur2, null, "PDF", 2.5);
$livre3 = new LivreNumerique("Mernés", 2023, $auteur2, null, "PDF", 2.5);

$bibliotheque = new Bibliotheque("Médiathèque Centrale", "Casablanca");
$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);
$bibliotheque->ajouterLivre($livre3);

return $bibliotheque;