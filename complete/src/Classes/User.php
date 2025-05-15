<?php
namespace App\Classes;

abstract class User {
    protected string $nom;
    protected string $prenom;
    protected static int $compteur = 0;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        self::$compteur++;
    }

    public static function getNombreUtilisateurs(): int {
        return self::$compteur;
    }

    public function getNomComplet(): string {
        return "$this->prenom $this->nom";
    }
}