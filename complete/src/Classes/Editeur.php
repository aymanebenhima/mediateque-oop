<?php
namespace App\Classes;

class Editeur {
    private string $nom;
    private string $adresse;

    public function __construct(string $nom, string $adresse) {
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }
}