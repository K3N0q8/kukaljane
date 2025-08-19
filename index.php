<?php
session_start();
require_once __DIR__ . '/config/enhanced_db.php';
require_once __DIR__ . '/inc/functions.php';
check_csrf();

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$page = isset($_GET['page']) ? preg_replace('/[^a-z_]/','', $_GET['page']) : 'modern_dashboard';

// Route to appropriate module
$module_map = [
    'dashboard' => 'modern_dashboard',
    'modern_dashboard' => 'modern_dashboard',
    'finansije' => 'finansije',
    'uplate' => 'enhanced_uplate',
    'projekti' => 'enhanced_projekti',
    'resursi' => 'enhanced_resursi',
    'porodice' => 'enhanced_porodice',
    'dogadjaji' => 'dogadjaji',
    'documents' => 'documents',
    'poruke' => 'poruke',
    'izvestaji' => 'izvestaji',
    'podesavanja' => 'podesavanja',
    'korisnici' => 'korisnici'
];

$module_file = $module_map[$page] ?? $page;
$module = __DIR__ . "/modules/{$module_file}.php";

include __DIR__ . '/inc/modern_header.php';

if (is_file($module)) {
    include $module;
} else {
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h2>Stranica nije pronađena</h2>";
    echo "<p>Tražena stranica ne postoji ili je u razvoju.</p>";
    echo "<a href='?page=modern_dashboard' class='btn btn-primary'>Povratak na kontrolnu tablu</a>";
    echo "</div>";
    echo "</div>";
}

include __DIR__ . '/inc/footer.php';
?>

