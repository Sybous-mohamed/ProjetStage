# Rapport Semaine 1 – Projet Site de Cours en Ligne (BacPrep)

## Résumé des tâches effectuées :
Durant cette première semaine, le travail s’est principalement concentré sur le **développement de l’interface utilisateur (Frontend)** du site. Une maquette complète a été conçue pour simuler le fonctionnement global de la plateforme du point de vue d’un utilisateur non connecté.

## 1. Réalisation de la maquette HTML/CSS

###  Composants développés :
- **Header fixe avec navigation fluide** :
  - Logo
  - Liens de navigation (Accueil, Fonctionnalités, Statistiques, Témoignages, Contact)
  - Boutons *Connexion* et *Inscription*

- **Section Hero (accueil)** :
  - Message de bienvenue
  - Bouton pour inciter à l’inscription

- **Section Fonctionnalités** :
  - Présentation des principales fonctionnalités :
    - Cours complets
    - Vidéos pédagogiques
    - Exercices corrigés

- **Section Statistiques** :
  - Affichage des indicateurs clés (cours, étudiants, taux de réussite, disponibilité)

- **Section Témoignages** :
  - Avis d’étudiants fictifs (avec avatars, noms, mentions obtenues, étoiles)

- **Section Contact** :
  - Formulaire de contact avec champs nom, email, message

- **Footer responsive** :
  - Informations générales
  - Liens rapides
  - Réseaux sociaux

- **Bouton de retour en haut ("Scroll to Top")**

## 2. Modales d’authentification (UI uniquement)
- Création de deux modales (non connectées à un backend pour l’instant) :
  - **Connexion**
  - **Inscription**
- Ajout de transitions et gestion des changements entre les deux modales (JS simple)

## 3. Script JavaScript de base
- Affichage / Masquage des modales (login / inscription)
- Affichage conditionnel du bouton de retour en haut
- Simulation de l'envoi du formulaire de contact avec `alert("Message envoyé")`

## 4. Accessibilité et responsive design
- Utilisation de `@media` queries pour adapter l’interface aux petits écrans
- Navigation et boutons utilisables sur mobile
- Polices lisibles et couleurs contrastées

## 5. Technologies utilisées cette semaine
- **HTML5** : structure sémantique
- **CSS3** : design responsive & animations
- **JavaScript vanilla** : gestion des interactions utilisateur
- **Boxicons** : pour les icônes visuelles

## 6. Prochaines étapes (Semaine 2)
- Démarrage de l’intégration backend :
  - Gestion réelle de l’inscription / connexion (PHP + MySQL)
  - Début de la structure base de données (users, cours, matières, etc.)
- Création des pages dynamiques de consultation des cours
- Ajout d’une logique de filtrage (niveau, filière, matière)


