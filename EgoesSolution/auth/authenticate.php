<?php
// Prototype authentication logic (no database yet)
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$username = trim($username);

// Very simple role mapping for prototype only
$role = null;
$displayName = null;

if ($username === 'superadmin') {
    $role = 'superadmin';
    $displayName = 'Super Admin';
} elseif ($username === 'admin') {
    $role = 'admin';
    $displayName = 'Robert';
} elseif ($username === 'employee') {
    $role = 'employee';
    $displayName = 'David';
}

if ($role === null || $password === '') {
    $_SESSION['login_error'] = 'Prototype login: use superadmin, admin, or employee with any password.';
    header('Location: login.php');
    exit;
}

$_SESSION['role'] = $role;
$_SESSION['display_name'] = $displayName;

switch ($role) {
    case 'superadmin':
        header('Location: ../superadmin/dashboard.php');
        break;
    case 'admin':
        header('Location: ../admin/dashboard.php');
        break;
    case 'employee':
        header('Location: ../employee/dashboard.php');
        break;
}
exit;


