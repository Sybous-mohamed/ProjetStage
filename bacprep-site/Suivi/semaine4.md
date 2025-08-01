#  Rapport Final "semaine 4 " – Projet BacPrep

##  Objectif du Projet

Développer une plateforme éducative moderne et sécurisée destinée aux élèves du secondaire, leur permettant de :

- Rechercher des cours selon le niveau, la filière et la matière.
- Accéder à des documents PDF et à des vidéos explicatives.
- Gérer un compte personnel avec système d’authentification.
- Sauvegarder leurs cours favoris pour un accès rapide.


##  Fonctionnalités Développées

###  Authentification & Sécurité

- Système complet d’inscription, connexion et déconnexion.
- Validation côté serveur avec expressions régulières.
- Hashage sécurisé des mots de passe via `password_hash()`.
- Protection des routes via session PHP.

###  Gestion des Cours

- Page `resultats.php` avec affichage dynamique des cours.
- Filtres multi-critères : **niveau**, **filière**, **matière**.
- Barre de recherche par titre.
- Téléchargement des cours en PDF et accès aux vidéos YouTube.

###  Espace Profil (`profile.php`)

- Affichage et modification des informations personnelles.
- Changement de mot de passe sécurisé.
- Interface intuitive avec retours utilisateurs (succès/erreur).

###  Gestion des Favoris

- Ajout/suppression de cours en favoris par utilisateur.
- Traitement en AJAX (sans rechargement).
- Affichage clair des favoris avec date d’ajout.
- Message dynamique si aucun favori.

###  Interface & Expérience Utilisateur

- Interface responsive (compatible mobile et desktop).
- Design clair avec utilisation de **cartes**, **icônes** et **boutons colorés**.
- Messages interactifs (animations, transitions).
- Structure HTML/CSS moderne et cohérente.



##  Base de Données

- Structure normalisée :
  - `users` : utilisateurs
  - `cours` : cours avec titre, lien PDF, lien vidéo
  - `favorites` : cours ajoutés aux favoris par utilisateur
- Données vérifiées manuellement pour chaque ressource (PDF & YouTube).
- Insertion complète des cours par niveau, matière et filière.


##  Résultat Final

- Plateforme **fonctionnelle, sécurisée et stable**.
- Prête à être utilisée ou déployée en ligne.
- Code propre, bien structuré, commenté et réutilisable.

---

##  Technologies Utilisées

- **Langage serveur :** PHP (avec PDO)
- **Base de données :** MySQL
- **Frontend :** HTML5, CSS3, JavaScript
- **Librairies :**
  - Boxicons pour les icônes
  - AJAX natif pour les interactions sans rechargement
- **Sécurité :** Validation serveur, hashage, session


##  Compétences Acquises

- Développement full-stack (PHP/MySQL + JS/CSS/HTML)
- Gestion des sessions et sécurité web
- Architecture MVC simplifiée
- Requêtes SQL sécurisées (`prepare`, `execute`)
- Utilisation d’AJAX pour des fonctionnalités dynamiques



##  Organisation du Code

- `index.php` : Accueil & connexion
- `logout.php` : Déconnexion utilisateur
- `auth.php`: Validation & sécurité formulaire
- `courses.php` : recherche les cours selon le niveau , filiere , matiére 
- `resultats.php` : affichage des cours filtrés  
- `profile.php` : espace personnel  
- `toggle_favorite.php` : ajout/suppression AJAX des favoris  
- `includes/` : en-têtes, pieds de page, functions 
- `assets/` : styles, scripts
- `config/` : Connexion à la base de données
- `suivi/` : Rapports hebdomadaires


##  Conclusion

Le projet **BacPrep** est désormais terminé.  
Il répond aux objectifs fonctionnels fixés au départ, tout en respectant les bonnes pratiques de développement web.  
Il peut être enrichi à l’avenir avec d’autres modules : quiz interactifs, messagerie, notifications, etc.


