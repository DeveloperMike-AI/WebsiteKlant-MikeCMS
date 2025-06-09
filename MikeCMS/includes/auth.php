<?php
session_set_cookie_params([
    'path' => '/',
    'domain' => 'mike-cms.local',
    'secure' => false, // gebruik true als je HTTPS gebruikt
    'httponly' => true,
    'samesite' => 'Lax'
]);
session_start();
require_once 'db.php';
require_once 'helpers.php';

function login($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['role'] = $user['role'];
		$_SESSION['username'] = $user['username'];
		return true;
	}
    return false;
}

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function logout() {
    session_destroy();
    header("Location: /login.php");
    exit;
}
?>
