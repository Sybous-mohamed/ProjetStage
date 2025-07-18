# Rapport de la Semaine 2 - Projet BacPrep

## 1. Objectif Général

Développer une plateforme éducative en ligne permettant aux utilisateurs de s’inscrire, se connecter, et chercher des cours selon leur niveau, filière et matière.

## 2. Travaux Réalisés

### 2.1 Backend - PHP

- **Gestion de l'inscription :**
  - Validation des données (nom, email, mot de passe).
  - Protection contre les doublons (email déjà utilisé).
  - Hashage sécurisé du mot de passe (`password_hash`).
  - Création de session utilisateur après inscription.
- **Gestion de la connexion :**

  - Validation de l’email.
  - Recherche utilisateur dans la base.
  - Vérification du mot de passe avec `password_verify`.
  - Création de session pour utilisateur connecté.

- Utilisation de PDO pour sécuriser les requêtes SQL (`prepare`, `execute`).

### 2.2 Base de données MySQL

- **Création des tables principales :**

  - **`users` :**  
    | Champ | Type | Description |  
    |-------------|------------------|-----------------------------|  
    | id | INT (AUTO_INCREMENT) | Identifiant unique utilisateur |  
    | username | VARCHAR | Nom de l'utilisateur |  
    | email | VARCHAR | Email unique |  
    | password | VARCHAR | Mot de passe hashé |

  - **`courses` :**  
    | Champ | Type | Description |  
    |-------------|------------------|-----------------------------|  
    | id | INT (AUTO_INCREMENT) | Identifiant unique du cours |  
    | niveau | VARCHAR | Niveau (1bac, 2bac) |  
    | filiere | VARCHAR | Filière (Sciences Mathématiques...) |  
    | matiere | VARCHAR | Matière (Mathématiques, Physique...) |  
    | titre | VARCHAR | Titre du cours |  
    | pdf_url | VARCHAR | URL du fichier PDF associé |  
    | youtube_url | VARCHAR | URL de la vidéo YouTube |

- Ajout de quelques cours exemples pour 1ère et 2ème année Bac, avec titres et liens PDF & YouTube.

### 2.3 Frontend - HTML/CSS/JavaScript

- Page principale avec formulaire de recherche :

  - Sélection dynamique des filières selon le niveau choisi.
  - Mise à jour dynamique des matières selon la filière sélectionnée.
  - Utilisation de `Object.keys()`, `forEach()`, manipulation DOM (`createElement`, `appendChild`).
  - Conversion des valeurs en minuscules avec `toLowerCase()` pour faciliter la gestion côté backend.

- Formulaire de contact simple.

- Responsive design pour mobile et desktop.

## 3. Points Techniques et Concepts Clés

- Validation et sécurisation des entrées utilisateurs côté serveur (PHP).
- Utilisation des sessions PHP pour gérer la connexion.
- Requêtes préparées avec PDO pour éviter les injections SQL.
- Manipulation dynamique du DOM avec JavaScript.
- Transformation des chaînes (ex: `toLowerCase()`, `replace()`) pour uniformiser les données.
- Structure de base de données relationnelle pour stocker utilisateurs et cours.
- Ajout de champs médias (`pdf_url`, `youtube_url`) pour enrichir le contenu des cours.

## 4. Prochaines Étapes

### 4.1 Page `resultats.php`

- Afficher les résultats de recherche des cours selon les filtres (niveau, filière, matière).
- Récupérer les paramètres via GET.
- Afficher le titre du cours, liens vers PDF et vidéo YouTube.
- Interface utilisateur claire avec boutons pour télécharger ou regarder.

### 4.2 Page `profile.php`

- Afficher les informations utilisateur (nom, email).
- Permettre modification des informations personnelles.
- Ajouter bouton déconnexion.

### 4.3 Amélioration du design

- Revoir le CSS pour un rendu plus moderne et agréable.
- Optimiser le site pour tous les écrans (responsive design).
- Améliorer l'expérience utilisateur (messages d'erreur, alertes, animations).

### 4.4 Compléter la base de données

- Ajouter tous les cours restants dans la table `courses`.
- Mettre à jour les liens PDF et YouTube.

## 5. Remarques

Le travail de cette semaine a posé les bases solides pour une plateforme éducative fonctionnelle, avec un backend sécurisé et une interface utilisateur interactive, enrichie par des ressources multimédias.

Les prochaines étapes permettront d'améliorer la présentation des données et l'expérience utilisateur tout en enrichissant le contenu de la base.
