<?php $menus = availableMenu(); ?>
<aside class="w-64 bg-white border-r border-slate-200 min-h-[calc(100vh-4rem)]">
    <nav class="p-4 space-y-2">
        <?php foreach ($menus as $menu): ?>
            <?php $active = ($_GET['route'] ?? 'dashboard') === $menu['route']; ?>
            <a href="/?route=<?= htmlspecialchars($menu['route']) ?>"
               class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition
               <?= $active ? 'bg-blue-600 text-white shadow' : 'text-slate-600 hover:bg-slate-100' ?>">
                <span class="text-slate-500 <?= $active ? 'text-white' : '' ?>"> <?= icon($menu['icon']) ?> </span>
                <span><?= htmlspecialchars($menu['label']) ?></span>
            </a>
        <?php endforeach; ?>
    </nav>
</aside>
