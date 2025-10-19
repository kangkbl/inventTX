<?php $user = currentUser(); ?>
<header class="fixed top-0 inset-x-0 bg-white shadow z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="bg-blue-600 text-white w-10 h-10 rounded-lg flex items-center justify-center font-bold">IT</div>
            <div>
                <p class="text-lg font-semibold text-slate-800">Inventaris Transmisi & Multiplexing</p>
                <p class="text-sm text-slate-500">Dashboard Pengelolaan Peralatan</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="text-right">
                <p class="text-sm font-medium text-slate-700"><?= htmlspecialchars($user['name']) ?></p>
                <p class="text-xs text-slate-500"><?= htmlspecialchars($user['role']) ?></p>
            </div>
            <a href="/?route=logout" class="inline-flex items-center gap-2 px-3 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md transition">
                <?= icon('logout') ?>
                <span>Logout</span>
            </a>
        </div>
    </div>
</header>
