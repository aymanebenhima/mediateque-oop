<?php
namespace App\Classes;

class Auteur extends User {
    private string $biographie;

    public function __construct(string $nom, string $prenom, string $biographie) {
        parent::__construct($nom, $prenom);
        $this->biographie = $biographie;
    }

    public function getBiographie(): string {
        return $this->biographie;
    }
}