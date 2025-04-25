<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<div class="login-container">
    <h1>Login</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="error">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?php if (session()->getFlashdata('login_error')): ?>
        <div class="error">
            <?= esc(session()->getFlashdata('login_error')) ?>
        </div>
    <?php endif ?>

    <form action="/login" method="post">
        <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log in</button>
    </form>
</div>
</body>
</html>
