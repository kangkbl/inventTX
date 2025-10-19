<?php $error = $error ?? null; ?>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
    <div class="bg-white/95 backdrop-blur rounded-2xl shadow-2xl p-10 w-full max-w-md">
        <div class="mb-8 text-center">
            <div class="mx-auto w-20 h-20 rounded-full bg-blue-600/10 flex items-center justify-center mb-4">
                <span class="text-3xl font-bold text-blue-600">IT</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Inventaris Transmisi & Multiplexing</h1>
            <p class="text-sm text-slate-500 mt-2">Silakan masuk untuk mengelola data peralatan transmisi dan multiplexing</p>
        </div>
        <?php if ($error): ?>
            <div class="mb-6 px-4 py-3 bg-red-50 border border-red-200 text-red-600 text-sm rounded-md">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>
        <form method="post" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1" for="email">Email</label>
                <input type="email" id="email" name="email" required autofocus
                       class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="nama@perusahaan.com">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1" for="password">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Masukkan password">
            </div>
            <button type="submit"
                    class="w-full inline-flex justify-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition">
                Masuk
            </button>
        </form>
        <div class="mt-8 text-xs text-slate-400 text-center">
            <p>Gunakan akun <strong>superadmin@example.com</strong> atau <strong>admin@example.com</strong> dengan password <strong>password</strong>.</p>
        </div>
    </div>
</div>
