<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forever Young</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>СПА-Saloon "Forever Young"</h1>
    </header>
    <nav>
        <div class="nav">
            <a href="index1.php">Главная</a>
            <a href="services.php">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="#">Контакты</a>
            <br>
            <br>
            <a style="color: black; font-weight: bolder"> Привет, <?php echo $_COOKIE['login'];?>!</a>
            </div>
    </nav>
    <br>
    <main class="services">
        <div class="contact">
            <h3>Где мы находимся?</h3>
            <p>Мы всегда рядом с Вами!</p>
            <br>
            <h3>Как до нас дозвониться?</h3>
            <p>Наш &#9742;:  Два-два-три, три-два-два, Два-два-три, три-два-два.</p>
            <img src="https://cs6.pikabu.ru/images/big_size_comm/2014-06_5/14034955859636.jpg">
        </div>
    </main>
    <footer>
        <div class="nav">
            <a href="index1.php">Главная</a>
            <a href="services.php">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="#">Контакты</a>
        </div>
    </footer>
</body>
</html>