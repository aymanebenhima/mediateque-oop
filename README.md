# 🎯 Projet POO PHP – Gestion d’une Médiathèque Numérique

## 🧠 Contexte général

La municipalité souhaite moderniser sa médiathèque à travers une **application interne** permettant de gérer :
- Des livres physiques et numériques
- Leurs auteurs et éditeurs
- Plusieurs bibliothèques réparties dans la ville

Ce projet a pour but d’appliquer **les principes fondamentaux de la programmation orientée objet (POO)** tout en construisant une solution réaliste et modulaire.

---

## 🚀 Objectifs pédagogiques

Ce mini-projet vous permettra de mettre en œuvre :

| Concept POO       | À illustrer via le code                        |
|-------------------|-------------------------------------------------|
| Encapsulation     | Propriétés `private/protected` + getters       |
| Héritage          | `LivreNumerique` hérite de `Livre`             |
| Abstraction       | `User` est une classe abstraite                |
| Polymorphisme     | `afficherInfo()` redéfini                      |
| Composition       | Un `Livre` contient obligatoirement un `Auteur`|
| Agrégation        | Un `Livre` référence un `Editeur` optionnel    |
| Namespace & Autoload | Organisé avec `App\\Classes` et Composer     |

---

## 📁 Structure du projet

```

/mediatheque/
├── composer.json
├── index.php
├── data/
│   └── seed.php
├── src/
│   └── Classes/
│       ├── Auteur.php
│       ├── User.php
│       ├── Livre.php
│       ├── LivreNumerique.php
│       ├── Editeur.php
│       └── Bibliotheque.php
├── public/
├── vendor/
└── README.md

```

---

## 📦 Versions du projet

### 🛠️ Version Starter (répertoire `starter/`)

Cette version propose des **classes vides ou partiellement écrites** à compléter, avec des commentaires-guides.

Chaque classe contient :

- Les noms de propriétés
- Les signatures de méthodes à implémenter
- Des instructions TODO dans les commentaires

👉 **Recommandée pour l’apprentissage actif**

---

## 🔧 Installation

1. Cloner le projet :
   ```bash
   git clone https://github.com/aymanebenhima/mediateque-oop.git
   cd mediatheque
````

2. Installer Composer :

   ```bash
   composer install
   ```

3. Lancer un serveur PHP :

   ```bash
   php -S localhost:8000
   ```

4. Accéder dans le navigateur :

   ```
   http://localhost:8000/index.php
   ```

---

## 📘 Exemple de classe starter

```php
<?php
namespace App\Classes;

/**
 * Classe abstraite représentant un utilisateur.
 * À compléter avec propriétés `nom`, `prenom` et un compteur statique.
 */
abstract class User {
    // TODO : déclarer les attributs (nom, prenom)
    // TODO : créer un constructeur pour initialiser les données
    // TODO : méthode statique pour compter les utilisateurs
    // TODO : méthode getNomComplet()
}
```

---

## ✅ Résultat attendu

Une interface fonctionnelle affichant les livres disponibles :

* Affichage du titre, auteur, année, éditeur, type
* Filtres dynamiques (auteur, type)