<?php
namespace App\Classes;

class Livre {
    protected string $titre;
    protected int $annee;
    protected Auteur $auteur;
    protected ?Editeur $editeur;

    public function __construct(string $titre, int $annee, Auteur $auteur, ?Editeur $editeur = null) {
        $this->titre = $titre;
        $this->annee = $annee;
        $this->auteur = $auteur;
        $this->editeur = $editeur;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getAnnee(): int {
        return $this->annee;
    }

    public function getAuteur(): Auteur {
        return $this->auteur;
    }

    public function getType(): string {
        return 'Livre';
    }

    public function afficherInfo(): string {
        $info = "Auteur : " . $this->auteur->getNomComplet();
        if ($this->editeur) {
            $info .= " | Éditeur : " . $this->editeur->getNom();
        }
        return $info;
    }
}