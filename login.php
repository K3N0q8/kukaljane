<?php
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/inc/functions.php';
check_csrf();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['korisnicko_ime'] ?? '');
    $pass = $_POST['lozinka'] ?? '';
    $stmt = $db->prepare("SELECT * FROM korisnici WHERE korisnicko_ime = ?");
    $stmt->execute([$user]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row && password_verify($pass, $row['lozinka_hash'])) {
        $_SESSION['user'] = $row;
        set_flash('success', 'Uspešna prijava.');
        header('Location: index.php');
        exit;
    } else {
        set_flash('danger', 'Neispravno korisničko ime ili lozinka.');
    }
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <title>Prijava – eSelo Kukaljane</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/architect.css" rel="stylesheet">
</head>
<body>
  <div class="app-main__inner" style="max-width:420px; margin:7vh auto;">
    <?php foreach (get_flash() as $f): ?>
      <div class="alert alert-<?=h($f['type'])?>"><?=h($f['msg'])?></div>
    <?php endforeach; ?>
    <div class="card">
      <div class="card-header">Prijava u admin panel</div>
      <div class="card-body">
        <form method="POST">
          <input type="hidden" name="csrf" value="<?=h(csrf_token())?>">
          <label>Korisničko ime</label>
          <input name="korisnicko_ime" required>
          <label>Lozinka</label>
          <input type="password" name="lozinka" required>
          <button type="submit">Prijavi se</button>
        </form>
        <p class="mt-2">Dobro Dosli u Portal eSelo Kukaljane</p>
      </div>
    </div>
  </div>
</body>
</html>