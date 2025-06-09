<?php
if (!is_logged_in()) {
    header("Location: /login.php");
    exit;
}

$currentPage = basename($_SERVER['PHP_SELF']);
$username = $_SESSION['username'] ?? 'Gebruiker';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MikeCMS Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen overflow-x-hidden">

    <!-- Topbar -->
    <header class="bg-white shadow-md flex items-center justify-between px-6 py-3 sticky top-0 z-50">
        <div class="flex items-center space-x-4">
            <button id="toggleMenu" class="md:hidden text-gray-700 focus:outline-none">
                ☰
            </button>
            <h1 class="text-xl font-bold">MikeCMS</h1>
        </div>

        <!-- Gebruiker dropdown -->
        <div class="relative">
            <button id="userDropdownBtn" class="flex items-center text-sm text-gray-700 space-x-2 hover:text-blue-600 focus:outline-none">
                <span class="font-semibold"><?= htmlspecialchars($username) ?></span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="userDropdown" class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg hidden z-50">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">⚙️ Instellingen</a>
                <form method="post" action="logout.php">
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">⛔ Uitloggen</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Mobiel overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 z-30 hidden md:hidden"></div>

    <div class="flex relative">

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed md:static top-14 left-0 w-64 h-[calc(100%-3.5rem)] bg-white shadow-md p-4 space-y-4 z-40 hidden md:block transition-all duration-200 ease-in-out">
            <nav class="space-y-2 mt-2">
                <a href="dashboard.php" class="<?= $currentPage === 'dashboard.php' ? 'text-blue-600 font-bold' : 'text-gray-700' ?> block hover:text-blue-500">🎨 Kleuren</a>
                <a href="content.php" class="<?= $currentPage === 'content.php' ? 'text-blue-600 font-bold' : 'text-gray-700' ?> block hover:text-blue-500">✏️ Teksten</a>
                <a href="media.php" class="<?= $currentPage === 'media.php' ? 'text-blue-600 font-bold' : 'text-gray-700' ?> block hover:text-blue-500">🖼️ Afbeeldingen</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="relative flex-1 p-6 md:ml-64">
            <!-- Breadcrumb -->
            <div class="text-sm text-gray-500 mb-4">
                📂 <span class="capitalize"><?= pathinfo($currentPage, PATHINFO_FILENAME) ?></span>
            </div>
