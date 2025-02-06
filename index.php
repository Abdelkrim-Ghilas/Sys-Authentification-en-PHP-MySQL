<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre site</h1>
        <p>Veuillez vous inscrire ou vous connecter pour continuer.</p>
        <a href="register.php" class="btn btn-primary">S'inscrire</a>
        <a href="login.php" class="btn btn-success">Se connecter</a>
    </div>
</body>
</html>