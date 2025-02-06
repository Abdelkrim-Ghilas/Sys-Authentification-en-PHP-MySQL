Système d'Authentification en PHP + MySQL

📌 Description

Ce projet est un système d'authentification sécurisé utilisant PHP, MySQL et Bootstrap.Il inclut des fonctionnalités d'inscription, de connexion et de gestion de session sécurisée.

📦 Prérequis

Avant de lancer le projet, assure-toi d’avoir installé :👉 XAMPP (ou tout autre serveur Apache avec PHP et MySQL)👉 PHP (version 7.4 ou supérieure)👉 MySQL👉 Git (si tu veux cloner et gérer le projet via GitHub)

⚙️ Installation et Configuration

Cloner le projet

git clone https://github.com/TON-NOM-DUTILISATEUR/auth_system_php.git
cd auth_system_php

Démarrer Apache et MySQL (via XAMPP ou en ligne de commande)

Créer la base de données

Ouvre phpMyAdmin

Crée une nouvelle base de données auth_system

Exécute le fichier database.sql (fourni dans le projet) pour créer les tables

Configurer la connexion à la base de donnéesModifie le fichier config.php si nécessaire :

$host = "localhost";
$user = "root"; // Utilisateur MySQL (par défaut root sur XAMPP)
$password = ""; // Mot de passe (laisser vide sur XAMPP)
$dbname = "auth_system"; // Nom de la base de données

Lancer le projet

Place le dossier auth_system_php dans htdocs (si tu utilises XAMPP)

Ouvre un navigateur et accède à :

http://localhost/auth_system_php/

🛠️ Fonctionnalités

✔️ Inscription et connexion sécurisées✔️ Protection contre les injections SQL, XSS et CSRF✔️ Hashage des mots de passe avec password_hash()✔️ Gestion des sessions sécurisée✔️ UI modernisée avec Bootstrap