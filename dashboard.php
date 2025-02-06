<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION["username"]); ?> !</h2>
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </div>
</body>
</html>