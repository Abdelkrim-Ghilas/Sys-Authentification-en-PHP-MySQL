Système d'Authentification en PHP + MySQL

📌 Description

Ce projet est un système d'authentification sécurisé utilisant PHP, MySQL et Bootstrap.Il inclut des fonctionnalités d'inscription, de connexion et de gestion de session sécurisée.

📦 Prérequis

Avant de lancer le projet, assure-toi d’avoir installé :👉 XAMPP (ou tout autre serveur Apache avec PHP et MySQL)👉 PHP (version 7.4 ou supérieure)👉 MySQL👉 Git (si tu veux cloner et gérer le projet via GitHub)

⚙️ Installation et Configuration

1-Cloner le projet:
- git clone https://github.com/Abdelkrim-Ghilas/Sys-Authentification-en-PHP-MySQL.git
- cd auth_system_php

2-Démarrer Apache et MySQL (via XAMPP ou en ligne de commande)

3-Créer la base de données

4-Ouvre phpMyAdmin

5-Crée une nouvelle base de données auth_system en exécutant le fichier database.sql (fourni dans le projet) pour créer les tables


Lancer le projet

Place le dossier auth_system_php dans htdocs (si tu utilises XAMPP)

Ouvre un navigateur et accède à :

http://localhost/auth_system_php/

🛠️ Fonctionnalités

✔️ Inscription et connexion sécurisées
✔️ Protection contre les injections SQL, XSS et CSRF
✔️ Hashage des mots de passe avec password_hash()
✔️ Gestion des sessions sécurisée

