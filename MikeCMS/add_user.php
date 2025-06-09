<?php
require_once 'includes/db.php';

$username = 'admin';
$password = 'admin'; // Dit is het plaintext wachtwoord
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$role = 'admin';

$stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
$stmt->execute([$username, $hashed_password, $role]);

echo "Gebruiker succesvol toegevoegd!";
?>
