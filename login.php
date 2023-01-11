<?php
if (!empty($_POST)) {
    require __DIR__ . '/auth.php';

    $login = $_POST['login'] ?? '';
    $password = md5($_POST['password']);

    if (getUsersList($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: index1.php');
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

    <?php if (isset($error)): ?>
        <span>
            <p class="msg">
            <?= $error ?>
        </span>
    <?php endif; ?>
    
    <form action="login.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
    </form>
    </body>
</html>