<?php
require_once 'includes/auth.php';

if (!is_logged_in()) {
    header("Location: /login.php");
    exit;
}

// Huisstijlkleuren ophalen
$stmt = $pdo->query("SELECT * FROM settings WHERE setting_key LIKE 'color_%'");
$colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'includes/layout_top.php'; ?>

<h1 class="text-3xl font-bold mb-6">Dashboard – Huisstijl Kleuren</h1>

<section class="bg-white p-6 rounded shadow-md mb-6">
    <h2 class="text-2xl font-bold mb-4">Huisstijl Kleuren</h2>
    <form id="color-form" class="space-y-4">
        <?php foreach ($colors as $color): ?>
            <div>
                <label class="block font-semibold"><?= htmlspecialchars($color['setting_key']) ?></label>
                <input 
                    type="color" 
                    name="<?= htmlspecialchars($color['setting_key']) ?>" 
                    value="<?= htmlspecialchars($color['setting_value']) ?>" 
                    class="border p-2 rounded w-24"
                />
            </div>
        <?php endforeach; ?>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Opslaan
        </button>
    </form>
    <div id="color-save-status" class="mt-4 text-green-500 hidden">Opgeslagen!</div>
</section>

<script>
$('#color-form').on('submit', function(e) {
    e.preventDefault();
    $.post('save_colors.php', $(this).serialize(), function(response) {
        $('#color-save-status').removeClass('hidden').text('Opgeslagen!');
        setTimeout(() => $('#color-save-status').addClass('hidden'), 2000);
    });
});
</script>

<?php include 'includes/layout_bottom.php'; ?>
