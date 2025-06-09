<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in() || empty($_POST['name'])) {
    header('Location: media.php');
    exit;
}

$stmt = $pdo->prepare("INSERT INTO media_folders (name) VALUES (?)");
$stmt->execute([$_POST['name']]);

header('Location: media.php');
exit;
