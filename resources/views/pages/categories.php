<?php authorize(['Super Admin']); ?>
<section class="space-y-6">
    <header class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-800">Kategori Peralatan</h1>
            <p class="text-sm text-slate-500">Pengelompokan peralatan transmisi dan multiplexing.</p>
        </div>
        <button class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow">
            <span>Tambah Kategori</span>
        </button>
    </header>
    <div class="grid gap-4 md:grid-cols-2">
        <?php foreach ([
            ['name' => 'Transmisi', 'description' => 'Perangkat yang menangani distribusi sinyal antar site, termasuk radio microwave dan perangkat SDH.'],
            ['name' => 'Multiplexing', 'description' => 'Perangkat multiplexing SDH, PDH, dan DWDM untuk menggabungkan multiple sinyal.'],
            ['name' => 'Monitoring', 'description' => 'Perangkat monitoring jaringan seperti NMS dan probe kualitas layanan.'],
            ['name' => 'Power Supply', 'description' => 'Sumber daya pendukung seperti rectifier, UPS, dan baterai.'],
        ] as $category): ?>
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6">
                <h2 class="text-lg font-semibold text-slate-800 mb-2"><?= htmlspecialchars($category['name']) ?></h2>
                <p class="text-sm text-slate-600 leading-relaxed"><?= htmlspecialchars($category['description']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
