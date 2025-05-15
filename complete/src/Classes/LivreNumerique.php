<?php
namespace App\Classes;

class LivreNumerique extends Livre {
    private string $format;
    private float $tailleMo;

    public function __construct(string $titre, int $annee, Auteur $auteur, ?Editeur $editeur, string $format, float $tailleMo) {
        parent::__construct($titre, $annee, $auteur, $editeur);
        $this->format = $format;
        $this->tailleMo = $tailleMo;
    }

    public function getType(): string {
        return 'LivreNumerique';
    }

    public function afficherInfo(): string {
        return parent::afficherInfo() . " | Format : $this->format ($this->tailleMo Mo)";
    }
}