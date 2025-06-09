<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';

if (!is_logged_in()) {
    header("Location: /login.php");
    exit;
}

$folders = $pdo->query("SELECT * FROM media_folders ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
$activeFolderId = $_GET['folder'] ?? null;

if ($activeFolderId) {
    $stmt = $pdo->prepare("SELECT * FROM media WHERE folder_id = ? ORDER BY uploaded_at DESC");
    $stmt->execute([$activeFolderId]);
    $media = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare("SELECT name FROM media_folders WHERE id = ?");
    $stmt->execute([$activeFolderId]);
    $activeFolderName = $stmt->fetchColumn() ?: 'Onbekend';
} else {
    $media = [];
    $activeFolderName = null;
}
?>

<?php include 'includes/layout_top.php'; ?>

<h1 class="text-3xl font-bold mb-6">📁 Mediabeheer</h1>

<div class="flex justify-between items-center mb-6">
    <div class="space-x-2">
        <button onclick="openModal('folderModal')" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">➕ Nieuwe map</button>
        <?php if ($folders): ?>
            <button onclick="openModal('uploadModal')" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">📤 Upload afbeelding</button>
        <?php endif; ?>
    </div>
</div>

<!-- Map overzicht -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    <?php foreach ($folders as $folder): ?>
        <a href="?folder=<?= $folder['id'] ?>" class="block bg-white rounded shadow hover:ring-2 ring-blue-500 p-4 text-center <?= $activeFolderId == $folder['id'] ? 'ring-2 ring-blue-600' : '' ?>">
            📁 <span class="block font-semibold mt-2"><?= htmlspecialchars($folder['name']) ?></span>
        </a>
    <?php endforeach; ?>
</div>

<?php if ($activeFolderName): ?>
    <h2 class="text-xl font-semibold mb-2">🖼️ Afbeeldingen in "<?= htmlspecialchars($activeFolderName) ?>"</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($media as $item): ?>
            <div class="bg-white rounded shadow p-2">
                <img src="<?= htmlspecialchars($item['file_path']) ?>" alt="<?= htmlspecialchars($item['alt_text'] ?? '') ?>" class="w-full h-auto mb-2">
                <p class="text-sm text-gray-600 italic mb-2"><?= htmlspecialchars($item['alt_text']) ?></p>
                <div class="flex justify-between items-center mt-2">
					<button onclick="openEditModal(<?= $item['id'] ?>, '<?= htmlspecialchars($item['alt_text'], ENT_QUOTES) ?>')" class="text-blue-500 text-sm">Bewerken</button>
					<form method="POST" action="delete_media.php" onsubmit="return confirm('Weet je zeker dat je deze afbeelding wilt verwijderen?');">
						<input type="hidden" name="id" value="<?= $item['id'] ?>">
						<button type="submit" class="text-red-500 text-sm">Verwijderen</button>
					</form>
				</div>
            </div>
        <?php endforeach; ?>
    </div>
<?php elseif ($folders): ?>
    <p class="text-gray-500 italic">Klik op een map om afbeeldingen te bekijken.</p>
<?php else: ?>
    <p class="text-gray-500 italic">Nog geen mappen aangemaakt.</p>
<?php endif; ?>

<!-- Modal: Nieuwe map -->
<div id="folderModal" class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded p-6 w-full max-w-sm shadow-lg">
        <h2 class="text-xl font-bold mb-4">➕ Nieuwe map</h2>
        <form method="POST" action="create_folder.php">
            <input type="text" name="name" placeholder="Naam van map" required class="w-full p-2 mb-4 border rounded">
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal('folderModal')" class="text-gray-600 hover:underline">Annuleren</button>
                <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900">Opslaan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal: Upload afbeelding -->
<div id="uploadModal" class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded p-6 w-full max-w-md shadow-lg">
        <h2 class="text-xl font-bold mb-4">📤 Upload afbeelding</h2>
        <form id="upload-form" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required class="w-full mb-4 border p-2 rounded">
            <input type="hidden" name="folder_id" value="<?= $activeFolderId ?>">
            <input type="text" name="alt_text" placeholder="Alt-omschrijving (optioneel)" class="w-full mb-4 border p-2 rounded">
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal('uploadModal')" class="text-gray-600 hover:underline">Annuleren</button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Upload</button>
            </div>
        </form>
        <div id="upload-status" class="mt-2 text-green-500 hidden">Upload gelukt!</div>
    </div>
</div>

<!-- Modal: Bewerken afbeelding -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded p-6 w-full max-w-md shadow-lg">
        <h2 class="text-xl font-bold mb-4">✏️ Afbeelding bewerken</h2>
        <form id="edit-form">
            <input type="hidden" name="id" id="edit-id">
            <label class="block text-sm mb-1 font-semibold">Alt-omschrijving</label>
            <input type="text" name="alt_text" id="edit-alt" class="w-full p-2 mb-4 border rounded" placeholder="Bijv. Logo van bedrijf">
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal('editModal')" class="text-gray-600 hover:underline">Annuleren</button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Opslaan</button>
            </div>
        </form>
        <div id="edit-status" class="mt-2 text-green-500 hidden">Bewerkt!</div>
    </div>
</div>

<script>
function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
}

function openEditModal(id, alt) {
    $('#edit-id').val(id);
    $('#edit-alt').val(alt);
    openModal('editModal');
}

$('#edit-form').on('submit', function(e) {
    e.preventDefault();
    const formData = $(this).serialize();
    $.post('edit_media.php', formData, function(response) {
        $('#edit-status').removeClass('hidden').text('Bewerkt!');
        setTimeout(() => location.reload(), 1000);
    });
});

$('#upload-form').on('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    $.ajax({
        url: 'upload_media.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function() {
            $('#upload-status').removeClass('hidden').text('Upload gelukt!');
            setTimeout(() => location.reload(), 1000);
        }
    });
});
</script>

<?php include 'includes/layout_bottom.php'; ?>
