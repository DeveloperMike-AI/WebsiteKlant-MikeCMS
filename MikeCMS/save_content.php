<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    http_response_code(403);
    exit('Niet geautoriseerd');
}

foreach ($_POST as $key => $value) {
    $stmt = $pdo->prepare("INSERT INTO content (content_key, content_value)
                           VALUES (?, ?)
                           ON DUPLICATE KEY UPDATE content_value = VALUES(content_value)");
    $stmt->execute([$key, $value]);
}

echo 'success';
