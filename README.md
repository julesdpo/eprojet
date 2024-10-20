# Projet E-commerce - PHP 

## Description du projet

Ce projet consiste en la création d'un site e-commerce de base développé avec **PHP** pour la logique back-end et **Tailwind CSS** pour le style front-end.
Le site permet d'afficher une liste de produits, de consulter les détails de chaque produit, et d'ajouter des articles à un panier d'achat. 

## Fonctionnalités principales

- **Affichage des produits** : Présentation d'une liste de produits avec leur nom, prix et image.
- **Détails des produits** : Chaque produit dispose d'une page détaillée avec des informations supplémentaires.
- **Gestion du panier** : Possibilité d'ajouter des produits au panier, d'en modifier la quantité, de les supprimer, et de voir le total des articles dans le panier.
- **Fonctionnalité de paiement (en cours)** : Un message temporaire informe l'utilisateur que la fonctionnalité de paiement sera bientôt disponible.

## Technologies utilisées

- **PHP** : Utilisé pour gérer la logique et la manipulation des données sur le serveur.
- **Tailwind CSS** : Utilisé pour créer une interface utilisateur responsive et moderne.
- **HTML/CSS** : Utilisé pour la structure des pages.
- **Sessions PHP** : Utilisées pour gérer le panier d'achat de l'utilisateur.
- **MySQL** : Base de données pour stocker les informations relatives aux produits.



### Prérequis

- Serveur local tel que **XAMPP** ou **MAMP** avec support PHP et MySQL.
- Navigateur web moderne.

### Étapes d'installation

1. **Cloner le dépôt du projet** :
    ```bash
    git clone https://github.com/ton-repo/eprojet-php.git
    ```

2. **Accéder au répertoire du projet** :
    ```bash
    cd eprojet-php
    ```


3. **Lancer le serveur local** :
    - Placer le projet dans le dossier `htdocs` (ou l’équivalent pour MAMP).
    - Démarrer le serveur local et accéder au projet à l’adresse suivante dans un navigateur :
      ```
      http://localhost/eprojet-php
      ```

## Structure du projet

```bash
eprojet-php/
│
├── config/                    # Fichiers de configuration
│   └── db.php                 # Fichier de connexion à la base de données
├── controller/                # Contrôleurs
│   └── ProductController.php  # Contrôleur pour gérer les produits
├── model/                     # Modèles pour interagir avec la base de données
│   └── ProductModel.php       # Modèle pour gérer les données des produits
├── public/                    # Fichiers accessibles au public
│   ├── images/                # Images des produits
│   ├── add_to_cart.php        # Script pour ajouter un produit au panier
│   ├── cart.php               # Page du panier
│   ├── checkout_coming_soon.html # Page annonçant l'arrivée prochaine du paiement
│   ├── product.php            # Page des détails d'un produit
│   ├── index.php              # Page principale affichant tous les produits
└── view/                      # Fichiers de vue (templates HTML)
    └── products.php           # Template pour la liste des produits
