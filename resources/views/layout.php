<?php
$user = currentUser();
$menus = availableMenu();
$title = $title ?? 'Inventaris Peralatan Transmisi & Multiplexing';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">
<?php if ($user): ?>
    <?php include __DIR__ . '/partials/navbar.php'; ?>
    <div class="flex pt-16">
        <?php include __DIR__ . '/partials/sidebar.php'; ?>
        <main class="flex-1 p-6">
            <div class="max-w-6xl mx-auto">
                <?php viewContent($view, get_defined_vars()); ?>
            </div>
        </main>
    </div>
<?php else: ?>
    <?php viewContent($view, get_defined_vars()); ?>
<?php endif; ?>
</body>
</html>
