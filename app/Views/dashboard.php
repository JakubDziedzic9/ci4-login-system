<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<div class="dashboard-container">
    <h1>Welcome, <?= esc(session('first_name')) ?>!</h1>
    <p>You are logged in.</p>
    <a href="<?= base_url('logout') ?>" class="btn-logout">Log out</a>
</div>
</body>
</html>
