<?php

return [
    [
        'name' => 'Super Admin',
        'email' => 'superadmin@example.com',
        'role' => 'Super Admin',
        'password' => password_hash('password', PASSWORD_DEFAULT),
    ],
    [
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'role' => 'Admin',
        'password' => password_hash('password', PASSWORD_DEFAULT),
    ],
];
