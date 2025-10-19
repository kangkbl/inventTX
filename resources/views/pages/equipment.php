<section class="space-y-6">
    <header class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-800">Peralatan</h1>
            <p class="text-sm text-slate-500">Daftar peralatan transmisi dan multiplexing yang terinventarisir.</p>
        </div>
        <button class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow">
            <span>Tambah Peralatan</span>
        </button>
    </header>
    <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Peralatan</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Lokasi</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Terakhir Diperbarui</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-slate-200">
                <?php foreach ([
                    ['name' => 'Multiplexer Huawei OptiX OSN 3500', 'category' => 'Multiplexing', 'location' => 'STO Jakarta Selatan', 'status' => 'Aktif', 'updated_at' => '5 Juni 2024'],
                    ['name' => 'Radio Microwave NEC iPASOLINK VR', 'category' => 'Transmisi', 'location' => 'Site Bukit Tinggi', 'status' => 'Perawatan', 'updated_at' => '4 Juni 2024'],
                    ['name' => 'Switching Packet Nokia 7750 SR-12', 'category' => 'Jaringan Inti', 'location' => 'NOC Surabaya', 'status' => 'Aktif', 'updated_at' => '2 Juni 2024'],
                    ['name' => 'Multiplexer ZTE ZXMP M721', 'category' => 'Multiplexing', 'location' => 'STO Makassar', 'status' => 'Aktif', 'updated_at' => '29 Mei 2024'],
                ] as $equipment): ?>
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-700"><?= htmlspecialchars($equipment['name']) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500"><?= htmlspecialchars($equipment['category']) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500"><?= htmlspecialchars($equipment['location']) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full <?= $equipment['status'] === 'Aktif' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' ?>">
                                <?= htmlspecialchars($equipment['status']) ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500"><?= htmlspecialchars($equipment['updated_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
