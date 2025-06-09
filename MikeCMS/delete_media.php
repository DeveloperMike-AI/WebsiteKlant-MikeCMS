<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    http_response_code(403);
    exit('Niet geautoriseerd');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $stmt = $pdo->prepare("SELECT file_path FROM media WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    $media = $stmt->fetch();

    if ($media && file_exists($media['file_path'])) {
        unlink($media['file_path']);
    }

    $stmt = $pdo->prepare("DELETE FROM media WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    header("Location: media.php");
}
