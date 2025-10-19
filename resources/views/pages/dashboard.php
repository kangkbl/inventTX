<section class="space-y-6">
    <header>
        <h1 class="text-2xl font-semibold text-slate-800">Dashboard</h1>
        <p class="text-sm text-slate-500">Ringkasan kondisi inventaris peralatan transmisi dan multiplexing.</p>
    </header>
    <div class="grid gap-6 md:grid-cols-3">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <p class="text-sm text-slate-500">Total Peralatan</p>
            <p class="mt-2 text-3xl font-semibold text-slate-800">128</p>
            <p class="mt-1 text-xs text-emerald-600">+8 peralatan baru bulan ini</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <p class="text-sm text-slate-500">Peralatan Aktif</p>
            <p class="mt-2 text-3xl font-semibold text-slate-800">117</p>
            <p class="mt-1 text-xs text-emerald-600">91.4% dalam kondisi siap operasi</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <p class="text-sm text-slate-500">Lokasi</p>
            <p class="mt-2 text-3xl font-semibold text-slate-800">15</p>
            <p class="mt-1 text-xs text-slate-500">Site transmisi & multiplexing di seluruh wilayah</p>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Tugas Pemeliharaan Terjadwal</h2>
        <div class="space-y-4">
            <?php foreach ([
                ['name' => 'Multiplexer Huawei OptiX 155/622H', 'schedule' => '12 Juni 2024', 'location' => 'STO Bandung'],
                ['name' => 'Transmisi Radio SDH NEC iPASOLINK', 'schedule' => '18 Juni 2024', 'location' => 'Site Merak'],
                ['name' => 'Fiber Optic DWDM ZTE ZXMP', 'schedule' => '25 Juni 2024', 'location' => 'NOC Jakarta'],
            ] as $task): ?>
                <div class="flex items-center justify-between border border-slate-200 rounded-lg px-4 py-3">
                    <div>
                        <p class="text-sm font-medium text-slate-700"><?= htmlspecialchars($task['name']) ?></p>
                        <p class="text-xs text-slate-500">Lokasi: <?= htmlspecialchars($task['location']) ?></p>
                    </div>
                    <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Jadwal: <?= htmlspecialchars($task['schedule']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
