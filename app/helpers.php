<?php

const USERS_FILE = __DIR__ . '/../data/users.php';

function loadUsers(): array
{
    static $users;
    if ($users === null) {
        $users = require USERS_FILE;
    }

    return $users;
}

function attemptLogin(string $email, string $password): bool
{
    foreach (loadUsers() as $user) {
        if (strcasecmp($user['email'], $email) === 0 && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
            ];

            return true;
        }
    }

    return false;
}

function logout(): void
{
    unset($_SESSION['user']);
}

function currentUser(): ?array
{
    return $_SESSION['user'] ?? null;
}

function requireAuth(): void
{
    if (!currentUser()) {
        header('Location: /?route=login');
        exit;
    }
}

function authorize(array $allowedRoles): void
{
    $user = currentUser();
    if (!$user || !in_array($user['role'], $allowedRoles, true)) {
        http_response_code(403);
        renderView('errors/403', ['title' => 'Akses Ditolak']);
        exit;
    }
}

function renderView(string $view, array $data = []): void
{
    $viewPath = __DIR__ . '/../resources/views/' . $view . '.php';

    if (!file_exists($viewPath)) {
        throw new RuntimeException("View {$view} tidak ditemukan.");
    }

    $contentView = $view;
    extract($data);
    $view = $contentView;

    include __DIR__ . '/../resources/views/layout.php';
}

function viewContent(string $view, array $data = []): void
{
    $viewPath = __DIR__ . '/../resources/views/' . $view . '.php';

    if (!file_exists($viewPath)) {
        throw new RuntimeException("View {$view} tidak ditemukan.");
    }

    extract($data);
    include $viewPath;
}

function availableMenu(): array
{
    $user = currentUser();
    if (!$user) {
        return [];
    }

    $role = $user['role'];

    $menus = [
        'dashboard' => [
            'label' => 'Dashboard',
            'icon' => 'home',
            'route' => 'dashboard',
            'roles' => ['Admin', 'Super Admin'],
        ],
        'equipment' => [
            'label' => 'Peralatan',
            'icon' => 'cpu-chip',
            'route' => 'equipment',
            'roles' => ['Admin', 'Super Admin'],
        ],
        'users' => [
            'label' => 'User',
            'icon' => 'users',
            'route' => 'users',
            'roles' => ['Super Admin'],
        ],
        'categories' => [
            'label' => 'Kategori',
            'icon' => 'tag',
            'route' => 'categories',
            'roles' => ['Super Admin'],
        ],
    ];

    return array_filter($menus, fn($menu) => in_array($role, $menu['roles'], true));
}

function icon(string $name): string
{
    $icons = [
        'home' => 'M3 12l2-2 4 4L21 4l2 2-12 12z',
        'cpu-chip' => 'M6 2h12a2 2 0 0 1 2 2v2h2v4h-2v4h2v4h-2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2v-4h2V8H2V4h2V2a2 2 0 0 1 2-2zm0 2v16h12V4zm2 2h8v2H8zm0 4h8v2H8zm0 4h5v2H8z',
        'users' => 'M16 11a4 4 0 1 0-8 0 4 4 0 0 0 8 0zm-4 6c-4.418 0-8 2.015-8 4.5V24h16v-2.5c0-2.485-3.582-4.5-8-4.5z',
        'tag' => 'M20.59 13.41 11 3H4v7l9.59 9.59a2 2 0 0 0 2.82 0l4.18-4.18a2 2 0 0 0 0-2.82zM7 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z',
        'logout' => 'M16 13v-2H7V8l-5 4 5 4v-3z M20 3h-8v2h8v14h-8v2h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z',
    ];

    $path = $icons[$name] ?? '';

    return "<svg class=\"w-5 h-5\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"{$path}\"></path></svg>";
}
