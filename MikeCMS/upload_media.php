<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    http_response_code(403);
    exit('Niet geautoriseerd');
}

if (!empty($_FILES['image']['name'])) {
    $file = $_FILES['image'];
    $folderId = $_POST['folder_id'] ?? null;
    $altText = $_POST['alt_text'] ?? null;
    $targetDir = "uploads/";
    $fileName = basename($file["name"]);
    $targetFile = $targetDir . uniqid() . "_" . $fileName;

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        $stmt = $pdo->prepare("INSERT INTO media (file_name, file_path, folder_id, alt_text) VALUES (?, ?, ?, ?)");
        $stmt->execute([$fileName, $targetFile, $folderId, $altText]);
        echo 'success';
    }
}
