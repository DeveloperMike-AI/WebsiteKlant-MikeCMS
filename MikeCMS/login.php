<?php
require_once 'includes/auth.php'; 
$flash = get_flash();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (login($_POST['username'], $_POST['password'])) {
        header("Location: /dashboard.php");
        exit;
    } else {
        $error = "Ongeldige inloggegevens.";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - MikeCMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-sm">
        <?php if ($flash): ?>
            <div class="mb-4 text-green-700 bg-green-100 border border-green-300 px-4 py-2 rounded shadow">
                <?= htmlspecialchars($flash) ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="mb-4 text-red-700 bg-red-100 border border-red-300 px-4 py-2 rounded shadow">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">🔐 Inloggen</h2>

            <label class="block mb-2 text-sm font-semibold">Gebruikersnaam</label>
            <input type="text" name="username" required class="w-full p-2 mb-4 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <label class="block mb-2 text-sm font-semibold">Wachtwoord</label>
            <input type="password" name="password" required class="w-full p-2 mb-6 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <button type="submit" class="w-full bg-blue-500 text-white font-semibold p-2 rounded hover:bg-blue-600 transition">
                Inloggen
            </button>
        </form>
    </div>
</body>
</html>
