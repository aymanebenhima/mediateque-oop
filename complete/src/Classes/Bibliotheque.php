<?php
namespace App\Classes;

class Bibliotheque {
    private string $nom;
    private string $adresse;
    private array $livres = [];

    public function __construct(string $nom, string $adresse) {
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    public function ajouterLivre(Livre $livre): void {
        $this->livres[] = $livre;
    }

    public function getLivres(): array {
        return $this->livres;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }
}