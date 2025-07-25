# Rapport de la Semaine 3 - Projet BacPrep

## 1. Objectif Général

Poursuivre le développement des fonctionnalités principales de la plateforme éducative, notamment l’affichage dynamique des cours, la gestion sécurisée des utilisateurs, et l’enrichissement progressif de la base de données.

## 2. Travaux Réalisés

### 2.1 Page resultats.php

- Création de la page de résultats des cours.
- Récupération des filtres depuis les paramètres _GET_ (niveau, filiere, matiere).
- Connexion à la base de données via _PDO_.
- Requête SQL dynamique sécurisée avec prepare() et execute().
- Affichage dynamique des cours avec :
  - _Titre_.
  - _Lien de téléchargement du PDF_.
  - _Lien vers la vidéo YouTube_ (bouton ou icône).
- Ajout d’une _barre de recherche_ pour filtrer par titre de cours.
- Affichage de message clair si aucun résultat trouvé.

### 2.2 Validation côté serveur (auth.php)

- Ajout de _vérifications avec expressions régulières_ pour sécuriser les entrées du formulaire de connexion/inscription :
  - _Nom d’utilisateur_ : seulment des lettres
  - _Email_ : format conforme.
  - _Mot de passe_ : au moins 6 caractere
- Affichage de messages d’erreurs adaptés.

### 2.3 Déconnexion utilisateur (logout.php)

- Création d’un fichier logout.php :
  - Suppression des données de session (session_unset()).
  - Destruction complète de la session (session_destroy()).
  - Redirection vers la page de connexion (index.php) .
- Intégration du bouton de déconnexion dans l’interface.

### 2.4 Tests et intégration

- Vérification du bon fonctionnement de la recherche.
- Correction de bugs liés à la casse (toLowerCase(), ucfirst()).
- Amélioration visuelle :
  - Utilisation de blocs/cartes pour afficher les cours.
  - Boutons clairs, marges, couleurs douces.

### 2.5 Enrichissement des données

- Ajout de plusieurs cours dans la base courses.
- Vérification manuelle des liens PDF et YouTube.

## 3. Travaux En Cours ou Incomplets

### 3.1 Page profile.php

- Affichage des informations en session (nom, email).
- _Je vais la compléter_ la semaine prochaine.

### 3.2 Complétion de la base de données

- Certains cours restent à ajouter selon les matières/filières.
- Prévu pour la semaine prochaine.

## 4. Prochaines Étapes (Semaine 4)

- Finaliser la page profile.php :
  - Modification des données personnelles.
  - Sécurisation avec session.
- Compléter la base de données avec les cours restants.
- Finaliser le design :
  - Uniformisation (couleurs, polices, boutons).
  - Responsive design pour mobile/desktop.
- Créer une version finale stable v1.0.
- Préparer la mise en ligne :
  - Organisation des fichiers.
  - Tests locaux finaux.

## 5. Remarques

Cette semaine a marqué une _étape importante_ dans la stabilisation du site :

- Le système d’authentification et de déconnexion est fonctionnel.
- La recherche et navigation dans les cours sont bien intégrées.
- Les validations côté serveur améliorent la sécurité globale.

Malgré le retard sur profile.php, la plateforme devient _quasi-utilisable_.  
La _semaine 4_ visera la _finalisation_ et _mise en ligne_ de la version stable.
