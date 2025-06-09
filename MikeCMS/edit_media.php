<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    http_response_code(403);
    exit('Niet geautoriseerd');
}

$id = $_POST['id'] ?? null;
$alt = $_POST['alt_text'] ?? '';

if ($id) {
    $stmt = $pdo->prepare("UPDATE media SET alt_text = ? WHERE id = ?");
    $stmt->execute([$alt, $id]);
    echo 'success';
} else {
    http_response_code(400);
    echo 'Ongeldige invoer';
}
