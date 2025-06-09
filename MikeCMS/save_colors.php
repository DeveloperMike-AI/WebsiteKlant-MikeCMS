<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    http_response_code(403);
    exit('Niet geautoriseerd');
}

foreach ($_POST as $key => $value) {
    if (strpos($key, 'color_') === 0) {
        $stmt = $pdo->prepare("INSERT INTO settings (setting_key, setting_value) 
                               VALUES (?, ?) 
                               ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value)");
        $stmt->execute([$key, $value]);
    }
}

echo 'success';
