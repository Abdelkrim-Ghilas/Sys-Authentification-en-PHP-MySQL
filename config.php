<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "auth_system";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Définition des paramètres de cookie pour sécuriser la session
$lifetime = 60 * 60 * 24; // 1 jour
$path = "/";
$domain = ""; // Ajuster si besoin
$secure = isset($_SERVER["HTTPS"]); // Activer uniquement si HTTPS est utilisé
$httponly = true;

if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => $lifetime,
        'path' => $path,
        'domain' => $domain,
        'secure' => $secure,
        'httponly' => $httponly,
        'samesite' => 'Strict' // Protection contre CSRF
    ]);
    session_start();
}
?>
