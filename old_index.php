<?php
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/inc/functions.php';
check_csrf();

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$page = isset($_GET['page']) ? preg_replace('/[^a-z_]/','', $_GET['page']) : 'dashboard';
$module = __DIR__ . "/modules/{$page}.php";

include __DIR__ . '/inc/header.php';
if (is_file($module)) {
    include $module;
} else {
    echo "<h2>Stranica nije pronađena</h2>";
}
include __DIR__ . '/inc/footer.php';