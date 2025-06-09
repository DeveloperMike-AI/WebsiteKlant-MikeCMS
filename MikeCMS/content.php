<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    header("Location: /login.php");
    exit;
}

$stmt = $pdo->query("SELECT * FROM content");
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'includes/layout_top.php'; ?>

<h1 class="text-3xl font-bold mb-6">Tekstbeheer</h1>

<form id="text-form" class="bg-white p-6 rounded shadow-md space-y-4">
    <?php foreach ($content as $item): ?>
        <div>
            <label class="block font-semibold"><?= htmlspecialchars($item['content_key']) ?></label>
            <textarea 
                name="<?= htmlspecialchars($item['content_key']) ?>" 
                rows="3"
                class="w-full p-2 border rounded"
            ><?= htmlspecialchars($item['content_value']) ?></textarea>
        </div>
    <?php endforeach; ?>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Opslaan
    </button>
    <div id="text-save-status" class="mt-4 text-green-500 hidden">Opgeslagen!</div>
</form>

<script>
$('#text-form').on('submit', function(e) {
    e.preventDefault();
    $.post('save_content.php', $(this).serialize(), function(response) {
        $('#text-save-status').removeClass('hidden').text('Opgeslagen!');
        setTimeout(() => $('#text-save-status').addClass('hidden'), 2000);
    });
});
</script>

<?php include 'includes/layout_bottom.php'; ?>
