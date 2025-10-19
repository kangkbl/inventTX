<?php
session_start();

require __DIR__ . '/../app/helpers.php';

$route = $_GET['route'] ?? 'dashboard';

if ($route === 'logout') {
    logout();
    header('Location: /?route=login');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $route === 'login') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (attemptLogin($email, $password)) {
        header('Location: /?route=dashboard');
        exit;
    }

    $error = 'Email atau password tidak sesuai.';
    renderView('auth/login', compact('error') + ['title' => 'Masuk']);
    return;
}

$user = currentUser();

if (!$user && $route !== 'login') {
    header('Location: /?route=login');
    exit;
}

switch ($route) {
    case 'login':
        if ($user) {
            header('Location: /?route=dashboard');
            exit;
        }
        renderView('auth/login', ['title' => 'Masuk']);
        break;
    case 'dashboard':
        requireAuth();
        renderView('pages/dashboard', ['title' => 'Dashboard']);
        break;
    case 'equipment':
        requireAuth();
        renderView('pages/equipment', ['title' => 'Peralatan']);
        break;
    case 'users':
        requireAuth();
        renderView('pages/users', ['title' => 'Manajemen User']);
        break;
    case 'categories':
        requireAuth();
        renderView('pages/categories', ['title' => 'Kategori Peralatan']);
        break;
    default:
        http_response_code(404);
        $title = 'Halaman Tidak Ditemukan';
        renderView('errors/404', compact('title'));
}
